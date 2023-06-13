<?php

namespace App\Services;

use App\Mail\DelayedPaymentNotification;
use App\Models\Amortization;
use App\Models\Payment;
use App\Models\Project;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PaymentService
{
    /**
     * Process payments before a specified date.
     *
     * @param  string  $date
     */
    public function processPaymentsBeforeDate($date): void
    {
        // Retrieve amortizations that are scheduled before the given date and not yet paid
        $query = Amortization::where('schedule_date', '<=', $date)->where('state', '!=', 'paid');

        // Process amortizations in chunks to avoid memory issues
        $query->chunk(100, function (Collection $amortizations) use ($date) {
            DB::beginTransaction();

            try {
                foreach ($amortizations as $amortization) {
                    if ($amortization->state === 'paid') {
                        continue; // Skip if the amortization is already paid
                    }

                    $project = Project::find($amortization->project_id);

                    // Handle delayed amortization and move to the next one
                    if ($amortization->schedule_date < $date) {
                        $this->handleDelayedAmortization($amortization, $project);

                        continue;
                    }

                    // Handle insufficient funds and move to the next amortization
                    if ($project->wallet_balance < $amortization->amount) {
                        $this->handleInsufficientFunds($amortization, $project);

                        continue;
                    }

                    $this->processPayment($amortization, $project);
                }
                // Commit the transaction if all payments are processed successfully
                DB::commit();
            } catch (\Exception $e) {
                // Rollback the transaction if an exception occurs
                DB::rollback();
                Log::error('Payment processing failed: '.$e->getMessage());
                throw $e;
            }
        });
    }

    /**
     * Handle insufficient funds for an amortization.
     *
     * @param  Amortization  $amortization
     * @param  Project  $project
     */
    private function handleInsufficientFunds($amortization, $project): void
    {
        $promoterEmail = $project->promoter->email;
        $profileEmails = $project->profiles->pluck('email')->toArray();
        $emailRecipients = array_merge([$promoterEmail], $profileEmails);

        Mail::to($emailRecipients)->send(new DelayedPaymentNotification($amortization));

        Log::info('Insufficient funds. Email notification sent for amortization ID: '.$amortization->id);

    }

    /**
     * Handle delayed amortization.
     *
     * @param  Amortization  $amortization
     * @param  Project  $project
     */
    private function handleDelayedAmortization($amortization, $project): void
    {
        $promoterEmail = $project->promoter->email;
        $profileEmails = $project->profiles->pluck('email')->toArray();
        $emailRecipients = array_merge([$promoterEmail], $profileEmails);

        Mail::to($emailRecipients)->send(new DelayedPaymentNotification($amortization));

        Log::info('Delayed payment notification sent for amortization ID: '.$amortization->id);
    }

    /**
     * Process a payment for an amortization.
     *
     * @param  Amortization  $amortization
     * @param  Project  $project
     */
    private function processPayment($amortization, $project): void
    {
        // Start a database transaction to ensure atomicity of the operations
        DB::transaction(function () use ($amortization, $project) {
            $payment = new Payment([
                'amortization_id' => $amortization->id,
                'amount' => $amortization->amount,
                'profile_id' => $project->profile_id,
                'state' => 'paid',
            ]);
            $payment->save();

            // Decrement the wallet_balance attribute of the $project model by $amortization->amount
            $project->decrement('wallet_balance', $amortization->amount);

            // Update the state attribute of the $amortization model to 'paid'
            $amortization->update(['state' => 'paid']);
        });

        Log::info('Payment processed successfully for amortization ID: '.$amortization->id);
    }
}

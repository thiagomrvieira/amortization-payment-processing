<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Amortization;
use App\Models\Payment;
use App\Mail\DelayedPaymentNotification;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class PaymentService
{
    public function processPaymentsBeforeDate($date)
    {
        $query = Amortization::where('schedule_date', '<=', $date)->where('state', '!=', 'paid');

        $query->chunk(100, function (Collection $amortizations) use ($date) {
            DB::beginTransaction();

            try {
                foreach ($amortizations as $amortization) {
                    if ($amortization->state === 'paid') {
                        continue;
                    }

                    $project = Project::find($amortization->project_id);

                    if ($amortization->schedule_date < $date) {
                        $this->handleDelayedAmortization($amortization, $project);
                        continue;
                    }

                    if ($project->wallet_balance < $amortization->amount) {
                        $this->handleInsufficientFunds($amortization, $project);
                        continue;
                    }

                    $this->processPayment($amortization, $project);
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                Log::error('Payment processing failed: ' . $e->getMessage());
                throw $e;
            }
        });
    }

    private function handleInsufficientFunds($amortization, $project)
    {
        $promoterEmail = $project->promoter->email;
        $profileEmails = $project->profiles->pluck('email')->toArray();
        $emailRecipients = array_merge([$promoterEmail], $profileEmails);

        Mail::to($emailRecipients)->send(new DelayedPaymentNotification($amortization));

        Log::info('Insufficient funds. Email notification sent for amortization ID: ' . $amortization->id);

    }

    private function handleDelayedAmortization($amortization, $project)
    {
        $promoterEmail = $project->promoter->email;
        $profileEmails = $project->profiles->pluck('email')->toArray();
        $emailRecipients = array_merge([$promoterEmail], $profileEmails);

        Mail::to($emailRecipients)->send(new DelayedPaymentNotification($amortization));

        Log::info('Delayed payment notification sent for amortization ID: ' . $amortization->id);
    }

    private function processPayment($amortization, $project)
    {
        $payment = new Payment();
        $payment->amortization_id = $amortization->id;
        $payment->amount = $amortization->amount;
        $payment->profile_id = $project->profile_id;
        $payment->state = 'paid';
        $payment->save();

        $project->wallet_balance -= $amortization->amount;
        $project->save();

        $amortization->state = 'paid';
        $amortization->save();

        Log::info('Payment processed successfully for amortization ID: ' . $amortization->id);
    }
}

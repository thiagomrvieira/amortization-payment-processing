<?php

namespace Database\Seeders;

use App\Models\Amortization;
use App\Models\Payment;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amortizations = Amortization::where('state', 'paid')->get();

        foreach ($amortizations as $amortization) {
            $profile = Profile::inRandomOrder()->first();

            Payment::create([
                'amortization_id' => $amortization->id,
                'amount' => $amortization->amount,
                'state' => $amortization->state,
                'profile_id' => $profile->id,
            ]);
        }
    }
}

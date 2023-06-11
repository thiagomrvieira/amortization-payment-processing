<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProfileSeeder::class,
            PromoterSeeder::class,
            ProjectSeeder::class,
            AmortizationSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}

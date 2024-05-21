<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentModes = ['Cash', 'Online'];

        foreach ($paymentModes as $paymentMode) {
            \App\Models\PaymentMode::create([
                'mode' => $paymentMode,
            ]);
        }
    }
}

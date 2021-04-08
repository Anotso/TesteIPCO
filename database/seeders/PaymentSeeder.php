<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'customer_id' => 1,
            'dtPayment' => '2020-11-04',
            'payment' => 39.90,
        ]);
        Payment::create([
            'customer_id' => 1,
            'dtPayment' => '2020-12-05',
            'payment' => 39.90,
        ]);
        Payment::create([
            'customer_id' => 2,
            'dtPayment' => '2020-11-04',
            'payment' => 55.79,
        ]);
        Payment::create([
            'customer_id' => 2,
            'dtPayment' => '2020-12-05',
            'payment' => 55.79,
        ]);
        Payment::create([
            'customer_id' => 3,
            'dtPayment' => '1989-11-04',
            'payment' => 30,
        ]);
        Payment::create([
            'customer_id' => 3,
            'dtPayment' => '2020-12-05',
            'payment' => 30,
        ]);
    }
}

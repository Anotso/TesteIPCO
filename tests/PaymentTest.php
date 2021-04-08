<?php

use App\Models\Payment;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class PaymentTest extends TestCase
{
    /** @test */
    public function check_if_payment_columns_is_correct()
    {
        $payment = new Payment();
        $expected = ['customer_id', 'dtPayment', 'payment'];
        $resultCompared = array_diff($expected, $payment->getFillable());
        if(count($resultCompared) === 0){
            $this->assertEquals(0, count($resultCompared));
        }else{
            dd($resultCompared);
        }
    }
}

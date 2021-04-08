<?php

use App\Models\Customer;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CustomerTest extends TestCase
{
    /** @test */
    public function check_if_customer_columns_is_correct()
    {
        $customer = new Customer();
        $expected = ['name', 'dtNasc', 'email'];
        $resultCompared = array_diff($expected, $customer->getFillable());
        if(count($resultCompared) === 0){
            $this->assertEquals(0, count($resultCompared));
        }else{
            dd($resultCompared);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Teste 1',
            'dtNasc' => '1998-12-05',
            'email' => 'teste1@teste.com',
        ]);
        Customer::create([
            'name' => 'Teste 2',
            'dtNasc' => '1989-01-25',
            'email' => 'teste2@teste.com',
        ]);
        Customer::create([
            'name' => 'Teste 3',
            'dtNasc' => '1998-04-12',
            'email' => 'teste3@teste.com',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request){
        // return("Teste");
        return ($request);
    }
    public function all()
    {
        return("Todos os clientes");
    }
    public function show($id)
    {
        return("Retorna o cliente $id");
    }
    public function showPayment($id)
    {
        return("Retorna todos os pagamentos do usuário com ID: $id");
    }
    public function update($id)
    {
        # code...
    }
    public function destroy($id)
    {
        # code...
    }
}

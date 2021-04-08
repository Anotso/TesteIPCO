<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request){
        $validateEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
        if (preg_match($validateEmail, $request->email)!=0) {
            try {
                if($customer = Customer::create($request->all())){
                    return(json_encode($customer));
                }else{
                    return(json_encode(['state'=> 202, 'message' => 'Não foi possível atualizar os dados']));
                }
            } catch (\Throwable $th) {
                return(json_encode($th));
            }
        }else{
            return('Formato de e-mail inválido');
        }
    }
    public function all()
    {
        $customer = Customer::all();
        return(json_encode($customer));
    }
    public function show($id)
    {
        $customer = Customer::find($id);
        if($customer!=null){
            return(json_encode($customer));
        }else{
            return(json_encode(['state'=> 204, 'message' => 'Usuário não localizado']));
        }
    }
    public function showPayment($id)
    {
        $customer = Customer::find($id)->with('payments')->first();
        if($customer!=null){
            return(json_encode($customer));
        }else{
            return(json_encode(['state'=> 204, 'message' => 'Usuário não localizado']));
        }
    }
    public function update(Request $request, $id)
    {
        $validateEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
        if (preg_match($validateEmail, $request->email)!=0) {
            $customer = Customer::find($id);
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->dtNasc = $request->dtNasc;
            if ($customer->save()) {
                return(json_encode($customer));
            }else{
                //Neste caso a requisição foi aceita, mas por algum motivo não foi possível atualizar o dado
                return(json_encode(['state'=> 202, 'message' => 'Não foi possível atualizar os dados']));
            }
        }else{
            return('Formato de e-mail inválido');
        }
    }
    public function destroy($id)
    {
        if ($customer = Customer::destroy($id)) {
            return(json_encode(['state'=> 200, 'message' => 'Usuário excluido com sucesso']));
        }else{
            return(json_encode(['state'=> 202, 'message' => 'Não foi possível excluir o usuário']));
        }
    }
}

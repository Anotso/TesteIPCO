<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request){
        $payment = Payment::create($request->all());
        return(json_encode($payment));
    }
    public function all()
    {
        $payment = Payment::all();
        return(json_encode($payment));
    }
    public function show($id)
    {
        $payment = Payment::find($id);
        if($payment!=null){
            return(json_encode($payment));
        }else{
            return(json_encode(['state'=> 204, 'message' => 'Pagamento não localizado']));
        }
    }
    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->customer_id = $request->customer_id;
        $payment->dtPayment = $request->dtPayment;
        $payment->payment = $request->payment;
        if ($payment->save()) {
            return(json_encode($payment));
        }else{
            //Neste caso a requisição foi aceita, mas por algum motivo não foi possível atualizar o dado
            return(json_encode(['state'=> 202, 'message' => 'Não foi possível atualizar os dados']));
        }
    }
    public function destroy($id)
    {
        if ($payment = Payment::destroy($id)) {
            return(json_encode(['state'=> 200, 'message' => 'Pagamento excluido com sucesso']));
        }else{
            return(json_encode(['state'=> 202, 'message' => 'Não foi possível excluir o pagamento']));
        }
    }
}

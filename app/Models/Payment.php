<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'customer_id', 'dtPayment', 'payment'
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}

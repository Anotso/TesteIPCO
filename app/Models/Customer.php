<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'dtNasc', 'email'
    ];
    public function payments(){
        return $this->hasMany(Payment::class, 'customer_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        "state",
        "date",
        "id",
        "id_customer",
        "amount"
     ];
    
    public function Customer()
    {
    return $this->belongsTo(customer::class, "id_customer");
    }
    public function PaymentMethodss()
    {
    return $this->hasMany(PaymentMethods::class);
    }
    public function Payments()
    {
    return $this->hasMany(Payment::class);
    }
    public function Invoice()
    {
    return $this->hasMany(Invoice::class);
    }
}

<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;
class Invoices extends Model
{
protected $table = 'invoices';
protected $fillable = [
	"state",
	"date",
	"id",
	"amount"
 ];

public function PaymentMethodss()
{
return $this->hasMany(PaymentMethods::class);
}
public function Payments()
{
return $this->hasMany(Payment::class);
}
public function Invoicess()
{
return $this->hasMany(Invoices::class);
}
}
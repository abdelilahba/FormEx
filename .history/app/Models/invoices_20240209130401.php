<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
class Invoices extends Model
{
protected $table = 'invoices';
protected $fillable = [
	"state",
	"date",
	"id",
	"amount",
	"id_customer"
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
public function Customer()
{
return $this->belongsTo(customer::class, "id_customer");
}
}
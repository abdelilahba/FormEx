<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Invoices;
use App\Models\Customer;
class Payment extends Model
{
protected $table = 'payment';
protected $fillable = [
	"id_customer",
	"state",
	"id_invoice",
	"amount",
	"date",
	"id"
 ];

public function Customer()
{
return $this->belongsTo(customer::class, "id_customer");
}
public function Invoice()
{
return $this->belongsTo(invoice::class, "id_invoice");
}
public function Payments()
{
return $this->hasMany(Payment::class);
}
}

<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;
class PaymentMethods extends Model
{
protected $table = 'payment_methods';
protected $fillable = [
	"id_invoice",
	"customer_id",
	"expiration_date",
	"created_at",
	"card_number",
	"updated_at",
	"details",
	"id",
	"payment_type",
	" name_card",
	"cvv"
 ];

public function Invoice()
{
return $this->belongsTo(invoice::class, "id_invoice");
}
public function CustomerId()
{
return $this->belongsTo(customer::class, "customer_id");
}
public function PaymentMethods()
{
return $this->hasMany(PaymentMethods::class);
}
}
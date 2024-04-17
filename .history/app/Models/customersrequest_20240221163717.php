<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class customersrequest extends Model
{
    use HasFactory;
    protected $table = 'customer_requests';
protected $fillable = [
	"id",
	"customer_id",
	"status",
	"subscription_type",
	"additional_details",
	"request_date",
	"last_updated",
    "lastrequest_date",
    "request_type"
 ];

public function CustomerId()
{
return $this->belongsTo(customer::class, "customer_id");
}

}

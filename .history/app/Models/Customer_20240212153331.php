<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentMethods;
use App\Models\Invoice;
class Customer extends Model
{
protected $table = 'customers';
protected $fillable = [
	"id",
	"first_name",
	"last_name",
	"email",
	"hashed_password",
	"phone_number",
	"address_line1",
	"address_line2",
	"city",
	"state",
	"postal_code",
	"country",
	"username",
	"profile_picture_url",
	"language_preference",
	"time_zone",
	"communication_preferences",
	"security_question",
	"security_answer",
	"company_name",
	"job_title",
	"industry",
	"company_size",
	"terms_agreed",
	"privacy_agreed",
	"age_verified",
	"data_consent",
	"created_at",
	"updated_at",
	"registration_date",
	"registration_method",
	"registration_ip",
	"registration_metadata",
	"custom_link",
	"points",
	"subdomain",
	"post_code",
	"specialization",
	"random_number"
 ];

public function Email()
{
return $this->belongsTo(customer::class, "email");
}
public function Username()
{
return $this->belongsTo(customer::class, "username");
}
public function Customerss()
{
return $this->hasMany(Customer::class);
}
public function PaymentMethods()
{
return $this->hasMany(PaymentMethods::class);
}

public function Invoice()
{
return $this->hasMany(Invoice::class);
}

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'last_name',
        'first_name',
        'position',
        'phone',
        'email',
        'city',
        'country',
    ];

    // If you have any other relationships or custom methods, define them here
}
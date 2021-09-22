<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','owner_id','property_id','appointment_date','price','status','issued_date','name','email','salary','address','previous_address','occupation','approve','agreement','contact'
    ];

}

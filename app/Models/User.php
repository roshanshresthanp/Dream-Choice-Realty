<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name','contact','address','role','photo','occupation',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function property()
    {
        return $this->hasMany(Property::class,'owner_id');
    }
    public function userBooking()
    {
        return $this->hasMany(Booking::class,'user_id');
    }
    public function ownerBooking()
    {
        return $this->hasMany(Booking::class,'owner_id');
    }

    public function userReportIssue()
    {
        return $this->hasMany(ReportIssue::class,'user_id');
    }
    public function ownerReportIssue()
    {
        return $this->hasMany(ReportIssue::class,'owner_id');
    }

    public function sender()
    {
        return $this->hasMany(Message::class,'sender_id');
    }
    public function receiver()
    {
        return $this->hasMany(Message::class,'receiver_id');
    }
    // public function cardDetail()
    // {
    //     return $this->hasOne(CardDetail::class,'user_id');
    // }
    public function payment()
    {
        return $this->hasMany(Payment::class,'paid_by');
    }
}

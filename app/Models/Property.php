<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','rent','owner_id','bedroom','bathroom',
    'garage','area','location','facility','photo','featured_photo'
    ];
    // protected $fillable = array('*');


    public function appointmentDate()
    {
        return $this->belongsToMany(AppointmentDate::class,'property_dates','property_id','date_id');
    }
}

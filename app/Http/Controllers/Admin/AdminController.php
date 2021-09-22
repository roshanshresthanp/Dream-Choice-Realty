<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\Booking;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;


class AdminController extends Controller
{
    
    
    public function property()
    {
        if(Gate::allows('isAdmin')){
        $properties = Property::all();
        $user = User::all();
        return view('admin.property.all-index',compact('properties','user'));
        }
        else
        return view('admin.error.error');
    }

    public function booking()
    {
        if(Gate::allows('isAdmin')){
            $booking = Booking::all();
            $user = User::all();
            $property = Property::all();
            return view('admin.booking.all-index',compact('booking','user','property'));
        }
        else
        return view('admin.error.error');

    }

    public function activeBooking()
    {
        if(Gate::allows('isAdmin')){
            $booking = Booking::where(['status'=>1,'approve'=>1])->latest()->get();
            $user = User::all();
            $property = Property::all();
            return view('admin.booking.all-active-booking',compact('booking','user','property'));
        }
        else
        return view('admin.error.error');

    }
    

    public function bookingStatus($id)
    {

    }
}

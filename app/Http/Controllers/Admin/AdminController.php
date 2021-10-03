<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\Booking;
use App\Models\ReportIssue;
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
    public function tenantListView($id)
    {
        // dd($id);
        $book = Booking::find($id);
        $property = Property::all();
        // foreach(json_decode($book->document) as $img)
        // {
        //     // dd($img);
        //     var_dump($img);
        // }

        return view('admin.booking.view-tenant-list',compact('book','property'));
        
    }
    public function reportIssueView($id){
        $report = ReportIssue::find($id);
        // dd($id);
        $property = Property::all();
        return view('admin.report-issue.view-issue-report',compact('report','property'));
    }
    public function bookingRequestView($id)
    {
        // dd($id);
        $book = Booking::find($id);
        // foreach(json_decode($book->document) as $img)
        // {
        //     // dd($img);
        //     var_dump($img);
        // }
        $property = Property::all();

        return view('admin.booking.view-booking-request',compact('book','property'));
        
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
    

    public function reportedIssues()
    {
        // $user = User::find(Auth::user()->id);
        $property = Property::all();
        $issue = ReportIssue::all();
        return view('admin.report-issue.all-index',compact('property','issue'));
    }
}

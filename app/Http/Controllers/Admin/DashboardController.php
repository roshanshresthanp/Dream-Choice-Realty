<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Property;
use App\Models\ReportIssue;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('dsad');
        $user = auth()->user();
        $book = Booking::where('approve','1')->get();
        $owners = User::where('role','property-owner')->get();
        $powners = User::where('role','property-owner')->latest()->take(5)->get();
        $contacts = Contact::all();
        $property = Property::all();
        $users = User::all();
        $issue = ReportIssue::where('complete','0')->latest()->take(5)->get();

        //


        //
        return view('admin.dashboard.index',compact('issue','users','user','book','powners','owners','contacts','property'));
    }

    public function ownerDashboard()
    {

    }

    public function userDashboard()
    {
        
    }
}

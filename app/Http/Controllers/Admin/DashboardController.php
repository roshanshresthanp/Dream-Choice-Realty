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
        //admindashboard
        $book = Booking::where('approve','1')->get();
        $owners = User::where('role','property-owner')->get();
        $powners = User::where('role','property-owner')->latest()->take(5)->get();
        $contacts = Contact::all();
        $property = Property::all();
        $users = User::all();
        $issue = ReportIssue::where('complete','1')->latest()->take(5)->get();

        //ownerdashboard
        $income = 0;
        $charge = 0;
        foreach($user->received as $rec)
        {
            $income += $rec->amount;
            $charge += $rec->charge;
        }
        // dd($income,$charge);



        //
        return view('admin.dashboard.index',compact('charge','income','issue','users','user','book','powners','owners','contacts','property'));
    }

    public function ownerDashboard()
    {

    }

    public function userDashboard()
    {
        
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Property;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Helper;

class BookingController extends Controller
{
    public function store(Request $request,$proId){

        // dd(Property::find($proId)->owner_id);

        // dd($request->all());
        if(Gate::denies('isAdmin') && (Gate::denies('isOwner')))
        {

                $book = new Booking;
                // $book->previous_address = $request->previous_address;
                // $book->salary = $request->salary;
                $book->appointment_date = $request->appointment_date;
                $book->property_id = $proId;
                $book->owner_id = Property::find($proId)->owner_id;
            if(Auth::user())
            {
                $user= User::find(Auth::user()->id);
                $book->user_id = Auth::user()->id;
                // $book->address = $user->address;
                $book->contact =$user->contact;
                $book->name =$user->name;
                // $book->occupation =$user->occupation;
                $book->email =$user->email;
                $userName = $user->name;

            }
            else{
                // $book->address = $request->address;
                $book->contact =$request->contact;
                $book->name =$request->name;
                // $book->occupation =$request->occupation;
                $book->email =$request->email;
                $userName = $request->name;

            }
            
            $book->save();
            $admin = User::where('role','office-staff')->first();
            $info='You have recieved a new booking request from ';
             {{Helper::notification($admin,$info,$userName);}}

            return redirect()->back()->with('success','Booking request sent successfully');
        }else

        return redirect()->back()->with('error','Sorry ,You dont have privilege to perform this action');

    }
    public function index()
    {
        //proprtyy owner active booking
        $owner = User::find(Auth::user()->id);
        // dd($owner->ownerBooking()); 
        $booking = Booking::where('status','1')->latest()->get();
        $user = User::all();
        $property = Property::all();
        return view('admin.booking.tenant',compact('booking','user','property','owner'));
    }

    public function activeBooking()
    {
        $owner = User::find(Auth::user()->id);
        // dd($owner->ownerBooking()); 
        $booking = Booking::where('status','1')->latest()->get();
        $user = User::all();
        $property = Property::all();
        return view('admin.booking.owner-booking',compact('booking','user','property','owner'));
    }
    public function tenantList()
    {
        if(Gate::allows('isOwner')){
        //proprtyy owner
        $owner = User::find(Auth::user()->id);
        // dd($owner->ownerBooking()); 
        $booking = Booking::where('status','1')->latest()->get();
        $user = User::all();
        $property = Property::all();
        return view('admin.booking.tenant',compact('booking','user','property','owner'));
        }
        else
        return view('admin.error.error');

    }

    public function activeUserBooking()
    {
        $owner = User::find(Auth::user()->id);
        // dd($owner->ownerBooking()); 
        $booking = Booking::where('status','1')->latest()->get();
        $user = User::all();
        $property = Property::all();
        return view('admin.booking.user-booking',compact('booking','user','property','owner'));
    }


    public function destroy($id)
    {
        if(Gate::allows('isAdmin') && Booking::find($id)->delete())
        return redirect()->back()->with('success','Booking deleted successfully');
        else
        return view('admin.error.error');
    }
    public function status($id)
    {
        $book = Booking::find($id);
        if($book->status == 0)
        $book->status =1;
        $book->save();

        // $booking
        $pro = Property::find($book->property_id);
        $owner = User::find($book->owner_id);
        $name = $pro->name;
        //     $detail =[
        //     'date'=>date("F j, Y, g:i a"),
        //     'name'=> $pro->name,
        //     'info'=>'You have recieved a new tenant request for '
        // ];
        // Notification::send($owner, new allNotification($detail));
        {{Helper::notification($owner,'You have recieved a new tenant request for ',$name);}}

        

        return redirect()->back()->with('success','Booking request has sent to Property Owner');
    }
    public function approve($id)
    {
        $book = Booking::find($id);
        if($book->approve == 0)
        $book->approve=1;
        // $book->save();

        $pro = Property::find($book->property_id);
        $client = User::find($book->user_id);

        if(isset($book->user_id))
        {
            $pro = Property::find($book->property_id);
            {{Helper::notification($client,'Your booking request is approved for ',$pro->name);}}

        }
        $admin = User::where('role','office-staff')->first();
        $info='Property owner has assigned ' .$pro->name.'  to ';
        {{Helper::notification($admin,$info,$client->name);}}

        

        return redirect()->back()->with('success','Booking request has approved');
    }
}

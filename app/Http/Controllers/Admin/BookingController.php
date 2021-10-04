<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentMail;
use App\Models\Booking;
use App\Models\Property;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Helper;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\BookingMail;
use App\Mail\UserDetail;
use App\Mail\UserRegistration;
use App\Models\ChargedAmount;
use Illuminate\Support\Facades\Storage;




class BookingController extends Controller
{
    public function store(Request $request,$proId){

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

    public function edit($id)
    {
        $book = Booking::find($id);
        return view('admin.booking.edit',compact('book'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'recent_address'=>'nullable|string|max:255',
            'job_description'=>'required|max:1000|string',
            'income'=>'required|gt:0|numeric',
            'expenses'=>'required|gt:0|numeric',
            'photo.*'=>'nullable|mimes:png,svg,jpeg,jpg,webp',



        ]);
        $book = Booking::find($id);
        $book->recent_address = $request->recent_address;
        $book->job_description = $request->job_description;
        $book->income = $request->income;
        $book->expenses = $request->expenses;
        if($request->hasFile('photo'))
            {
                foreach($request->file('photo') as $file)
                {
                    $FilenameWithExtension1 = $file->getClientOriginalName();
                    $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
                    $Extension1 = $file->getClientOriginalExtension();
                    $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
                    $path1 = $file->storeAs('public/images/booking/document',$FileToStore1);
                    if(isset($book->photo))
                    {
                        foreach(json_decode($book->photo) as $img)
                        Storage::delete('public/images/booking/document'.$img);
                    }

                    $image[] = $FileToStore1; 
                }
                $book->document = json_encode($image);    
            }
            $book->save();
        return redirect('/admin/bookings')->with('success','Booking detail has been updated');
    }
    public function activeBooking()
    {
        if(Gate::allows('isOwner')){
        $owner = User::find(Auth::user()->id);
        // dd($owner->ownerBooking()); 
        $booking = Booking::where('status','1')->latest()->get();
        $user = User::all();
        $property = Property::all();
        return view('admin.booking.owner-booking',compact('booking','user','property','owner'));
        }else
        return view('admin.error.error'); 
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
        $user = User::where('role','rental-client')->get();
        $charge = ChargedAmount::all();
        $property = Property::all();
        return view('admin.booking.user-booking',compact('booking','user','property','owner','charge'));
    }


    public function destroy($id)
    {
        if(Gate::allows('isAdmin'))
        {
       $book = Booking::find($id);
       $pro = Property::find($book->property_id);
        if(isset($pro->status) && $pro->status==0){
            $pro->status=1;
            $pro->save();
        } 

        if(isset($book->photo))
        {
            foreach(json_decode($book->photo) as $img)
            Storage::delete('public/images/booking/document/'.$img);
        }
        
        $book->delete();
        return redirect()->back()->with('success','Booking deleted successfully');
    }
        else
        return view('admin.error.error');
    }


    public function notifyUser($id)
    {

        $user = Booking::find($id);
        $pro  = Property::find($user->property_id);

        $data =[
            'email'=>$user->email,
            'name'=>$user->name,
            'property'=>$pro->name,
            'rent'=>$pro->rent,
            'appointment_date'=>$user->appointment_date
        ];
        // dd($data['email'],$data['password']);
        isset($data['email'])?Mail::to($data['email'])->send(new AppointmentMail($data)):'';
        if($user->notify ==0){
        $user->notify = 1;
        $user->save();
        return redirect()->back()->with('success','Appointment mail sent successfully to tenant');
        }
        
    }
    public function userDetail($id)
    {

        $user = Booking::find($id);
        $pro  = Property::find($user->property_id);

        $data =[
            'email'=>$user->email,
            'name'=>$user->name,
            'property'=>$pro->name,
            'rent'=>$pro->rent,
            'appointment_date'=>$user->appointment_date

        ];
        // dd($data['email'],$data['password']);
        isset($data['email'])?Mail::to($data['email'])->send(new UserDetail($data)):'';
        if($user->detail ==0){
        $user->detail = 1;
        $user->save();
        return redirect()->back()->with('success','User detail form mail sent successfully');
        }
        
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
        if(isset($pro) && isset($owner)){
        $name = $pro->name;
        {{Helper::notification($owner,'You have recieved a new tenant request for ',$name);}}

        }
        return redirect()->back()->with('success','Booking request has sent to Property Owner');
    }

    public function approve($id)
    {
        $book = Booking::find($id);
        if($book->approve == 0)
        $book->approve=1;
        $book->issued_date = date('Y-m-d', strtotime("+7 days"));
        $book->expiry_date = date('Y-m-d', strtotime("+372 days"));

        $check = $book->user_id;
        if($check==null)
        {
            $pass = rand();
            $user = new User;
            $user->name = $book->name;
            $user->email = $book->email;
            $user->contact = $book->contact;
            $user->password = Hash::make($pass);
            $user->role = 'rental-client';
            $user->save();
            Session::flash('message', 'User registered successfully'); 
            $data =[
                'email'=>$book->email,
                'password'=>$pass
            ];
            // dd($data['email'],$data['password']);
            isset($data['email'])?Mail::to($data['email'])->send(new UserRegistration($data)):'';
            $book->user_id = $user->id;
        }
       
        $book->save();
        $pro = Property::find($book->property_id);
        if($pro->status==1){
            $pro->status=0;
            $pro->save();
        } 
        $client = User::find($book->user_id);

        $booking = [
            'email'=>$book->email,
            'property'=>$pro->name,
            'price'=>$pro->rent
        ];
        isset($booking['email'])?Mail::to($booking['email'])->send(new BookingMail($booking)):'';

        {{Helper::notification($client,'Your booking request is approved for ',$pro->name);}}

        $admin = User::where('role','office-staff')->first();
        $info='Property owner has assigned ' .$pro->name. ' to ';
        {{Helper::notification($admin,$info,$book->name);}}
        
        return redirect()->back()->with('success','Booking request has approved');
    }
}

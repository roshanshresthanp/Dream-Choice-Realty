<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\CardDetail;
use App\Models\Payment;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('isAdmin'))
        {
        $payment = Payment::all();
        $user = User::where('role','rental-client')->get();
        $book = Booking::where('approve',1)->get();
        $property = Property::all();
        return view('admin.payment.index',compact('payment','user','property','book'));
        }
        else
        return view('admin.error.error');
    }

    public function userIndex()
    {
        // $payment = Payment::all();
        $payment = auth()->user()->payment;
        $book = Booking::where('approve',1)->get();
        // dd($payment);
        $user = User::where('role','rental-client')->get();
        $property = Property::all();
        return view('admin.payment.user-payment',compact('payment','user','property','book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pay = new Payment;
        $pay->paid_by = auth()->user()->id;
        $receiver = User::where('role','office-staff')->first()->id;
        $pay->received_by = $receiver;
        $pay->property_id = $request->property_id;
        $pay->amount = $request->amount;
        $pay->save();
        $booking = Booking::where(['property_id'=>$request->property_id,'approve'=>1])->first();
        // foreach($booking as $book){
            if($request->property_id == $booking->property_id)
            {
                $booking->issued_date = date('Y-m-d', strtotime($booking->issued_date. '+15 days'));
                $booking->save();
            }


        // }

        //     $data = new CardDetail;
        //     $data->card_number = $request->card_number;
        //     $data->security_code = $request->security_code;
        //     $data->expiry_date = $request->expiry_date;
        // User::find(auth()->user()->id)->cardDetail()->save($data);
        return redirect()->back()->with('success','Payment made successfully !!');
        // CardDetail::find()->user()->associate($user)->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

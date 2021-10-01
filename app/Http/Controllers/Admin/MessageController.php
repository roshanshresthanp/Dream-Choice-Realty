<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('isAdmin')){
            $msg = User::find(Auth::user()->id);
            $user = User::where('role','!=','office-staff')->latest()->get();
            return view('admin.message.index',compact('msg','user'));
        }else
        return view('admin.error.error');

    }
    public function ownerMessage()
    {
        if(Gate::allows('isOwner')){
            $msg = User::find(Auth::user()->id);
            $user = User::where('role','office-staff')->first();
            return view('admin.message.owner-index',compact('msg','user'));
        }else
        return view('admin.error.error');

    }
    public function userMessage()
    {
        if(Gate::allows('isClient')){
            $msg = User::find(Auth::user()->id);
            $user = User::where('role','office-staff')->first();

            return view('admin.message.user-index',compact('msg','user'));
        }else
        return view('admin.error.error');

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
        $this->validate($request,[
            'receiver_id'=>'required',
            'subject'=>'required|max:245',
            'description'=>'required|max:1000'

        ]);
        $data = new Message;
        $data->subject = $request->subject;
        $data->description = $request->description;
        $data->sender_id = Auth::user()->id;
        $data->receiver_id = $request->receiver_id;
        $data->save();

        return redirect()->back()->with('success','Message sent successfully');

        // $data->owner_id = Property::find($request->property_id)->owner_id;
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
        Message::find($id)->delete();
        return redirect()->back()->with('success','Message deleted successfully');

    }
}

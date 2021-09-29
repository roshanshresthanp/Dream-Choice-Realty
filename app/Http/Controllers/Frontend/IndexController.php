<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\User;
use App\Models\Contact;

class IndexController extends Controller
{
    public function property()
    {
        $properties = Property::all();
        $user = User::all();
        return view('guest.property',compact('properties','user'));
    }
    
    public function propertyDetail($id)
    {
        $pro = Property::find($id);
        $property = Property::latest()->take(3)->get();
        // dd($property);
        return view('guest.view-property',compact('pro','property'));
    }
    public function contactUs()
    {
        return view('guest.contact');
    }
    public function search(Request $request)
    {
        $this->validate($request,[
        'rent'=>'nullable|numeric',
        'location'=>'nullable|string',
    ]);
        $rent = $request->rent;
        $location = $request->location;

        // $notices = News::where('categories','like','%Notice%')->where('deleted',null)->orderBy('published_en','desc')->get();

        $result = Property::where('location','like',$location)->where('rent','<',$rent)->get();

      


        // $user = User::all();
        // dd($result);



         return view('guest.search-property',compact('result'));
    }
}

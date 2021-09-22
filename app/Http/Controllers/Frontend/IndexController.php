<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\User;

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
        // $user = User::all();
        // dd($pro);
        return view('guest.view-property',compact('pro'));
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

        $result = Property::where('location','like',$location)->orwhere('rent','<',$rent)->get();

        dd($result);


        // $user = User::all();
        // dd($pro);



        // return view('guest.search-property',compact('pro1'));
    }
}

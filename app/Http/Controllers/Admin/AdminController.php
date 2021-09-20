<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function property()
    {
        $properties = Property::all();
        $user = User::all();
        return view('admin.property.all-index',compact('properties','user'));
    }
}

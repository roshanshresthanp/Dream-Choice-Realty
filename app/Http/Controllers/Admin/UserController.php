<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('isAdmin')){
        $user = User::where('role','!=','office-staff')->latest()->get();
        return view('admin.user.index',compact('user'));
        }
        else
        return view('admin.error.error');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('isAdmin'))
        return view('admin.user.create');
        else
        return view('admin.error.error');
        
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

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|string|max:255|unique:users',
            'address'=>'nullable|string|max:255',
            'photo'=>'nullable|mimes:png,svg,jpeg,jpg',
            'password'=>'required|string|min:8|same:password_confirmation',
            'password_confirmation'=>'required|min:8',
            'role'=>'required|string|max:255',
            'occupation'=>'nullable|string|max:255'

        ]);

        $data = $request->all();
        if($request->hasFile('photo')){
                $filenameWithExt = $request->file('photo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('photo')->getClientOriginalExtension();
                $photo = $filename.'_'.time().".".$extension;
                $path = $request->file('photo')->storeAs('public/images/user', $photo);
                $data['photo'] = $photo;
            }
            $data['password'] = Hash::make($request->password);

        if(User::create($data))
        return redirect('/admin/user')->with('success','User added successfully');
        else
        return redirect('admin/user')->with('error','Sorry user added failed');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('isAdmin') || (Auth::user()->id==$id)){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
        }
        else
        return view('admin.error.error');

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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'contact' => 'required|string|max:255',
            'address'=>'nullable|string|max:255',
            'photo'=>'nullable|mimes:png,svg,jpeg,jpg',
            'password'=>'required|string|min:8|same:password_confirmation',
            'password_confirmation'=>'required|min:8',
            'role'=>'required|string|max:255',
            'occupation'=>'nullable|string|max:255'


        ]);
        $data = $request->all();
        $user=User::find($id);

        if($request->hasFile('photo')){
                $filenameWithExt = $request->file('photo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('photo')->getClientOriginalExtension();
                $photo = $filename.'_'.time().".".$extension;
                Storage::delete('public/images/user/'.$user->photo);
                $path = $request->file('photo')->storeAs('public/images/user', $photo);
                $data['photo'] = $photo;
            }
        
        if($user->update($data))
        return redirect('admin/user')->with('success','User updated successfully');
        else
        return redirect('admin/user')->with('error','Sorry user updated failed');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        Storage::delete('public/images/user/'.$user->photo);
        return redirect()->back()->with('success','User deleted successfully');
        
    }
}

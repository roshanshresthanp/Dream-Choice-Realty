<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = User::where('role','!=','office-staff')->get();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');

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
        return redirect('/admin/user')->with('success','User added');
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
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
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
        return redirect('admin/user')->with('success','User updated');
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
        return redirect()->back()->with('success','User deleted');
        

    }
}

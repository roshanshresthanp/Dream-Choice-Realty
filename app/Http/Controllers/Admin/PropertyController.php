<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use App\Models\User;
use App\Models\Property;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner = User::find(Auth::user()->id);
        // dd($owner->property());
        return view('admin.property.index',compact('owner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('isOwner'))
        return view('admin.property.create');
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
        if(Gate::denies('isClient')){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'description' => 'nullable|string|max:1500',
            'facility' => 'nullable|string|max:1500',
            'rent'=>'required|numeric|gt:0',
            'location'=>'required|string|max:255',
            'photo.*'=>'nullable|mimes:png,svg,jpeg,jpg,webp|max:10000',
            'featured_photo'=>'nullable|mimes:png,svg,jpeg,jpg,webp|max:10000',
            'bathroom'=>'nullable|string|max:255',
            'bedroom'=>'nullable|string|max:255',
            'garage'=>'nullable|string|max:255',
        ]);
        $data = $request->all();
        if($request->hasFile('featured_photo')){
            $filenameWithExt = $request->file('featured_photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('featured_photo')->getClientOriginalExtension();
            $photo = $filename.'_'.time().".".$extension;
            $path = $request->file('featured_photo')->storeAs('public/images/property', $photo);
            $data['featured_photo'] = $photo;
        }
        if($request->hasFile('photo'))
        {
            foreach($request->file('photo') as $file)
            {
                $FilenameWithExtension1 = $file->getClientOriginalName();
                $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
                $Extension1 = $file->getClientOriginalExtension();
                $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
                $path1 = $file->storeAs('public/images/property',$FileToStore1);
                $img[] = $FileToStore1; 
            }
            $data['photo'] = json_encode($img);    
        }
        $data['owner_id'] = Auth::user()->id;

            $pro = Property::create($data);
            if($pro)
            return redirect('admin/property')->with('success','Property added successfully');
            else
            return redirect('admin/property')->with('error','Property added failed');
    }

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
        if(Gate::allows('isOwner')){
        $property = Property::find($id);
        return view('admin.property.edit',compact('property'));
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
        
        if(Gate::denies('isClient')){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'area' => 'required|string|max:255',
                'description' => 'nullable|string|max:1500',
                'facility' => 'nullable|string|max:1500',
                'rent'=>'required|numeric|gt:0',
                'location'=>'nullable|string|max:255',
                'photo.*'=>'nullable|mimes:png,svg,jpeg,jpg,webp|max:10000',
                'featured_photo'=>'nullable|mimes:png,svg,jpeg,jpg,webp|max:10000',
                'bathroom'=>'nullable|string|max:255',
                'bedroom'=>'nullable|string|max:255',
                'garage'=>'nullable|string|max:255',
            ]);

            $data = $request->all();
            // dd($data);
            $pro = Property::find($id);
            if($request->hasFile('featured_photo')){
                $filenameWithExt = $request->file('featured_photo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('featured_photo')->getClientOriginalExtension();
                $photo = $filename.'_'.time().".".$extension;
                Storage::delete('public/images/property/'.$pro->featured_photo);
                $path = $request->file('featured_photo')->storeAs('public/images/property', $photo);
                $data['featured_photo'] = $photo;
            }
            if($request->hasFile('photo'))
            {
                foreach($request->file('photo') as $file)
                {
                    $FilenameWithExtension1 = $file->getClientOriginalName();
                    $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
                    $Extension1 = $file->getClientOriginalExtension();
                    $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
                    $path1 = $file->storeAs('public/images/property',$FileToStore1);
                    if(isset($pro->photo))
                    {
                        foreach(json_decode($pro->photo) as $img)
                        Storage::delete('public/images/property/'.$img);
                    }

                    $image[] = $FileToStore1; 
                }
                $data['photo'] = json_encode($image);    
            }

            // $data['owner_id'] = Auth::user()->id;
    
                
                if($pro->update($data))
                return redirect('admin/property')->with('success','Property updated successfully');
                else
                return redirect('admin/property')->with('error','Property updated failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Property::find($id);
        Storage::delete('public/images/property/'.$pro->featured_photo);
        if(isset($pro->photo))
        {
            foreach(json_decode($pro->photo) as $img)
            Storage::delete('public/images/property/'.$img);
        }
        $pro->delete();
        return redirect()->back()->with('success','Property deleted successfully');
    }
}

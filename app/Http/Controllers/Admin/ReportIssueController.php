<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use App\Models\ReportIssue;
use App\Models\User;
use App\Models\Property;
use App\Models\Booking;

class ReportIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $property = Property::all();
        return view('admin.report-issue.index',compact('property','user'));
    
    }
    public function reportedIssue()
    {
        //property owner
        $user = User::find(Auth::user()->id);
        $property = Property::all();
        return view('admin.report-issue.owner-index',compact('property','user'));
    
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
        $this->validate($request,[
            'property_id'=>'required',
            'subject'=>'required|max:255',
            'description'=>'required|max:1000',
            'photo.*'=>'nullable|mimes:png,svg,jpeg,jpg,webp'

        ]);
        // $data = $request->all();
        $data = new ReportIssue;
        $data->subject = $request->subject;
        $data->description = $request->description;
        $data->user_id = Auth::user()->id;
        $data->property_id = $request->property_id;
        $data->owner_id = Property::find($request->property_id)->owner_id;
        if($request->hasFile('photo'))
        {
            foreach($request->file('photo') as $file)
            {
                $FilenameWithExtension1 = $file->getClientOriginalName();
                $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
                $Extension1 = $file->getClientOriginalExtension();
                $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
                $path1 = $file->storeAs('public/images/report-issue',$FileToStore1);
                $img[] = $FileToStore1; 
            }   
            $data->photo = json_encode($img);
        }
        $data->save();

        return redirect()->back()->with('success','Issue has been reported successfully');
        


        // Report
    }

    public function status($id)
    {
        $report = ReportIssue::find($id);
        if($report->status == 0)
        $report->status =1;
        $report->save();

        // $booking
        
        // $pro = Property::find($book->property_id);
        // $owner = User::find($book->owner_id);
        // if(isset($pro) && isset($owner)){
        // $name = $pro->name;
        // {{Helper::notification($owner,'You have recieved a new tenant request for ',$name);}}

        // }
        return redirect()->back()->with('success','Reported issue has sent to Property Owner');
    }

    public function approve($id)
    {
        $report = ReportIssue::find($id);
        if($report->approve == 0)
        $report->approve = 1;
        $report->save();

        // $booking
        
        // $pro = Property::find($book->property_id);
        // $owner = User::find($book->owner_id);
        // if(isset($pro) && isset($owner)){
        // $name = $pro->name;
        // {{Helper::notification($owner,'You have recieved a new tenant request for ',$name);}}

        // }
        return redirect()->back()->with('success','Reported issue has approved sucessfully');
    }
    // public function complete($id)
    // {
    //     $report = ReportIssue::find($id);
    //     if($report->complete == 0)
    //     $report->complete = 1;
    //     $report->save();

    //     // $booking
        
    //     // $pro = Property::find($book->property_id);
    //     // $owner = User::find($book->owner_id);
    //     // if(isset($pro) && isset($owner)){
    //     // $name = $pro->name;
    //     // {{Helper::notification($owner,'You have recieved a new tenant request for ',$name);}}

    //     // }
    //     return redirect()->back()->with('success','Reported issue is maintenanced sucessfully');
    // }
    

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

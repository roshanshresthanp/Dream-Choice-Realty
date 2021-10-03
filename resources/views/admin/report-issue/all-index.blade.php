@extends('admin.layouts.master')

@section('title', 'Report Issue')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.admin.issue')}}" class="text-active">Report Issue</a>
	</li>
</ul>
@endsection

@section('css')
<link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

{{-- <link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" /> --}}
@endsection
@section('script')
{{-- <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script> --}}

 <script src="{{asset('admin/assets/js/pages/crud/datatables/basic/scrollable.js')}}"></script>
 <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script>
$(function () {

$("#datatable").DataTable({
//   "responsive": true
//   "scrollY": 200,
        "scrollX": true
});
});
function confirmation(e)
      {
        if(confirm('Are you sure to delete this record? Once delete cannot be recovered!'))
        {
          return document.getElementById('myform').submit();
        }
        else{
          e.preventDefault();
        }
      }

      
    </script>

@endsection

{{-- 
@section('actionButton')
<a href="{{ route('user.create') }}" class="btn btn-primary font-weight-bolder fas fa-plus">
	Add User
</a>
@endsection --}}

@section('content')
<div class="container">
    @if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <!--begin::Notice-->
        {{-- <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon align-self-start mt-1">
                <i class="flaticon-warning text-primary"></i>
            </div>
            <div class="alert-text">This example shows a vertically scrolling DataTable that makes use of the CSS3 vh unit in order to dynamically resize the viewport based on the browser window height.</div>
        </div> --}}
    <!--end::Notice-->
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title mb-0">
                <h5 class="card-label">Table showing all reported issues
                {{-- <span class="d-block text-muted pt-2 font-size-sm">Scrollable Horizontal &amp; Vertical DataTable</span></h5> --}}
            </div>
            {{-- <div class="card-toolbar">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    <span class="svg-icon svg-icon-md fa fa-plus">
                    </span> Report Issue
                  </button>
                <!--end::Button-->
            </div> --}}
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="datatable">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Property Name</th>
                        <th>Request to Owner</th>
                        <th>Status</th>
                        <th>Complete</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                    
                    @if(isset($issue))
                        @foreach ($issue as $report)
                        {{-- @if($book->status==1 && $book->approve==1) --}}
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$report->created_at}}</td>
                            <td>{{$report->subject}}</td>
                            {{-- <td>{{$book->salary}}</td> --}}
                            <td>{{str_limit($report->description,400)}}</td>
                            <td>@if(isset($property)) @foreach($property as $pro) @if($pro->id == $report->property_id) {{$pro->name}} </span> @endif @endforeach @endif </td>
                            {{-- <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->location}} </span> @endif @endforeach @endif </td> --}}
                            {{-- <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->area}} </span> @endif @endforeach @endif </td> --}}
                            {{-- <td>{{$book->agreement}}</td> --}}
                            {{-- <td>{{$book->occupation}}</td> --}}
                            
                            {{-- <td>{{$book->price}}</td> --}}
                            <td>@if($report->status==1) <span class="badge badge-success">Sent</span> @else <a href="{{route('admin.issue.status',$report->id)}}"><span class="btn btn-info">Send</span></a>@endif</td>
                            <td>@if($report->complete==1) <span class="badge badge-success">Completed</span> 
                                @elseif($report->approve==1) <span class="badge badge-primary">Working</span></a>
                                @elseif($report->status==1) <span class="badge badge-warning">Pending</span> 
                                @else N/A @endif</td>
                                <td>@if($report->complete==1) <span class="badge badge-success">Completed</span>
                                     @elseif($report->approve==1) <a href="{{route('admin.issue.complete',$report->id)}}"><span class="btn btn-info">Complete</span></a>
                                     @else N/A @endif</td>

                          {{--  <td>@if($book->approve==1) <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                Report</button>@else N/A  @endif </td> --}}
                            <td> 
                                <a href="{{route('admin.report-issue.view',$report->id)}}"><span class="fa fa-eye"></span> </a>
                            </td>
                        </tr>
                        {{-- @endif --}}
                        @endforeach
                        
                    
                    @endif
                    
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection




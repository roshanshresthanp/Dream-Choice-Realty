@extends('admin.layouts.master')

@section('title', 'Messages')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.message.user')}}" class="text-active">Message</a>
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

$("#datatable1").DataTable({
//   "responsive": true
  "scrollY": 200,
        "scrollX": true
});
});
// function confirmation(e)
//       {
//         if(confirm('Are you sure to delete this record?'))
//         {
//           return true;
//         //   document.getElementById('myform').submit();
//         }
//         else{
//           e.preventDefault();
//         }
//       }

      
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
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="datatable1">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        {{-- <th>Receiver</th> --}}
                        <th>Subject</th>
                        <th>Description</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    
                    @if(isset($msg->receiver))
                        @foreach ($msg->receiver as $report)
                        {{-- @if($book->status==1 && $book->approve==1) --}}
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$report->created_at}}</td>
                            {{-- <td>{{$report->sender_id}}</td> --}}
                            <td>{{$report->subject}}</td>
                            <td>{{str_limit($report->description,400)}}</td>
                            
                            {{-- <td>@if($book->approve==1) <span class="badge badge-success">Approved</span> @else <span class="badge badge-danger">Disapproved</span>@endif</td>
                            <td>@if($book->approve==1) <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                Report</button>@else N/A  @endif </td> --}}
                            
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
</div>@endsection




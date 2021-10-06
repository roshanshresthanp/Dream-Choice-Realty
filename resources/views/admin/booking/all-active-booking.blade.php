@extends('admin.layouts.master')

@section('title', 'Booking')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.all.booking')}}" class="text-active">Booking</a>
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
  "scrollY": 200,
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
                <h5 class="card-label">Table showing all booking requests
                {{-- <span class="d-block text-muted pt-2 font-size-sm">Scrollable Horizontal &amp; Vertical DataTable</span></h5> --}}
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="datatable">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        <th>Appointment Date</th>
                        <th>Name</th>
                        {{-- <th>Salary</th> --}}
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Property</th>
                        {{-- <th>Address</th>
                        <th>Previous Address</th> --}}
                        {{-- <th>Agreement</th> --}}
                        {{-- <th>Occupation</th> --}}
                        {{-- <th>Price</th> --}}
                        {{-- <th>Request to owner</th> --}}

                        {{-- <th>Area</th>
                        <th>Location</th> --}}
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    
                    @if(isset($booking) )
                        @foreach ($booking as $book)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->created_at}}</td>
                            <td>{{$book->appointment_date}}</td>
                            <td>{{$book->name}}</td>
                            {{-- <td>{{$book->salary}}</td> --}}
                            <td>{{$book->email}} </td>
                            <td>{{$book->contact}}</td>
                            <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->name}} </span> @endif @endforeach @endif </td>
                            <td>{{$book->agreement}}</td>
                            {{-- <td>{{$book->occupation}}</td> --}}
                            
                            {{-- <td>{{$book->price}}</td> --}}
                            {{-- <td>@if($book->status==1) <span class="badge badge-success">Sent</span> @else <a href="{{route('admin.booking.status',$book->id)}}"><span class="btn btn-info">Send</span></a>@endif</td> --}}
                            
                            {{-- <td> 
                                <form id="myform" action="{{route('admin.booking.destroy', $book->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="#" onclick="confirmation(event)"><span class="fa fa-trash"></span> </a>

                                    
                                </form>
                            </td> --}}
                        </tr>
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




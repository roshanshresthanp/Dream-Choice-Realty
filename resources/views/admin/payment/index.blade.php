@extends('admin.layouts.master')

@section('title', 'Payments')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.payment.index')}}" class="text-active">Payments</a>
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
// function confirmation(e)
//       {
//         if(confirm('Are you sure to delete this record? Once delete cannot be recovered!'))
//         {
//           return document.getElementById('myform').submit();
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
                <h5 class="card-label">Table showing all payments
                {{-- <span class="d-block text-muted pt-2 font-size-sm">Scrollable Horizontal &amp; Vertical DataTable</span></h5> --}}
            </div>
            {{-- <div class="card-toolbar">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    <span class="svg-icon svg-icon-md fa fa-plus">
                    </span> Add Payment 
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
                        <th>Date and Time</th>
                        <th>Payment Till</th>
                        <th>Payer Name</th>
                        {{-- <th>Salary</th> --}}
                        <th>Property Name</th>
                        <th>Amount paid</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if(isset($payment) && isset($user) && isset($property) )
                        @foreach ($payment as $report)
                        {{-- @if($book->status==1 && $book->approve==1) --}}
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$report->created_at}}</td>
                            <td>@foreach($book as $u) @if($u->property_id == $report->property_id) {{$u->issued_date}} @endif @endforeach</td>
                            <td>@foreach($user as $u) @if($u->id == $report->paid_by) {{$u->name}} @endif @endforeach</td>
                            {{-- <td>{{$book->salary}}</td> --}}
                            <td>@foreach($property as $u) @if($u->id == $report->property_id) {{$u->name}} @endif @endforeach</td>
                            <td>{{$report->amount}}</td>

                            {{-- <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $report->property_id) {{$own->name}} </span> @endif @endforeach @endif </td> --}}
                            {{-- <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->location}} </span> @endif @endforeach @endif </td> --}}
                            {{-- <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->area}} </span> @endif @endforeach @endif </td> --}}
                            {{-- <td>{{$book->agreement}}</td> --}}
                            {{-- <td>{{$book->occupation}}</td> --}}
                            
                            {{-- <td>{{$book->price}}</td> --}}
                            {{-- <td>@if($book->approve==1) <span class="badge badge-success">Approved</span> @else <span class="badge badge-danger">Disapproved</span>@endif</td>
                            <td>@if($book->approve==1) <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                Report</button>@else N/A  @endif </td> --}}
                            {{-- <td> 
                                <form id="myform" action="{{route('admin.booking.destroy', $book->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="#" onclick="confirmation(event)"><span class="fa fa-trash"></span> </a>

                                    
                                </form>
                            </td> --}}
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

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Report issue</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.report-issue.store')}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
                @csrf
                @method('POST')
                {{-- <div class="form-group">
                    <label>Appointment Date
                    <span class="text-danger">*</span>
                </label>
                    <input type="datetime-local" class="form-control @error('appointment_date') is-invalid @enderror" name="appointment_date" value="{{old('appointment_date')}}" required />
                   
                </div> --}}
                <div class="form-group">
                    <label>Select Property</label>
                    <select class="form-control" name="property_id">
                        {{-- @forelse($user->userBooking as $book)

                            @if(isset($property)) @foreach($property as $pro) @if($pro->id == $book->property_id && $book->status==1 && $book->approve==1)
                            <option value="{{$pro->id}}">{{$pro->name}}</option>

                            @endif @endforeach @endif
                        
                        @empty
                        <p>No Property is booked</p>
                        @endforelse --}}
                    </select>
                </div>
                <div class="form-group">
                    <label>Subject
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Enter subject" name="subject" value="{{old('subject')}}" >
                    {{-- @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <label>Issue Description
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <textarea rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description" name="description" >{{old('description')}}</textarea>
                    {{-- @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <label for="image">{{__('Upload images')}}:</label>
                    <input type="file" id="imageCollection" name="photo[]" accept=".png, .jpg, .jpeg, .svg , .webp"  onchange="javascript:updateList()" class="" multiple="">
                    <div id="imageList" class="pt-3"></div>
                    
                </div>
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection




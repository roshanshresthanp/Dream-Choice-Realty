@extends('admin.layouts.master')

@section('title', 'Active Booking')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.booking.active')}}" class="text-active">Active Booking</a>
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
                <h5 class="card-label">Table showing active booking
                </div>
            
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="datatable">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        <th>Name</th>
                        {{-- <th>Salary</th> --}}
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Property</th>
                        <th>Location</th>
                        {{-- <th>Area</th> --}}
                        {{-- <th>Agreement</th> --}}
                        {{-- <th>Occupation</th>
                        <th>Price</th> --}}
                        <th>Status</th>
                        <th>Pay</th>


                        {{-- <th>Area</th>
                        <th>Location</th> --}}
                        {{-- <th>Report Issue</th> --}}
                    </tr>
                </thead>
                <tbody>
                    
                    @if(isset($owner))
                        @foreach ($owner->userBooking as $book)
                        {{-- @if($book->status==1 && $book->approve==1) --}}
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->created_at}}</td>
                            <td>{{$book->name}}</td>
                            {{-- <td>{{$book->salary}}</td> --}}
                            <td>{{$book->email}} </td>
                            <td>{{$book->contact}}</td>
                            <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->name}} @endif @endforeach @endif </td>
                            <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->location}} @endif @endforeach @endif </td>
                            {{-- <td>@if(isset($property)) @foreach($property as $own) @if($own->id == $book->property_id) {{$own->area}} </span> @endif @endforeach @endif </td> --}}
                            {{-- <td>{{$book->agreement}}</td> --}}
                            {{-- <td>{{$book->occupation}}</td> --}}
                            
                            {{-- <td>{{str_limit($book->description,300)}}</td>
                            <td>{{str_limit($book->facility,300)}}</td> --}}
                            
                            {{-- <td>{{$book->price}}</td> --}}
                            <td>@if($book->approve==1) <span class="badge badge-success">Approved</span> @else <span class="badge badge-info">Pending</span>@endif</td>
                            <td>@if($book->approve==1) <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#example{{$book->id}}Center">
                                Pay now</button>@else N/A  @endif </td>
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
@if(isset($owner) )
@foreach ($owner->userBooking as $book)
<div class="modal fade" id="example{{$book->id}}Center" tabindex="-1" role="dialog" aria-labelledby="example{{$book->id}}CenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title " id="example{{$book->id}}LongTitle">Payment Detail {{$book->id}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.payment.store')}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
                @csrf
                @method('POST')
                     <div class="form-group">
                      <label>Full Name:</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" value="@foreach($user as $u) @if($u->id==$book->user_id) {{$u->name}} @endif @endforeach" placeholder="Enter full name" name="name" readonly />
                      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
                      @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                     </div>
                   
                     {{-- <div class="separator separator-dashed my-5"></div> --}}
                     <div class="form-group">
                        <label>Amount</label>
                        <div class="input-group">
                         <div class="input-group-prepend"><span class="input-group-text" >AUD</span></div>
                         <input type="text" class="form-control" value="@foreach($property as $pro) @if($pro->id==$book->property_id) {{$pro->rent}} @endif @endforeach" placeholder="Rent Amount Displayed Default values" name="amount" readonly/>
                         {{-- <input type="text" class="form-control" value="@foreach($property as $pro) @if($pro->id==$book->property_id) @php $amt=0; @endphp @if(isset($charge)) @foreach($charge as $deduct)@if($deduct->property_id == $pro->id) @php $amt= $deduct->charge; @endphp @endif @endforeach  {{$pro->rent-$amt}} @endif @endif @endforeach" placeholder="Rent Amount Displayed Default values" name="amount"/> --}}
                        </div>
                     </div>
                     <input type="hidden" class="form-control" value="{{$book->property_id}}" placeholder="Rent Amount Displayed Default values" name="property_id"/>

                     <div class="separator separator-dashed my-5"></div>
                     <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" placeholder="Enter card number" name="card_number"/>
                        <span class="form-text text-muted">We'll never share your card details with anyone else</span>
                     </div>
                   
                     {{-- <div class="separator separator-dashed my-5"></div> --}}
                   <div class="form-group row">
                    <div class="col">
                        <label>Expiry Date</label>
                        <input type="date" class="form-control" name="expiry_date"/>
                       </div>
                    {{-- <div class="separator separator-dsashed my-5"></div> --}}
                   
                    <div class="col">
                       <label>Security Code</label>
                       <input type="password" class="form-control"  placeholder="Enter 3 digit security code"  name="security_code"/>
                    </div>
                   </div>
                     
                {{-- <div class="form-group">
                    <label for="image">{{__('Upload images')}}:</label>
                    <input type="file" id="imageCollection" name="photo[]" accept=".png, .jpg, .jpeg, .svg , .webp"  onchange="javascript:updateList()" class="" multiple="">
                    <div id="imageList" class="pt-3"></div>
                    
                </div> --}}
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach
  @endif
@endsection




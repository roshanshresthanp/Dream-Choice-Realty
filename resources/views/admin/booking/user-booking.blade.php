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
    <script>
        function updateList()
        {
          var input = document.getElementById('imageCollection');
          var output = document.getElementById('imageList');
          var children = "";
          console.log(input.files);
          for (var i = 0; i < input.files.length; ++i) {
              children += '<small><li class="text-secondary">' + input.files.item(i).name + '</li></small>';
          }
          output.innerHTML = '<ul style="list-style: decimal;">'+children+'</ul>';     
        }
    
        function removeList()
        {
          document.getElementById('imageList').innerHTML = "";
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
                {{-- <span class="d-block text-muted pt-2 font-size-sm">Scrollable Horizontal &amp; Vertical DataTable</span></h5> --}}
            </div>
            {{-- <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Export</button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-print"></i>
                                    </span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-copy"></i>
                                    </span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-excel-o"></i>
                                    </span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-text-o"></i>
                                    </span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-pdf-o"></i>
                                    </span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>New Record</a>
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
                            <td>@if($book->approve==1) <span class="badge badge-success">Approved</span> @else <span class="badge badge-danger">Disapproved</span>@endif</td>
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
          <h5 class="modal-title" id="example{{$book->id}}LongTitle">Report issue {{$book->id}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.payment.store')}}" method="post" enctype="multipart/form-data">
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
  @endforeach
  @endif
@endsection




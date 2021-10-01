@extends('admin.layouts.master')

@section('title', 'Messages')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.message.owner')}}" class="text-active">Message</a>
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

$("#datatable2").DataTable({
//   "responsive": true
  "scrollY": 200,
        "scrollX": true
});
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
<div class="card card-custom container">
    <div class="card-header">
     <div class="card-title">
      <h3 class="card-label">Messages</h3>
      <button class="btn btn-info ml-3" data-toggle="modal" data-target="#exampleModalCenter">
        <span class="svg-icon svg-icon-md fa fa-edit">
        </span> Create Message
      </button>
     </div>
     <div class="card-toolbar">
      <ul class="nav nav-bold nav-pills">
       <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_7_1">Inbox</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_2">Sent items</a>
       </li>
      </ul>
     </div>
    </div>
    <div class="card-body">
     <div class="tab-content">
      <div class="tab-pane fade show active" id="kt_tab_pane_7_1" role="tabpanel" aria-labelledby="kt_tab_pane_7_1">
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
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="datatable2">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Date</th>
                                {{-- <th>Sender</th> --}}
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
                                    <td>{{$report->description}}</td>
                                    
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
        </div>
      </div>
      <div class="tab-pane fade" id="kt_tab_pane_7_2" role="tabpanel" aria-labelledby="kt_tab_pane_7_2">
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
                            
                            @if(isset($msg->sender))
                                @foreach ($msg->sender as $report)
                                {{-- @if($book->status==1 && $book->approve==1) --}}
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$report->created_at}}</td>
                                    {{-- <td>{{$report->sender_id}}</td> --}}
                                    <td>{{$report->subject}}</td>
                                    <td>{{$report->description}}</td>
                                    
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
        </div>
      </div>
     </div>
    </div>
   </div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.message.store')}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label>Select User</label>
                    <select class="form-control" name="receiver_id" required>
                        {{-- @foreach($user as $us) --}}
                            <option value="{{$user->id}}" selected="selected">{{$user->name}} ({{$user->role}})</option>
                        {{-- @endforeach --}}
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
                    <label>Message
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <textarea rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Enter message description" name="description" required>{{old('description')}}</textarea>
                    {{-- @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}
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
@endsection




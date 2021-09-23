@extends('admin.layouts.master')

@section('title', 'Appointment Date')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.appointment-date.index')}}" class="text-active">Appointment Date</a>
	</li>
</ul>
@endsection

@section('css')
<link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(function () {

$("#datatable").DataTable({
  "responsive": true
});
});

function confirmation(e)
      {
        if(confirm('Are you sure to delete this record? Once delete cannot be recovered!'))
        {
          return true;
          // document.getElementById('myform').submit();
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
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Appointment date table
                {{-- <span class="d-block text-muted pt-2 font-size-sm">scrollable datatable with fixed height</span></h3> --}}
            </div>
            <div class="card-toolbar">
                {{-- <a href="{{route('admin.user.create')}}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md fa fa-plus">
                </span>Add User</a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    <span class="svg-icon svg-icon-md fa fa-plus">
                    </span> Add DateTime
                  </button>
                <!--end::Button-->
            </div>
            {{-- @error('appointment_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror --}}
                         
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="datatable">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($date)>0)
                        @foreach ($date as $datetime)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{explode(" ",$datetime->appointment_date)[0]}}</td>
                            <td>{{explode(" ",$datetime->appointment_date)[1]}}</td>

                            <td> 
                                <form id="myform" action="{{route('admin.appointment-date.destroy', $datetime->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="#" onclick="confirmation(event)"><span class="fa fa-trash"></span> </a>

                                    
                                </form>
                            </td>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Date and Time</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.appointment-date.store')}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label>Appointment Date
                    <span class="text-danger">*</span>
                </label>
                    <input type="datetime-local" class="form-control @error('appointment_date') is-invalid @enderror" name="appointment_date" value="{{old('appointment_date')}}" required />
                   
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




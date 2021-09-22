@extends('admin.layouts.master')

@section('title', 'Add Property')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
    <li class="breadcrumb-item text-muted">
		<a href="{{ route('admin.property.index')}}" class="text-muted">Property</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.property.create')}}" class="text-active">Add</a>
	</li>
</ul>
@endsection

@section('content')
    <div class="container">
        <!-- left column -->
        <div class="col-md-12">
        <!-- general form elements -->
        {{-- <div class="card card-primary"> --}}
            <!-- form start -->

            <form action="{{route('admin.property.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
           
            @include('admin.property.form')
            <!-- /.card-body -->
            {{-- <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div> --}}
            </form>
        {{-- </div>  --}}
        <!-- /.card -->       </div>
    </div>
    <!-- /.row -->
 @endsection


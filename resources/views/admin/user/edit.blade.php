@extends('admin.layouts.master')

@section('title', 'Edit User')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
    <li class="breadcrumb-item text-muted">
		<a href="{{ route('admin.user.index')}}" class="text-muted">Users</a>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="" class="text-active">Edit</a>
	</li>
</ul>
@endsection

@section('content')
    <div class="container">
        <!-- left column -->
        <div class="col-md-12">
            <!-- form start -->

            <form action="{{route('admin.user.update',$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('admin.user.form')
            </form>
        </div>
    </div>
@endsection


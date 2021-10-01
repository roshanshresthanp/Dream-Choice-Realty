@extends('admin.layouts.master')

@section('title', 'Edit Booking')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	<li class="breadcrumb-item text-muted">
		<a href="{{route('admin.dashboard') }}" class="text-muted">Dashboard</a>
	</li>
    @can('isAdmin')
    <li class="breadcrumb-item text-muted">
		<a class="text-muted">Booking request</a>
	</li>
    @endcan
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

            <form action="{{route('admin.booking.update',$book->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row" data-sticky-container>
                <div class="col-lg-6 col-xl-8">
                 <div class="card card-custom gutter-b example example-compact">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Recent Address
                                {{-- <span class="text-danger">*</span> --}}
                            </label>
                                <input type="text" class="form-control @error('recent_address') is-invalid @enderror" placeholder="Enter recent address" name="recent_address" value="@if(isset($book)){{$book->recent_address}}@else{{old('recent_address')}}@endif"  />
                                @error('recent_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Income</label>
                                    <input type="text" class="form-control @error('income') is-invalid @enderror" placeholder="Enter income" name="income" value="@if(isset($book)){{$book->income}}@else{{old('income')}}@endif"/>
                                    @error('income')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                <div class="col">
                                    <label>Expenses (excluding rent)</label>
                                    <input type="expenses" class="form-control @error('expenses') is-invalid @enderror" placeholder="Enter expenses" name="expenses" value="@if(isset($book)){{$book->expenses}}@else{{old('expenses')}}@endif" />
                                    @error('expenses')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Job Description
                                {{-- <span class="text-danger">*</span> --}}
                            </label>
                                <textarea rows="3" class="form-control @error('job_description') is-invalid @enderror" placeholder="Enter Job description" name="job_description"> @if(isset($book)){{$book->job_description}}@else{{old('job_description')}}@endif</textarea>
                                @error('job_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            
                  </div>
              </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                 <div class="card card-custom sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs">
                        <div class="card-body">
                            {{-- <div class="form-group row">
                                <label class="col-4 col-form-label">Status</label>
                                <div class="col-6">
                                 <span class="switch switch-default">
                                  <label>
                                   <input type="checkbox"  name="status"  @if(isset($book) && $book->status == '1')
                                   checked @endif value="1"/>
                                   <span></span>
                                  </label>
                                 </span>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Photo</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="@if(isset($book)){{$book->photo}}@else{{old('photo')}}@endif" />
                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label>Upload documents</label>
                                <input type="file" id="imageCollection" name="photo[]" accept=".png, .jpg, .jpeg, .svg , .webp"  onchange="javascript:updateList()" class="" multiple="">
                                <div id="imageList" class="pt-3"></div>
                                @error('photo[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @section('script')
            <script>
                var avatar1 = new KTImageInput('kt_image_1');
            
            </script>
            <script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
            @endsection

            </form>
        </div>
    </div>

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


<div class="row" data-sticky-container>
    {{-- <div class="col-lg-3 col-xl-2">
     <div class="card card-custom sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs">
            <div class="card-body p-0">
                ...
            </div>
        </div>
    </div> --}}
    <div class="col-lg-6 col-xl-8">
     <div class="card card-custom gutter-b example example-compact">
            {{-- <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Add user</h3>
                </div>
            </div> --}}
            <div class="card-body">
                <div class="form-group">
                    <label>Full Name
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Full Name" name="name" value="@if(isset($user)){{$user->name}}@else{{old('name')}}@endif" required />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Address" name="address" value="@if(isset($user)){{$user->address}}@else{{old('address')}}@endif"  />
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    {{-- <div class="col">
                        <label>Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter Phone" name="phone" value="@if(isset($user)){{$user->phone}}@else{{old('phone')}}@endif"/>
                        @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div> --}}
                    <div class="col">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="@if(isset($user)){{$user->email}}@else{{old('email')}}@endif" />
                        @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                @if(!isset($user))
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Password</label>
                        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" value="@if(isset($user)){{$user->password}}@else{{old('password')}}@endif">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password" value="@if(isset($user)){{$user->password}}@else{{old('password_confirmation')}}@endif">
                    </div>
                </div>
                @endif
                
                <div class="form-group">
                    <label>Contact Number
                    {{-- <span class="text-danger">*</span> --}}
                </label>
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" placeholder="Enter Contact Number" name="contact" value="@if(isset($user)){{$user->contact}}@else{{old('contact')}}@endif" required />
                    @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Occupation
                    {{-- <span class="text-danger">*</span> --}}
                    </label>
                    <input type="text" class="form-control @error('occupation') is-invalid @enderror" placeholder="Enter Occupation" name="occupation" value="@if(isset($user)){{$user->occupation}}@else{{old('occupation')}}@endif" />
                    @error('occupation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
               {{-- <div class="form-group row">
                <div class="col">
                    <label>Temporary Address
                    <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('temporary_address') is-invalid @enderror" placeholder="Enter Temporary Address" name="temporary_address" value="@if(isset($user)){{$user->temporary_address}}@else{{old('temporary_address')}}@endif" required />
                    @error('temporary_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col">
                    <label>Permanent Address
                </label>
                    <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" placeholder="Enter Permanent Address" name="permanent_address" value="@if(isset($user)){{$user->permanent_address}}@else{{old('permanent_address')}}@endif"  />
                    @error('permanent_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               </div> --}}
               {{-- <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control @error('contact_number') is-invalid @enderror" placeholder="Enter Contact Number" name="contact_number" value="@if(isset($user)){{$user->contact_number}}@else{{old('contact_number')}}@endif" />
                @error('contact_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}
      </div>
  </div>
    </div>
    <div class="col-lg-4 col-xl-4">
     <div class="card card-custom sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs">
            <div class="card-body">
                <div class="form-group">
                    <label>User Type</label>
                    <select class="form-control" name="role">
                        @if(isset($user) && isset($user->role))
                        <option value="{{$user->role}}" selected="selected">{{ucwords(str_replace('-',' ',$user->role))}}</option>
                        @else
                        <option value="property-owner">Property Owner</option>
                        <option value="rental-client">Rental Client</option>
                        {{-- <option value="rental-client" @if(isset($user) && $user->role == 'rental-client')) selected="selected" @endif >Rental Client</option> --}}
                        @endif
                    </select>
                </div> 
                {{-- <div class="form-group row">
                    <label class="col-4 col-form-label">Status</label>
                    <div class="col-6">
                     <span class="switch switch-default">
                      <label>
                       <input type="checkbox"  name="status"  @if(isset($user) && $user->status == '1')
                       checked @endif value="1"/>
                       <span></span>
                      </label>
                     </span>
                    </div>
                </div> --}}
                {{-- <div class="form-group">
                    <label>Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="@if(isset($user)){{$user->photo}}@else{{old('photo')}}@endif" />
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                <div class="form-group row">
                    <label class="col-4">Photo</label>
                    <div class="image-input image-input-outline" id="kt_image_1">
                        <div class="image-input-wrapper" @if(isset($user)) style="background-image: url('{{asset('storage/images/user/'.$user->photo)}}" @endif></div>
                    
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="photo" class="@error('photo') is-invalid @enderror" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="profile_avatar_remove"/>
                        </label>
                    
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                    @error('photo')
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
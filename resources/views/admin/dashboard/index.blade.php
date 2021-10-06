@extends('admin.layouts.master')

@section('breadcrumb')
{{-- <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot  p-0 my-2 font-size-lg">
	<li class="breadcrumb-item text-muted">
		<div class="alert alert-warning">Hello th df ggdfg dfg dsfg dfgxvere</div>
	</li>
	<li class="breadcrumb-item text-active">
		<a href="{{ route('admin.booking.active')}}" class="text-active">Active Booking</a>
	</li>
</ul> --}}

</div>

@endsection

@section('content')
{{-- <div class="">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Holy guacamole!</strong> You should check in on some of those fields below.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Holy guacamole!</strong> You should check in on some of those fields below.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
</div> --}}
@can('isOwner')
<div class="col-lg-6 col-xxl-4">
	<!--begin::Mixed Widget 1-->
	<div class="card card-custom bg-gray-100 card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0 bg-danger py-5">
			<h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
			
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body p-0 position-relative overflow-hidden">
			<!--begin::Chart-->
			<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
			<!--end::Chart-->
			<!--begin::Stats-->
			<div class="card-spacer mt-n25">
				<!--begin::Row-->
				<div class="row m-0">
					<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
						<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
									<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
									<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
									<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-warning font-weight-bold font-size-h6">Income AUD {{$income}} </a>
					</div>
					<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
						<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">{{count($user->property)}} Properties</a>
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row m-0">
					<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
						<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
									<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Charge AUD {{$charge}} </a>
					</div>
					<div class="col bg-light-success px-6 py-8 rounded-xl">
						<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
									<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">{{count($user->ownerReportIssue)}} Reported Issues</a>
					</div>
				</div>
				<!--end::Row-->
			</div>
			<!--end::Stats-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Mixed Widget 1-->
</div>
<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
	<!--begin::List Widget 3-->
	<div class="card card-custom card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0">
			<h3 class="card-title font-weight-bolder text-dark">Recent transactions</h3>
		
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-2">
			<!--begin::Item-->

			@foreach ($user->received as $item)
					<div class="d-flex align-items-center mt-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-bar bg-success align-self-stretch"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<label class="checkbox checkbox-lg checkbox-light-success fa fa-money-bill  checkbox-inline flex-shrink-0 m-0 mx-4">
							{{-- <input type="checkbox" name="select" value="1" /> --}}
							{{-- <span></span> --}}
						</label>
						<!--end::Checkbox-->
						<!--begin::Text-->
						
						<div class="d-flex flex-column flex-grow-1">
							<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">You have received a payment of AUD {{$item->amount}} for @foreach($property as $u) @if($u->id == $item->property_id) {{$u->name}} @endif @endforeach
							</a>
							<span class="text-muted font-weight-bold"> {{$item->created_at}} </span>
						</div>
						<!--end::Text-->

					</div>
					@endforeach
			<!--end::Item-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::List Widget 3-->
</div>

@endcan

@can('isClient')

<div class="col-lg-6 col-xxl-4">
	<!--begin::Mixed Widget 1-->
	<div class="card card-custom bg-gray-100 card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0 bg-danger py-5">
			<h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
			<div class="card-toolbar">
				<div class="dropdown dropdown-inline">
					<a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
					<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
						<!--begin::Navigation-->
						{{-- <ul class="navi navi-hover">
							<li class="navi-header pb-1">
								<span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-shopping-cart-1"></i>
									</span>
									<span class="navi-text">Order</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-calendar-8"></i>
									</span>
									<span class="navi-text">Event</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-graph-1"></i>
									</span>
									<span class="navi-text">Report</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-rocket-1"></i>
									</span>
									<span class="navi-text">Post</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-writing"></i>
									</span>
									<span class="navi-text">File</span>
								</a>
							</li>
						</ul> --}}
						<!--end::Navigation-->
					</div>
				</div>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body p-0 position-relative overflow-hidden">
			<!--begin::Chart-->
			<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
			<!--end::Chart-->
			<!--begin::Stats-->
			<div class="card-spacer mt-n25">
				<!--begin::Row-->
				<div class="row m-0">
					<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
						<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
									<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
									<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
									<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-warning font-weight-bold font-size-h6">{{count($user->userReportIssue)}} Reported Issue </a>
					</div>
					<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
						<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
									<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
								</g>
							</svg>	
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">{{count($user->unreadNotifications)}} Notifications</a>
					</div>
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row m-0">
					<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
						<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
									<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">@php $c= 0 @endphp @foreach($user->userBooking as $book) @if($book->approve==1)  @php $c+= 1 @endphp @endif @endforeach {{$c}} Active Booking</a>
					</div>
					<div class="col bg-light-success px-6 py-8 rounded-xl">
						<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
									<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">{{count($user->receiver)}} Messages</a>
					</div>
				</div>
				<!--end::Row-->
			</div>
			<!--end::Stats-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Mixed Widget 1-->
</div>


<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
	<!--begin::List Widget 3-->
	<div class="card card-custom card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0">
			<h3 class="card-title font-weight-bolder text-dark">Alerts</h3>
			<div class="card-toolbar">
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-2">
			<!--begin::Item-->
			<div class="d-flex align-items-center mb-10">
				<div class="container">
					@foreach($user->userBooking as $book)
					@if($book->approve==1)
					@php
                              $issuedDate = new DateTime($book->issued_date);
							  $today = new DateTime(date("Y-m-d H:i:s"));

							//   dd($today);
                            //   $today = date('Y-m-d');
                              $difference = $today->diff($issuedDate);
                              $day = $difference->format("%a");                          
							//   dd($day);
							@endphp
							  {{-- {{dd($today<$issuedDate);}} --}}
							  @if($day<=3 && $today>$issuedDate)
							<div class="alert alert-light alert-dismissible fade show" role="alert">
								<strong>Hello {{$user->name}}!</strong> You have only <b style="color:red;"> {{$day}}</b> days left to pay rent. Please pay your rent at a time.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							@endif
							  
							  @endif
					@endforeach
					
				<!--begin::Symbol-->
				
				<!--end::Symbol-->
				<!--begin::Text-->
				{{-- <div class="d-flex flex-column flex-grow-1 font-weight-bold">
					<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
					<span class="text-muted">PHP, SQLite, Artisan CLI</span>
				</div> --}}
				<!--end::Text-->
				<!--begin::Dropdown-->
				{{-- <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
					<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ki ki-bold-more-hor"></i>
					</a> --}}
				</div>
				<!--end::Dropdown-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::List Widget 3-->
</div>
@endcan

@can('isAdmin')
<div class="container">
	<!--begin::Dashboard-->
	<!--begin::Row-->
	<div class="row">
		<div class="col-lg-6 col-xxl-4">
			<!--begin::Mixed Widget 1-->
			<div class="card card-custom bg-gray-100 card-stretch gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0 bg-danger py-5">
					<h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
					
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body p-0 position-relative overflow-hidden">
					<!--begin::Chart-->
					<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
					<!--end::Chart-->
					<!--begin::Stats-->
					<div class="card-spacer mt-n25">
						<!--begin::Row-->
						<div class="row m-0">
							<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
								<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
											<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
											<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
											<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
								<a href="#" class="text-warning font-weight-bold font-size-h6">{{count($book)}} Active Booking</a>
							</div>
							<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
								<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
								<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">{{count($owners)}} Property Owners</a>
							</div>
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row m-0">
							<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
								<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
											<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
								<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">{{count($property)}} Properties</a>
							</div>
							<div class="col bg-light-success px-6 py-8 rounded-xl">
								<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
											<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
								<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">{{count($contacts)}} Enquiries</a>
							</div>
						</div>
						<!--end::Row-->
					</div>
					<!--end::Stats-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Mixed Widget 1-->
		</div>
		{{-- <div class="col-lg-6 col-xxl-4">
			<!--begin::List Widget 9-->
			<div class="card card-custom card-stretch gutter-b">
				<!--begin::Header-->
				<div class="card-header align-items-center border-0 mt-4">
					<h3 class="card-title align-items-start flex-column">
						<span class="font-weight-bolder text-dark">My Activity</span>
						<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
					</h3>
					<div class="card-toolbar">
						<div class="dropdown dropdown-inline">
							<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ki ki-bold-more-hor"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
								<!--begin::Navigation-->
								<ul class="navi navi-hover">
									<li class="navi-header font-weight-bold py-4">
										<span class="font-size-lg">Choose Label:</span>
										<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
									</li>
									<li class="navi-separator mb-3 opacity-70"></li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-success">Customer</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-danger">Partner</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-warning">Suplier</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-primary">Member</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-dark">Staff</span>
											</span>
										</a>
									</li>
									<li class="navi-separator mt-3 opacity-70"></li>
									<li class="navi-footer py-4">
										<a class="btn btn-clean font-weight-bold btn-sm" href="#">
										<i class="ki ki-plus icon-sm"></i>Add new</a>
									</li>
								</ul>
								<!--end::Navigation-->
							</div>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-4">
					<!--begin::Timeline-->
					<div class="timeline timeline-6 mt-3">
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-warning icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-success icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Content-->
							<div class="timeline-content d-flex">
								<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit
							<a href="#" class="text-primary">USD 700</a>. to ESL</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-primary icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed
							<a href="#" class="text-primary">#XF-2356</a>.</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-info icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-primary icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Text-->
							<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
							<!--end::Text-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="timeline-item align-items-start">
							<!--begin::Label-->
							<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
							<!--end::Label-->
							<!--begin::Badge-->
							<div class="timeline-badge">
								<i class="fa fa-genderless text-danger icon-xl"></i>
							</div>
							<!--end::Badge-->
							<!--begin::Desc-->
							<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed
							<a href="#" class="text-primary">#XF-2356</a>.</div>
							<!--end::Desc-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Timeline-->
				</div>
				<!--end: Card Body-->
			</div>
			<!--end: List Widget 9-->
		</div> --}}
		<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
			<!--begin::List Widget 4-->
			<div class="card card-custom card-stretch gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title font-weight-bolder text-dark">Last five transactions</h3>
				
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!--begin::Item-->
					@foreach ($user->received as $item)
					<div class="d-flex align-items-center mt-4">
						<!--begin::Bullet-->
						<span class="bullet bullet-bar bg-success align-self-stretch"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<label class="checkbox checkbox-lg checkbox-light-success fa fa-money-bill  checkbox-inline flex-shrink-0 m-0 mx-4">
							{{-- <input type="checkbox" name="select" value="1" /> --}}
							{{-- <span></span> --}}
						</label>
						<!--end::Checkbox-->
						<!--begin::Text-->
						
						<div class="d-flex flex-column flex-grow-1">
							<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">You have received a payment of AUD {{$item->amount}} from @foreach($users as $u) @if($u->id == $item->paid_by) {{$u->name}} @endif @endforeach for @foreach($property as $u) @if($u->id == $item->property_id) {{$u->name}} @endif @endforeach
							</a>
							<span class="text-muted font-weight-bold"> {{$item->created_at}} </span>
						</div>
						<!--end::Text-->

					</div>
					@endforeach

					
				
				</div>
				<!--end::Body-->
			</div>
			<!--end:List Widget 4-->
		</div>
		<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
			<!--begin::List Widget 3-->
			<div class="card card-custom card-stretch gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title font-weight-bolder text-dark">Recently solved issues</h3>
					
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!--begin::Item-->
					@foreach ($issue as $item)
					
					<div class="d-flex align-items-center mb-10">
						<!--begin::Symbol-->
						<div class="symbol symbol-40 symbol-light-info mr-5">
							<span class="symbol-label">
								<i class="fa fa-bug"></i>
								{{-- <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" /> --}}
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column flex-grow-1 font-weight-bold">
							<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg"> {{$item->subject}} </a>
							<span class="text-muted">{{$item->created_at}}</span>
						</div>
						<!--end::Text-->
					</div>
					@endforeach
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 3-->
		</div>
		
		
		<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
			<!--begin::List Widget 3-->
			<div class="card card-custom card-stretch gutter-b">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title font-weight-bolder text-dark">Recently added Property Owners</h3>
					
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-2">
					<!--begin::Item-->
					@foreach($powners as $own)
					<div class="d-flex align-items-center mb-10">
						<!--begin::Symbol-->
						<div class="symbol symbol-40  mr-5">
							<span class="symbol-label">
								<img src="{{asset('storage/images/user/'.$own->photo)}}" class="h-75 align-self-end" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<!--begin::Text-->
						<div class="d-flex flex-column flex-grow-1 font-weight-bold">
							<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">{{$own->name}}</a>
							<span class="text-muted">{{$own->email}}, {{$own->contact	}}</span>
						</div>
						<!--end::Text-->
						<!--begin::Dropdown-->
						{{-- <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
							<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ki ki-bold-more-hor"></i>
							</a>
							<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
								<!--begin::Navigation-->
								<ul class="navi navi-hover">
									<li class="navi-header font-weight-bold py-4">
										<span class="font-size-lg">Choose Label:</span>
										<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
									</li>
									<li class="navi-separator mb-3 opacity-70"></li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-success">Customer</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-danger">Partner</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-warning">Suplier</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-primary">Member</span>
											</span>
										</a>
									</li>
									<li class="navi-item">
										<a href="#" class="navi-link">
											<span class="navi-text">
												<span class="label label-xl label-inline label-light-dark">Staff</span>
											</span>
										</a>
									</li>
									<li class="navi-separator mt-3 opacity-70"></li>
									<li class="navi-footer py-4">
										<a class="btn btn-clean font-weight-bold btn-sm" href="#">
										<i class="ki ki-plus icon-sm"></i>Add new</a>
									</li>
								</ul>
								<!--end::Navigation-->
							</div>
						</div> --}}
						<!--end::Dropdown-->
					</div>
					@endforeach
				</div>
				<!--end::Body-->
			</div>
			<!--end::List Widget 3-->
		</div>
		
		
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	
	<!--end::Row-->
	<!--end::Dashboard-->
</div>
@endcan


@endsection
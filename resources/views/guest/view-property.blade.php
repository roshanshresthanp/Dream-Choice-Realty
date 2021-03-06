@extends('guest.layouts.master')

@section('content')
<section class="gallery-head head-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0 position-relative">
        <div class="box">
          <img class="head" src="{{asset('frontend\assets\image\Real-Estate3.jpg')}}" alt="">
          <h1 class="head-one text-white position-absolute">Properties</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="view-room">
  <div class="container">
    <div class="row  ">
      <!-- <div class="col-12 ">
        <div class="row"> -->
          <div class="col-lg-8">  

            <div class="owl-carousel owl-theme image-slide-box myslider" >

              @if(isset($pro->photo))
              @foreach(json_decode($pro->photo) as $img)
              <div class="item ">
                <img src="{{asset('storage/images/property/'.$img)}}">
              </div>
              @endforeach
              @endif

              {{-- <div class="item ">
                <img src="{{asset('frontend\assets\image\hotel 2.jpg')}}>
              </div>
              <div class="item">
                <div><img src="{{asset('frontend\assets\image\hotel 1.jpg')}}""></div>
              </div>
              <div class="item">
                <div><img src="{{asset('frontend\assets\image\hotel 2.jpg')}}""></div>
              </div>
              <div class="item">
                <div><img src="{{asset('frontend\assets\image\hotel 3.jpg')}}""></div>
              </div>
              <div class="item">
                <div><img src="{{asset('frontend\assets\image\hotel 4.jpg')}}""></div>
              </div>
              <div class="item">
                <div><img src="{{asset('frontend\assets\image\delux.jpg')}}""></div>
              </div>--}}
            </div> 

            <div class="owl-dots details-dots">
              @if(isset($pro->photo))
              @foreach(json_decode($pro->photo) as $img)
                <button role="button" class="owl-dot active"><img src="{{asset('storage/images/property/'.$img)}}">
                </button>
              @endforeach
              @endif
            </div>
          </div>
          
        <!-- </div> -->
        <!-- <div class="row"> -->
        <div class="col-lg-4 ">
        <section class="room-form view-room-form "  >
              
              <!-- <div class="container"> -->
                <div class="row">
                  <div class="col-md-12">
                  <h1 class="head-four text-white">Booking Form</h1>
                    <!-- <div class="title-box gallery-title mb-5">
                      <h1 class="head-one head_dark title">Booking Form</h1>
                    </div> -->
                    <!-- <p class=" gallery-para para-one para-gray ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus cumque, provident maxime quos perferendis soluta, velit accusamus officiis, iusto assumenda distinctio. Mollitia veritatis architecto quis unde, aperiam officiis </p> -->
                    <div class="form-box">
                    <form action="{{route('booking.store',$pro->id)}}" method='post'>
                      @csrf
                      @method('POST')
                      <div class="row">

                                      @if (Route::has('login'))
                                      @auth
                                      <div class="text-center p-2"><p>Hi {{Auth::user()->name}}</p></div>
                                      @else
                                      <div class="col-md-12">
                                                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                                                      <input type="text" name="name" placeholder="Name"  width="276" />
                                                    <div class="icon">
                                                      <img class="calendar" src="{{asset('frontend\assets\image\user.png')}}" alt="">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-12">
                                                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                                                    <input type="text" name="email" placeholder="Email"  width="276" />
                                                    <div class="icon">
                                                      <img class="calendar" src="{{asset('frontend\assets\image\email.png')}}" alt="">
                                                    </div>
                                                  </div>
                                                </div>
                                                {{-- <div class="col-md-12">
                                                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                                                    <input type="text" name="occupation" placeholder="Occupation"  width="276" />
                                                    <div class="icon">
                                                      <img class="calendar" src="{{asset('frontend\assets\image\occupation.png')}}" alt="">
                                                    </div>
                                                  </div>
                                                </div> --}}
                                                </div>
                                                <div class="col-md-12 flex-it">
                                                  <div id="date-picker-example" class="form-group mb-2 position-relative" inline="true">
                                                    <input type="text" name="contact" placeholder="Contact"  width="276" />
                                                    <div class="icon">
                                                      <img class="calendar" src="{{asset('frontend\assets\image\contact.png')}}" alt="">
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                                {{-- <div class="col-md-12">
                                                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                                                    <input type="text" name="address" placeholder="Address"  width="276" />
                                                    <div class="icon">
                                                      <img class="calendar" src="{{asset('frontend\assets\image\address.png')}}" alt="">
                                                    </div>
                                                  </div>
                                                </div> --}}
                                          
                                      
                                      @endauth
                              @endif
                             
                              {{-- <div class="col-md-12">
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                                  <input type="text" name="previous_address" placeholder="Previous Address"  width="276" />
                                  <div class="icon">
                                    <img class="calendar" src="{{asset('frontend\assets\image\address.png')}}" alt="">
                                  </div>
                                </div>
                              </div> --}}
                              <div class="col-md-12">
                                {{-- <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                                  <input type="text" name="salary" placeholder="Salary"  width="276" />
                                  <div class="icon">
                                    <img class="calendar" src="{{asset('frontend\assets\image\salary.png')}}" alt="">
                                  </div>
                                </div> --}}



                              <div class="col-lg-12 col-sm-12  flex-it">
                            <div class="col-md-12">
                              <div class="form-group mb-2 position-relative">
                                <select class="form-control" name="appointment_date">
                                  {{-- <option>Choose Appointment Time</option> --}}
                                  @isset($pro->appointmentDate)
                                  @foreach($pro->appointmentDate as $date) 
                
                                  <option value="{{$date->appointment_date}}">{{$date->appointment_date}}</option>
                                  @endforeach 
                                  @endisset
                                </select>
                                <div class="icon">
                                  <img class="calendar" src="{{asset('frontend\assets\image\calendar.png')}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                              
                        </div>

  
                      {{-- <div id="emailHelp" class="form-text">Your details are confidential.</div> --}}
                      <button type="submit" class="btn btn-primary">BOOK NOW</button>
                    </form>
                    </div>
                  </div>
                </div>
              <!-- </div> -->
            </section>
          </div>
          
          
          <div class=" col-lg-8">
            <div>
           
              <div class="room-details-box">
                <h1 class="head-three head_dark">Name</h1>
              </div>
              <p class="para-one pt-3">{!! $pro->name!!}</p> 
            </div>
            <div class="room-details-box">
                <h1 class="head-three head_dark">Description</h1>
              </div>
              <p class="para-one pt-3">{!! $pro->description!!}</p> 
            </div>
           
              <div class="room-details-box">
              
                <h1 class="head-three head_dark">Property Details</h1>
              </div></div>
              <div class="details-table">
                <div class="details-table-box">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-6">
                          <h1 class="head-four">Rent</h1>
                        </div>
                        <div class="col-6">
                          <p class=" details-value para-one text-left">{{ $pro->rent }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-table-box">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-6">
                          <h1 class="head-four">Bedroom</h1>
                        </div>
                        <div class="col-6">
                          <p class=" details-value para-one text-left">{{ $pro->bedroom}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-table-box">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-6">
                          <h1 class="head-four">Bathroom</h1>
                        </div>
                        <div class="col-6">
                          <p class=" details-value para-one text-left">{{ $pro->bathroom}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-table-box">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-6">
                          <h1 class="head-four">Garage</h1>
                        </div>
                        <div class="col-6">
                          <p class=" details-value para-one text-left">{!! $pro->garage!!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-table-box">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-6">
                          <h1 class="head-four">Area</h1>
                        </div>
                        <div class="col-6">
                          <p class=" details-value para-one text-left">{!! $pro->area!!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-table-box">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-6">
                          <h1 class="head-four">Location</h1>
                        </div>
                        <div class="col-6">
                          <p class=" details-value para-one text-left">{!! $pro->location!!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="delux1" class="rooms-toggle room-active">
       
       
         
     
        
      </div>
                <div class="room-details-box">
                <h1 class="head-three head_dark">Other Facilities</h1>
              </div>
              <p class="para-one pt-3">{!! $pro->facility!!}</p> 
            </div>

           <!-- Next property to be shown  -->

           
              </div>
              
            </div>
          </div>
        <!-- </div> -->
      <!-- </div> -->
    </div>
    
  </div>
</section>
<section class="rooms pt-0">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-12">
        <div class="rooms-titles ">
          <button  class="collaps-btn-edit head-four head_blue f-w-4 active collaps-btn" target="delux1" >
            <span>Delux</span> 
          </button>
          <button class=" collaps-btn-edit head-four head_blue f-w-4 collaps-btn" target="delux2">
            <span>Standard</span> 
          </button>
          <button class=" collaps-btn-edit head-four head_blue f-w-4 collaps-btn " target="delux3">
            <span>Studio</span>
           </button>
        </div>
      </div> -->
      <div id="delux1" class="rooms-toggle room-active">
        <div class="row">
          @foreach($property as $pro)
          @if($pro->status == 1)
          <div  class="col-md-4">
            <a href="{{route('property.view',$pro->id)}}">
              <div class="rooms-box">
                <div class="image">
                  <img src="{{asset('storage/images/property/'.$pro->featured_photo)}}" alt="aaa">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">AUD </span><span>{{$pro->rent}}</span></span><br>
                  <h1 class="head-four head_red pb-3 f-w-5"> {{$pro->name}}</h1>
                  <p class="para-two para_gray " style="color:red;">{!!str_limit($pro->facility,20)!!}</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="{{asset('frontend\assets\image\bathroom.jpg')}}" alt="">
                      
                      <span class="para-two">{{$pro->bathroom}}</span>
                    </div>
                    <div class="scale">
                      <img class="" src="{{asset('frontend\assets\image\room.png')}}" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">{{$pro->bedroom}}</span>
                    </div>
                    <div class="scale">
                      <img class="" src="{{asset('frontend\assets\image\garage.png')}}" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            
          </div>
          @endif
         @endforeach
        </div>
      </div>
     
    </div>
  </div>
</section>
@endsection
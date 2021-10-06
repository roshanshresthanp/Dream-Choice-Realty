@extends('guest.layouts.master')

@section('content')
<section class="gallery-head head-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0 position-relative">
        <div class="box">
          <img class="head" src="frontend\assets\image\Real-Estate3.jpg" alt="">
          <h1 class="head-one text-white position-absolute">Properties</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="room-form pb-5" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-box gallery-title">
          <h1 class="head-one head_dark title">Search Property</h1>
        </div><br>
       <div class="form-box">
          <form action="{{route('search.view')}}" method="post">
            @csrf
            @method('POST')
            <div class="row">
              {{-- <div class="col-lg-4 col-sm-6  flex-it"> --}}
                <div class="col">
                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                    <input placeholder="Rent Up To" name="rent" type="text" width="200" />
                    <div class="icon">
                      <img class="calendar" src="frontend\assets\image\salary.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                    <input placeholder="Location" name="location" width="200" />
                    <div class="icon">
                      <img class="calendar" src="frontend\assets\image\address.png" alt="">
                    </div>
                  </div>
                </div>
              {{-- </div> --}}
              <div class="col-lg-4 col-sm-6  flex-it">
              <div class="col-md-12">
                  <button type="submit " class="button button_red mb-2 edit-btn">Search</button>
              </div>              
              </div>
          </form>
        </div>
      </div>
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
          @foreach($result as $pro)
          @if($pro->status == 1)
          <div  class="col-md-4">
            <a href="{{route('property.view',$pro->id)}}">
              <div class="rooms-box">
                <div class="image">
                  <img src="{{asset('storage/images/property/'.$pro->featured_photo)}}" alt="aaa">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">AUD </span><span>{{$pro->rent}}</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> {{$pro->name}}</h1>
                  <p class="para-two para_gray " style="color:red;">{!!str_limit($pro->facility,20)!!}</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bathroom.jpg" alt="">
                      
                      <span class="para-two">{{$pro->bathroom}}</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\room.png" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">{{$pro->bedroom}}</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\garage.png" alt="">
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


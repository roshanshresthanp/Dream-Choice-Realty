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
              <div class="col-lg-4 col-sm-6  flex-it">
                <div class="col-md-12">
                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                    <input placeholder="Rent Up To" name="rent" type="text" width="200" />
                    <div class="icon">
                      <img class="calendar" src="frontend\assets\image\salary.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker mb-2 position-relative" inline="true">
                    <input placeholder="Location" name="location" width="200" />
                    <div class="icon">
                      <img class="calendar" src="frontend\assets\image\address.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6  flex-it">
              <div class="col-md-12">
                  <button type="submit " class="button button_red mb-2 edit-btn">Search</button>
              </div>              
              </div>
         
        </div>
        </form>
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
          @foreach($properties as $pro)
          <div  class="col-md-4">
            <a href="{{route('property.view',$pro->id)}}">
              <div class="rooms-box">
                <div class="image">
                  <img src="{{asset('storage/images/property/'.$pro->featured_photo)}}" alt="aaa">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>{{$pro->rent}}</span></span>
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
         @endforeach
        </div>
      </div>
     
    </div>
  </div>
</section>

<section class="info-banner bg-transparent">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div class="room-info-banner">
          <h1 class="head-four text-light f-w-3 ">Exclusive to affordable, explore with us.</h1>
          <h1 class="head-two text-blue_light pb-3 ">Exclusive to affordable, explore with us.</h1>
          <p class="para-two text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto beatae soluta? Recusandae debitis quos saepe id autem ipsum molestias dignissimos sunt eveniet fugiat dolore, eos facilis, cumque repellendus cum.</p>
          <div class="main-services">
            <div class="box">
              <img src="frontend\assets\image\food light.svg" alt="">
              <div class="box-info">
                <p class="para-one text-light">Keep track of all of your property details with us.</p>
                <p class="para-two text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.  </p>
              </div>
            </div>
            <div class="box">
              <img src="frontend\assets\image\comfort light.svg" alt="">
              <div class="box-info">
                <p class="para-one text-light">Become a property-owner or rental client with us.</p>
                <p class="para-two text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis minima architecto fugiat hic quibusdam incidunt  </p>
              </div>
            </div>
            <div class="box">
              <img src="frontend\assets\image\explore light.svg" alt="">
              <div class="box-info">
                <p class="para-one text-light">Explore Real Estate Properties.</p>
                <p class="para-two text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6">
        <img class="main-image"  src="frontend\assets\image\rooms.png" alt="">
      </div>
    </div>
  </div>
</section>
@endsection


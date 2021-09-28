@extends('guest.layouts.master')

@section('content')
<section class="banner pb-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="banner-box owl-carousel owl-theme" id="bannerslide">
          <div class="banner-data ">
            <div class="banner-image">
              <img class="" src="frontend\assets\image\shutterstock_198883310-e1499838393321.jpg" alt="Responsive image">
            </div>
            <div class="banner-info">
              <div>
                <h1 class="head-four head_white ">Get your own Property For rent With us</h1>
                <h1 class="head-one head_white pb-4">Everything is right here for you.</h1>
               
              </div>
            </div>
          </div>

          <div class="banner-data ">
            <div class="banner-image">
              <img class="" src="frontend\assets\image\image-11122019-d-1024x640.jpg" alt="Responsive image">
            </div>
            <div class="banner-info">
              <div>
                <h1 class="head-four head_white ">Visit property list</h1>
                <h1 class="head-one head_white pb-4">Everything is here right here for you.</h1>
                <button class="button button_red"> <a href="{{ route('property') }}" class="para-two new">Know more</a></button>
              </div>
            </div>
          </div>
        </div>

       
    </div>
  </div>
</section>

<section class="about-home mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-box">
          <h1 class="head-one head_dark title">About US</h1>
        </div>
        
      </div>
      <div class="col-lg-7">
        <h1 class="head-four head_blue f-w-3">Continue your journey with us.</h1>
        <p class="para-one para-gray pb-3">Book a Property Now and connect with us.</p>
        <h1 class="head-four head_blue ">Continue your journey with us.</h1>
        <div class="service-list pt-2">
          <ul>
            <li class="para-one para-gray"><img src="frontend/assets\image\check red.svg" alt=""> <span>View Property details</span> </li>
            <li class="para-one para-gray"><img src="frontend/assets\image\check red.svg" alt=""> <span>Book Property</span> </li>
            <li class="para-one para-gray"><img src="frontend/assets\image\check red.svg" alt=""> <span>Contact Us</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="about-image">
          <img  class="" src="frontend\assets\image\istockphoto-1061234002-612x612.jpg" alt="">
          <span class="shape-one"></span>
          <span class="shape-two"></span>
          <span class="shape-three"></span>
        </div>
        
      </div>
    </div>
  </div>
</section>
<br>
<br>





<section class="info-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="head-four text-light f-w-3 ">Continue your journey with us.</h1>
        <h1 class="head-two text-blue_light pb-3 ">Book a Property Now and connect with us.</h1>
        
        <div class="main-services">
          <div class="box">
            <img src="frontend/assets\image\comfort light.svg" alt="">
            <div class="box-info">
              <p class="para-one text-light">Explore our Listed Properties.</p>
              <p class="para-two text-white">Visit property.</p>
            </div>
          </div>
          <div class="box">
            <img src="frontend/assets\image\explore light.svg" alt="">
            <div class="box-info">
              <p class="para-one text-light">Explore </p>
              <p class="para-two text-white">Check every details of Your Properties. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
          <img class="main-image" src="frontend\assets\image\istockphoto-1221462158-170667a.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="reviews">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="head-one head_dark pb-5 text-center title">Testimonials</h1>
      </div>
      <div class="col-md-12">
        <div class="reviews-list owl-carousel owl-theme" id="reviews">
          <div class="reviews-box text-center">
            <div class="reviews-data">
              <img src="frontend/assets\image\person.jpg" alt="">
              <p class="head-four head_blue p-3">Hem Sagar Poudel</p>
              <p class="para-two head_gray p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aliquam sit ex architecto ipsam. Earum, exercitationem voluptas, repellendus esse officiis obcaecati dolorem dolor nam dicta labore recusandae est nesciunt veniam!</p>
            </div>
          </div>
          
          <div class="reviews-box text-center">
            <div class="reviews-data">
              <img src="frontend/assets\image\person.jpg" alt="">
              <p class="head-four head_blue p-3">Hem Sagar Poudel</p>
              <p class="para-two head_gray p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aliquam sit ex architecto ipsam. Earum, exercitationem voluptas, repellendus esse officiis obcaecati dolorem dolor nam dicta labore recusandae est nesciunt veniam!</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
@endsection











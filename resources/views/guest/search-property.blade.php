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
        </div>
       <div class="form-box">
          <form action="{{route('guest.search-property')}}" method="post">
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
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection


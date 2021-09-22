@extends('guest.layouts.master')

@section('content')
<section class="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="banner-box owl-carousel owl-theme" id="bannerslide">
          <div class="banner-data ">
            <div class="banner-image">
              <img class="" src="frontend\assets\image\hotel 1.jpg" alt="Responsive image">
            </div>
            <div class="banner-info">
              <div>
                <h1 class="head-four head_white ">Cost Friendly pckage on your way</h1>
                <h1 class="head-one head_white pb-4">Everything is hear right here for you.</h1>
                <button class="button button_red">know more</button>
              </div>
            </div>
          </div>

          <div class="banner-data ">
            <div class="banner-image">
              <img class="" src="frontend\assets\image\hotel 1.jpg" alt="Responsive image">
            </div>
            <div class="banner-info">
              <div>
                <h1 class="head-four head_white ">Cost Friendly pckage on your way</h1>
                <h1 class="head-one head_white pb-4">Everything is hear right here for you.</h1>
                <button class="button button_red">know more</button>
              </div>
            </div>
          </div>
        </div>
<!-- quick booking -->
       
    </div>
  </div>
</section>

<section class="about-home">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-box">
          <h1 class="head-one head_dark title">About US</h1>
        </div>
        
      </div>
      <div class="col-lg-7">
        <h1 class="head-four head_blue f-w-3">Continue your journey with us.</h1>
        <h1 class="head-two head_dark pb-4 ">Exclusive to affordable, explore with us.</h1>
        <p class="para-one para-gray pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus cumque, provident maxime quos perferendis soluta, velit accusamus officiis, iusto assumenda distinctio. Mollitia veritatis architecto quis unde, aperiam officiis </p>
        <h1 class="head-four head_blue ">Continue your journey with us.</h1>
        <div class="service-list pt-2">
          <ul>
            <li class="para-one para-gray"><img src="frontend/assets\image\check red.svg" alt=""> <span>Comfort with your valuable services. Comfort with your valuable services. Comfort with your valuable services.</span> </li>
            <li class="para-one para-gray"><img src="frontend/assets\image\check red.svg" alt=""> <span>Comfort with your valuable services.</span> </li>
            <li class="para-one para-gray"><img src="frontend/assets\image\check red.svg" alt=""> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nihil iure libero veniam fuga perferendis </span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="about-image">
          <img  class="" src="frontend\assets\image\rooms.png" alt="">
          <span class="shape-one"></span>
          <span class="shape-two"></span>
          <span class="shape-three"></span>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section class="rooms pt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="rooms-titles ">
          <button  class="collaps-btn-edit head-four head_blue f-w-4 active collaps-btn" target="delux1" >
            <span>Delux</span> 
            <!-- <img src="frontend/assets\image\studio.png" alt=""> -->
          </button>
          <button class=" collaps-btn-edit head-four head_blue f-w-4 collaps-btn" target="delux2">
            <span>Standard</span> 
            <!-- <img src="frontend/assets\image\studio.png" alt=""> -->
          </button>
          <button class=" collaps-btn-edit head-four head_blue f-w-4 collaps-btn " target="delux3">
            <span>Studio</span>
            <!-- <img src="frontend/assets\image\studio.png" alt=""> -->
           </button>
        </div>
      </div>
      <div id="delux1" class="rooms-toggle room-active">
        <div class="row">
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets/image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            
          </div>
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div id="delux2" class="rooms-toggle ">
        <div class="row">
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div id="delux3" class="rooms-toggle ">
        <div class="row">
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div  class="col-md-4">
            <a href="viewRoom.php">
              <div class="rooms-box">
                <div class="image">
                  <img src="frontend/assets\image\rooms.png" alt="">
                </div>
                <div class="rooms-info text-center">
                  <span class="price">From <span class="value">Rs. </span><span>300</span></span>
                  <h1 class="head-four head_red pb-3 f-w-5"> Delux Contrast Room</h1>
                  <p class="para-two para_gray ">Live in luxurious place in earth with exotic view and cultural diversity. Food which is dream come true.</p>
                  <div class="rooms-scale">
                    <div class="scale">
                      <img class="" src="frontend\assets\image\man red.svg" alt="">
                      
                      <span class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\bed red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\bed red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\bed light.svg" alt=""> -->
                      <span  class="para-two">2</span>
                    </div>
                    <div class="scale">
                      <img class="" src="frontend\assets\image\scale red.svg" alt="">
                      <!-- <img class="show-on-nothover" src="frontend\assets\image\scale red.svg" alt=""> -->
                      <!-- <img class="show-on-hover" src="frontend\assets\image\scale light.svg" alt=""> -->
                      <span class="para-two">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="title-box gallery-title">
          <h1 class="head-one head_dark title">Gallery</h1>
        </div>
        <p class=" gallery-para para-one para-gray ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus cumque, provident maxime quos perferendis soluta, velit accusamus officiis, iusto assumenda distinctio. Mollitia veritatis architecto quis unde, aperiam officiis </p>
      </div>
      <div class="col-md-10 ">
        <main class="popup-gallery">
          <ul class="gallery-box">
            <a class="gallery-link" href="assets\image\food (1).jpg">
              <img  class="gallery-image" src="frontend\assets\image\food (1).jpg" alt="day at the beach">
              <div class="image-eye">
                <i class="bi bi-eye"></i>
              </div>
            </a>
            <a class="gallery-link" href="assets\image\food (2).jpg">
              <img  class="gallery-image" src="frontend\assets\image\food (2).jpg" alt="day at the beach">
              <div class="image-eye">
                <i class="bi bi-eye"></i>
              </div>
            </a>
            <a class="gallery-link" href="assets\image\food (3).jpg">
              <img  class="gallery-image" src="frontend\assets\image\food (3).jpg" alt="day at the beach">
              <div class="image-eye">
                <i class="bi bi-eye"></i>
              </div>
            </a>
            <a class="gallery-link" href="assets\image\food (4).jpg">
              <img  class="gallery-image" src="frontend\assets\image\food (4).jpg" alt="day at the beach">
              <div class="image-eye">
                <i class="bi bi-eye"></i>
              </div>
            </a>
            <a class="gallery-link" href="assets\image\food (5).jpg">
              <img  class="gallery-image" src="frontend\assets\image\food (5).jpg" alt="day at the beach">
              <div class="image-eye">
                <i class="bi bi-eye"></i>
              </div>
            </a>
            <a class="gallery-link" href="assets\image\food (6).jpg">
              <img  class="gallery-image" src="frontend\assets\image\food (6).jpg" alt="day at the beach">
              <div class="image-eye">
                <i class="bi bi-eye"></i>
              </div>
            </a>
          </ul>
        </main>
        <div class="gallery-btn">
          <a class="button button_red" href="gallery.php">See More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="info-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="head-four text-light f-w-3 ">Exclusive to affordable, explore with us.</h1>
        <h1 class="head-two text-blue_light pb-3 ">Exclusive to affordable, explore with us.</h1>
        <p class="para-two text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis architecto beatae soluta? Recusandae debitis quos saepe id autem ipsum molestias dignissimos sunt eveniet fugiat dolore, eos facilis, cumque repellendus cum.</p>
        <div class="main-services">
          <div class="box">
            <img src="frontend/assets\image\food light.svg" alt="">
            <div class="box-info">
              <p class="para-one text-light">Explore our Local meals.</p>
              <p class="para-two text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.  </p>
            </div>
          </div>
          <div class="box">
            <img src="frontend/assets\image\comfort light.svg" alt="">
            <div class="box-info">
              <p class="para-one text-light">Explore our Local meals.</p>
              <p class="para-two text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis minima architecto fugiat hic quibusdam incidunt  </p>
            </div>
          </div>
          <div class="box">
            <img src="frontend/assets\image\explore light.svg" alt="">
            <div class="box-info">
              <p class="para-one text-light">Explore our Local meals.</p>
              <p class="para-two text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
          <img class="main-image" src="frontend\assets\image\rooms.png" alt="">
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











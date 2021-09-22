<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Choice Realty</title>
    <link rel="stylesheet" href="{{asset('frontend/node_modules/bootstrap/dist/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('frontend/node_modules/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    
    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" type="text/css" />
</head>
<body>
    
<section class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header_box">
          <div class="logo">
            <a href="index.php"><img src="assets/image/logo (3).png" alt=""></a>
          </div>
          <div class="links" id="menu-links">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('admin/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                      
                    @endauth
                </div>
            @endif
</li>
<li>
                <a href="{{ route('property') }}">Property</a>
              </li>
              
              <li>
                <a href="contact.php">Contact</a>
              </li>
            </ul>
            <div class="social-media">
              <div class="media-box">
                <a href="#" class="link fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="link ins"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="link tweet"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="menu text-right" id="menu">
            <button class="menu-btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div>
    @yield('content')
    </div>

<footer class="footer">
  <div class="container">
    <div class="row ">
      <div class="col-lg-3 col-md-4 col-sm-6 pb-4">
        <div class="logo">
          <!-- <a href="index.php">
            <img src="frontend\assets\image\logo (4).png" alt="">
          </a> -->
          
        </div>
        <p class="para-two para_white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse quae reiciendis deserunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <div class="footer-contact">
          <div class="box mb-2">
            <i class="bi bi-geo-alt text-white"></i>
            <p class="para-two text-blue_light">Location</p>
          </div>
          <div class="box mb-2">
            <i class="bi bi-telephone text-white"></i>
            <p class="para-two text-blue_light"><a class="para-two text-blue_light phone" href="tel:9800000000">+977-9800000000</a> </p>
          </div>
          <div class="box mb-2">
            <i class="bi bi-envelope text-white"></i>
            <p class="para-two text-blue_light"> <a class="para-two text-blue_light email" href="mailto:email@example.com" >example@gmail.com</a>  </p>
          </div>
        </div>
        <div class="social-media">
          <div class="media-box">
            <a href="" class="link fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="" class="link ins"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="" class="link tweet"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-4">
        <h1 class="head-four text-white f-w-4 pb-4">Explore Links</h1>
        <div class=" footer-links">
          <ul>
            <li>
              <a href="index.php" class="para-two text-blue_light">home</a>
            </li>
            <li>
              <a href="rooms.php" class="para-two text-blue_light">Poperties</a>
            </li>
            <li>
              <a href="contact.php" class="para-two text-blue_light">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 pb-4 ">
        <h1 class="head-four text-white f-w-4 pb-4">Properties</h1>
        <div class=" footer-rooms">
          <div class="footer-rooms-box">
            <img src="frontend\assets\image\rooms.png" alt="">
          </div>
          <!-- <div class="px-2">
            <p class="para-two f-w-3 text-blue_light">Delux</p>
            <span class="para-two text-white">From <span class="value">Rs. </span><span>300</span></span>
          </div>
        </div>
        <div class=" footer-rooms">
          <div class="footer-rooms-box">
            <img src="frontend\assets\image\rooms.png" alt="">
          </div>
          <div class="px-2">
            <p class="para-two f-w-3 text-blue_light">Standured</p>
            <span class="para-two text-white">From <span class="value">Rs. </span><span>300</span></span>
          </div>
        </div>
        <div class=" footer-rooms">
          <div class="footer-rooms-box">
            <img src="frontend\assets\image\rooms.png" alt="">
          </div>
          <div class="px-2">
            <p class="para-two f-w-3 text-blue_light">Studio</p>
            <span class="para-two text-white">From <span class="value">Rs. </span><span>300</span></span>
          </div>
        </div>
      </div> -->
      <!-- <div class="col-lg-3 col-md-4 col-sm-6 pb-4">
        <h1 class="head-four text-white f-w-4 pb-4">Map</h1> -->
        <!-- <div class="footer-rooms-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.097062842056!2d85.31605341501488!3d27.683394782801777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a12ed15f%3A0xd2addf7cee6a8e0b!2sLet%20IT%20Grow!5e0!3m2!1sen!2snp!4v1627380118358!5m2!1sen!2snp" width="100%" height="300" style="border:0" allowfullscreen="" loading="lazy"></iframe>
        </div> -->
        
      </div>
      <div class="col-12">
        <div class="row align-items-center">
          <div class="col-md-6 ">
            <div class="copyright">
              <p class=" para-two text-white"> <span class="text-blue_light f-w-6">DREAM CHOICE REALTY</span> @copyRight reserved</p>
            </div>
          </div>
          
        
      </div>
    </div>
  </div>
</footer>
</body>
<script src="https://use.fontawesome.com/b005d80e47.js"></script>
    <script src="{{asset('frontend\node_modules\jquery\dist\jquery.min.js')}}"></script>
    <script src="{{asset('frontend\node_modules\bootstrap\dist\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend\node_modules\bootstrap\dist\js\bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend\node_modules\owl.carousel\dist\owl.carousel.min.js')}}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="{{asset('frontend\js\jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend\js\jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('frontend\js\Main.js')}}"></script>
    <script>
      $('#datepicker').datepicker({
          uiLibrary: 'bootstrap4'
      });
      $('#datepicker2').datepicker({
          uiLibrary: 'bootstrap4'
      });
    </script>
</html>
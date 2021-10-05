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
    <link rel="icon" href="frontend\assets\image\new-loogo.png">
    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" type="text/css" />

    <!-- Toastr-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
<section class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header_box">
          <div class="logo">
            <a href="index.php"><img src="frontend\assets\image\new-logo.jpg"></a>
          </div>
          <div class="links" id="menu-links">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              
    <li>
                <a href="{{ route('property') }}">Property</a>
              </li>
              
              <li>
                <a href="{{ route('contact.index') }}">Contact</a>
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

  
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
           <p> Continue your journey with us.</br>Book a Property Now and connect with us.</br>Continue your journey with us.</br>View Property details</br>Book Property</br>Contact Us</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <div class=" footer-links">
          <ul>
            <li>
              <a href="{{ url('admin/dashboard') }}" class="para-two text-blue_light">home</a>
            </li>
            <li>
              <a href="{{ route('property') }}" class="para-two text-blue_light">Properties</a>
            </li>
            {{-- <li>
              <a href="{{ route('contact') }}" class="para-two text-blue_light">Contact</a>
            </li> --}}
          </ul>
        </div>
          </div>

          
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">Dream Choice Realty </a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
@include('admin.layouts.message')
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Choice Realty</title>
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/image/logo (3).png')}}"/>

    <link rel="stylesheet" href="{{asset('frontend/node_modules\bootstrap\dist\css\bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('frontend/node_modules\bootstrap-icons\font\bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/node_modules\owl.carousel\dist\assets\owl.carousel.min.css')}}">
    <script src="https://use.fontawesome.com/b005d80e47.js"></script>
    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('frontend/css\magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css\main.css')}}" type="text/css" />
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
                <a href="index.php">home</a>
              </li>
              <li>
                <a href="service.php">Services</a>
              </li>
              <li>
                <a href="rooms.php">Rooms</a>
              </li>
              <li>
                <a href="{{ route('login') }}">Login</a>
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
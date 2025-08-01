<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Propello</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="{{ asset('clients/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pacifico&display=swap" rel="stylesheet">
    
    <style>
      .wrap{
        background: #2d2d2dff;
      }
      .navbar{
       background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
      }
      .mh{
        color: #ffff !important;
        font-family: "Montserrat", sans-serif;
        font-size: 30px !important;
      }
      .nav-link{
        color: #ffff !important;
      }
      .nav-link:hover{
        color: #9500f9ff !important;
      }
      .nb1{
        color: #ffffffff !important;
      }
      .nb1:hover{
        color: #ffffffff !important;
      }
      .nb{
        color: #ffff !important;
        border: 1px solid #6b00b2ff !important;
        border-radius: 5px !important;
        background: #6b00b2ff !important;
        margin: 10px !important; 
      }
      .nb:hover{
        background: #9500f9ff !important;
        transition-duration: 0.50s !important;
      }
      .ftco-navbar-light.scrolled .nav-link:hover {
        color: #9500f9ff !important;
      }
      .ibg:hover{
        background: #4e0082ff !important;
        transition-duration: 0.50s !important;
      }
      .nm{
        color: #ffff !important;
      }
    </style>
  </head>
  <body>

    <div class="wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0 phone pl-md-2">
              <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
              <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
            </p>
          </div>
          <div class="col-md-6 d-flex justify-content-md-end">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand mh" href="/">propello</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/counselor" class="nav-link">Counselor AI</a></li>
            <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            @if(Auth::user())
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-danger my-2">Logout</button>
              </form>
            @else
              <button class="nb"><a href="/login" class="nav-link nb1">Sign in</a></button>
              <button class="nb"><a href="/register" class="nav-link nb1">Sign up</a></button>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- footer start -->
    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="/counselor">Counselor</a></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Explore</h2>
              <ul class="list-unstyled">
                <li><a href="/about"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                <li><a href="/contact"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="/service"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
                <li><a href="/pricing"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Legal</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Join us</a></li>
                <li><a href="/blog"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="/about"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="/blog"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                <li><a href="/contact"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="mb-0" style="color: rgba(255,255,255,.5);">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JS -->
    <script src="{{ asset('clients/js/jquery.min.js') }}"></script>
    <script src="{{ asset('clients/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('clients/js/popper.min.js') }}"></script>
    <script src="{{ asset('clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('clients/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('clients/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('clients/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('clients/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('clients/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('clients/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('clients/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('clients/js/google-map.js') }}"></script>
    <script src="{{ asset('clients/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('scripts')
  </body>
</html>

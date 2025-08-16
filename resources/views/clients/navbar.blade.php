<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Propello</title>
    <link rel="icon" type="image/png" href="{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 02_24_34 PM.png') }}">
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

  


      /* review button start */
      .reviews {
    height: 60px;
    width: 60px;
    background-color: #ffffff;
    border-radius: 50%;
    z-index: 3;
    position: fixed;
    bottom: 350px;
    right: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.42);
    cursor: pointer;
    animation: bounce 2s ease-in-out infinite; /* Slow smooth bounce */
}

.reviews img {
    width: 80px;  /* Size of logo inside */
    height: 80px;
    object-fit: contain;
}

/* Bounce animation */
@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* review button end */


/* review form start */

/* Position the glass form */
/* Overlay background */



#overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.55);
    z-index: 1000;
}

/* Centered modal form */
#reviewForm {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1001;
    max-width: 400px;
    width: 90%;
}

/* Glass card styles */
.glass-card {
    padding: 28px;
    border-radius: 14px;
    background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
    border: 1px solid rgba(255,255,255,0.18);
    backdrop-filter: blur(10px) saturate(120%);
    -webkit-backdrop-filter: blur(10px) saturate(120%);
    box-shadow: 0 8px 30px rgba(8,10,14,0.45);
    color: #fff;
    animation: fadeIn 0.3s ease;
}

/* Header styles */
.header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
}
.logo {
    width: 46px;
    height: 46px;
    border-radius: 10px;
    display: inline-grid;
    place-items: center;
    font-weight: 700;
    font-size: 18px;
    color: #0b1220;
    background: linear-gradient(135deg, #fff, #ffe8b3);
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
}
.title {
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    margin: 0;
}
.subtitle {
    margin: 0;
    margin-top: 4px;
    color: rgba(255,255,255,0.8);
    font-size: 13px;
}

/* Fields */
.field {
    display: flex;
    flex-direction: column;
    margin-bottom: 12px;
}
label {
    font-size: 13px;
    color: rgba(255,255,255,0.9);
    margin-bottom: 6px;
}
input[type="text"],
input[type="email"],
textarea {
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.06);
    background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
    color: #fff;
    outline: none;
    font-size: 14px;
}
input:focus, textarea:focus {
    border-color: rgb(72, 0, 120);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.295);
}

/* Submit button */
.btn {
    background: #4B0082; /* dark purple */
    color: #fff;
    padding: 10px 14px;
    border: none;
    border-radius: 10px;
    font-weight: 500;
    cursor: pointer;
    width: 100%;
}
.btn:hover {
    background: #5a00a8;
    color: #fff;
}

/* Close button */
.close-btn {
    position: absolute;
    top: 8px;
    right: 8px;
    background: red;
    color: white;
    border: none;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 4px;
    width: 28px;
    height: 28px;
    line-height: 24px;
    text-align: center;
}

/* Fade animation */
@keyframes fadeIn {
    from {opacity: 0; transform: translate(-50%, -48%);}
    to {opacity: 1; transform: translate(-50%, -50%);}
}


/*  review form end */

          /* .reviews a{
               color:white;
               text-decoration: none;
               font-size: 20px;
               padding: 10px 20px;
               position:relative;
               top:10px
          } */
    </style>
  </head>
  <body>
    @if(Auth::user())
<div class="reviews" id="addReviewBtn">
    <a href="#">
        <img src="{{ asset('clients/images/ChatGPT Image Aug 9, 2025, 01_20_48 PM.png') }}" alt="Review">
    </a>
</div>

<!-- Glass Review Form -->
<div id="reviewForm" style="display:none;" class="glass-card" role="region" aria-label="Add review">
    <!-- Close button -->
    <button type="button" id="closeReviewForm" class="close-btn">&times;</button>

    <div class="header">
        <div class="logo" aria-hidden="true">★</div>
        <div>
            <h1 class="title">Add a review</h1>
            <p class="subtitle">Share your experience — we read every review.</p>
        </div>
    </div>

    <form method="POST" action="/reviews" enctype="multipart/form-data">
        @csrf
        <div class="field">
            <label for="name">Your Name</label>
            <input id="name" name="name" type="text" placeholder="e.g. xyz" required aria-required="true" />
        </div>

        <div class="field">
            <label for="email">Your Email</label>
            <input id="email" name="email" type="email" placeholder="you@example.com" required aria-required="true" />
        </div>

        <div class="field">
            <label for="review">Your Review</label>
            <textarea id="review" name="review" placeholder="Tell us what you liked (or didn't)..." required aria-required="true"></textarea>
        </div>

        <button type="submit" class="btn">Submit Review</button>
    </form>
</div>


@endif

<script>
document.addEventListener('click', function(event) {
    const form = document.getElementById('reviewForm');
    const reviewBtn = document.getElementById('addReviewBtn');

    // If the form is visible AND click is outside both the form and the button
    if (form.style.display === 'block' &&
        !form.contains(event.target) &&
        !reviewBtn.contains(event.target)) {
        form.style.display = 'none';
    }
});
</script>


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
        <a class="navbar-brand mh" href="/">
    <img src="{{ asset('clients/images/ChatGPT Image Aug 9, 2025, 05_03_47 PM.png') }}" alt="Propello Logo" style="height:40px; width:auto;">
</a>
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
              <h2 class="ftco-heading-2"><a href="/counselor">Counselor</a></h2>
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
    <script>
document.getElementById('addReviewBtn').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('reviewForm').style.display = 'block';
});
document.getElementById('closeReviewForm').addEventListener('click', function() {
    document.getElementById('reviewForm').style.display = 'none';
});
</script>

    @stack('scripts')
  </body>
</html>

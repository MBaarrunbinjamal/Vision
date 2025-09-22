<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Propello</title>
    <link rel="icon" type="image/png" href="{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 02_24_34 PM.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="clients/css/animate.css">
    
    <link rel="stylesheet" href="clients/css/owl.carousel.min.css">
    <link rel="stylesheet" href="clients/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="clients/css/magnific-popup.css">
    
    <link rel="stylesheet" href="clients/css/flaticon.css">
    <link rel="stylesheet" href="clients/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Lobster&family=Major+Mono+Display&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
</head>


<style>
    body {
      margin: 0;
  background: #050008; /* blackish background */
  color: #d1b3ff; /* soft lavender for text */
  font-family: Arial, sans-serif;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  overflow-x: hidden;   /* allow vertical scroll only */
  overflow-y: auto;
    }

    /* nav css start */
 .wrap{
    background: #2d2d2dff;
  }
  .navbar{
   background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
  }
  .mh{
    color: #ffff !important;
     font-family: "Montserrat", sans-serif !important;
       font-size: 40px !important;
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
  color: #9500f9ff !important; /* Use your desired purple */
}

.ibg:hover{
  background: #4e0082ff !important;
  transition-duration: 0.50s !important;
}

.nm{
  color: #ffff !important;
}

.lgobtn{
  background: #440071ff !important;
  color: #ffff !important;
  border: none !important;
  height: 40px !important;
  width: 80px !important;
  border-radius: 5px !important;
  font-weight: 500 !important;
}
/* nav css end */

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

   /* Globe container */
#globeViz {
  width: 100%;
  height: 100vh;   /* Full screen height */
}
    #infoBox {
      background: rgba(40, 0, 70, 0.9); /* dark purple box */
      padding: 12px 20px;
      font-size: 15px;
      position: absolute;
      bottom: 20px;
      left: 20px;
      border-radius: 12px;
      max-width: 320px;
      transition: all 0.3s ease-in-out;
      color: #f0e6ff; /* light lavender text */
      border: 1px solid #6a0dad; /* purple border */
    }
  </style>
</head>
<body>
<!-- nav start -->
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
              <li class="nav-item"><a href="/glorii" class="nav-link">Career Sphere</a></li>
	          <li class="nav-item"><a href="/cv" class="nav-link">Create CV</a></li>
	          <!-- <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li> -->
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
    <!-- END nav -->


  <div id="globeViz"></div>
  <div id="infoBox">🌍 Hover or click a country to see career insights</div>

  <!-- Globe.gl -->
  <script src="https://unpkg.com/globe.gl"></script>
   <script src="clients/js/jquery.min.js"></script>
  <script src="clients/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="clients/js/popper.min.js"></script>
  <script src="clients/js/bootstrap.min.js"></script>
  <script src="clients/js/jquery.easing.1.3.js"></script>
  <script src="clients/js/jquery.waypoints.min.js"></script>
  <script src="clients/js/jquery.stellar.min.js"></script>
  <script src="clients/js/owl.carousel.min.js"></script>
  <script src="clients/js/jquery.magnific-popup.min.js"></script>
  <script src="clients/js/jquery.animateNumber.min.js"></script>
  <script src="clients/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="clients/js/google-map.js"></script>
  <script src="clients/js/main.js"></script>
  
  <script>
    const elem = document.getElementById("globeViz");
    const infoBox = document.getElementById("infoBox");

    const Globe = window.Globe()(elem)
      .globeImageUrl('//unpkg.com/three-globe/example/img/earth-dark.jpg')
      .bumpImageUrl('//unpkg.com/three-globe/example/img/earth-topology.png')
      .backgroundColor('#050008') // make background black-purple
      .pointOfView({ lat: 20, lng: 0, altitude: 2 });

    // Load world map polygons
    fetch('https://raw.githubusercontent.com/holtzy/D3-graph-gallery/master/DATA/world.geojson')
      .then(res => res.json())
      .then(countries => {
        
        // Assign a "best career" suggestion for each country
        const careerSuggestions = {
          "Canada": "AI Engineer (+23% demand)",
          "United States of America": "Cybersecurity Analyst (+15%)",
          "India": "Data Scientist (+30%)",
          "China": "Robotics Engineer (+18%)",
          "Germany": "Green Energy Specialist (+20%)",
          "Brazil": "AgriTech Developer (+17%)",
          "Australia": "Healthcare Data Analyst (+19%)",
          "United Kingdom": "FinTech Developer (+21%)",
          "Japan": "Automation Engineer (+25%)",
          "Pakistan": "Software Engineer (+22%)"
        };

        // Attach custom career info
        countries.features.forEach(feat => {
          feat.properties.career = careerSuggestions[feat.properties.name] || "Emerging Tech Specialist";
        });

        // Show countries as polygons
        Globe
          .polygonsData(countries.features)
          .polygonCapColor(() => "rgba(106, 13, 173, 0.7)") // dark purple fill
          .polygonSideColor(() => "rgba(50, 0, 80, 0.6)")   // darker side
          .polygonStrokeColor(() => "#9b4dff")             // purple outline
          .polygonLabel(d => `
            <b>${d.properties.name}</b><br>
            Career: ${d.properties.career}
          `)
          .onPolygonHover(d => {
            infoBox.textContent = d 
              ? `🔎 ${d.properties.name}: ${d.properties.career}`
              : "🌍 Hover or click a country to see career insights";
          })
          .onPolygonClick(d => {
            infoBox.textContent = `📌 ${d.properties.name}: ${d.properties.career}`;
          });
      });

    const resizeGlobe = () => {
  const globeDiv = document.getElementById("globeViz");
  Globe.width([globeDiv.clientWidth]);
  Globe.height([globeDiv.clientHeight]);
};
window.addEventListener('resize', resizeGlobe);
resizeGlobe(); // run once

  </script>
  </body>
</html>



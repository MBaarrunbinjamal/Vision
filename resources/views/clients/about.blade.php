@extends('clients.navbar')
@section('content')
    <style>
    body{
      background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
    }

      .ablt{
        color: #9e9d9dff !important;
      }

      .grd{
        background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
      }
      .numbg{
        background: linear-gradient(135deg, #161616ff, #2d0050ff ) !important;
      }
      .number{
        color: white !important;
      }
      .afnt{
        color: #9e9d9dff !important;
      }
     
    </style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('clients/images/Flux_Dev_Create_an_image_depicting_a_serene_and_professional_c_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/" class="ablt">Home <i class="fa fa-chevron-right ablt"></i></a></span></p>
            <h1 class="mb-0 bread text-white">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(clients/images/Flux_Dev_A_serene_and_introspective_scene_depicting_career_cou_3.jpg);">
					</div>
					<div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 ">
	          <div class="heading-section py-md-5">
	          	<span class="subheading ablt">Welcome to Counselor</span>
	            <h2 class="mb-4 text-white">Best Counseling Funding Network Worldwide.</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

	            <a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center mt-4">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></div>
	            	<span class="watch ablt">Watch Our Consultant Video</span>
	            </a>
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img  numbg" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="3000">0</strong>
                <span class="afnt">Our Satisfied  &amp; Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="30">0</strong>
                <span class="afnt">Years of Experience In Business</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="200">0</strong>
                <span class="afnt">Our Qualified Counselor</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="40">0</strong>
                <span class="afnt">Services Points</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

  
    
		
		<section class="ftco-appointment ftco-section img" style="background-image: url(clients/images/bg_2.jpg);">
			
    	
    </section>

      @endsection
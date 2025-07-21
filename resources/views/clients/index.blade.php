@extends('clients.navbar')
@section('content')

<style>
/* is css se small screen agar responsive ho or phir bhi masla kray responsiveness main to is se theek hojata h  */
html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  width: 100%;
  background:  linear-gradient(135deg, #2d0050ff, #161616ff) !important;
}

html, body {
  overflow-x: hidden;
  width: 100%;
}
/* ended */

	.lcbtn{
		background: #3e0067ff !important;
		color: #fff !important;
		border-radius: 5px !important;
		text-decoration: none !important;
		
	}

	.lrbtn{
		color: #fff !important;
		border-radius: 5px !important;
		text-decoration: none !important;
		margin-top: -1px !important;
		
	}

	.cdiv{
		background: #2d2d2dff !important;
		
	}
	.mdiv{
		 background: transparent !important;
		
		 

	}
	.rdiv{
		background: linear-gradient(135deg, #161616ff, #2d0050ff) !important;
	}
  
.tsd{
	  background: rgba(0, 0, 0, 0.5) !important;
  
}

.ltx{
	  color: rgba(138, 138, 138, 1)  !important;

}
.my{
	  background: rgba(0, 0, 0, 1) !important;
}
.stx{
	color: grey !important;
}

.lantex{
	color: rgba(172, 172, 172, 1) !important;
}
.ftco-intro,
.ftco-intro .container {
    background: transparent !important;
}
.leftbox {
  background: linear-gradient(135deg, #161616ff, #290147ff) !important;
}

</style>

    <div class="hero-wrap" style="background-image: url('clients/images/Flux_Dev_Create_an_image_depicting_a_serene_and_professional_c_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            <h1 class="mb-4 text-white">Counseling For Your Better Life</h1>
	            <p class="mb-4 lantex">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            <p><a href="#" class=" lcbtn py-3 px-4">Contact us</a> <a href="#" class="btn btn-white lrbtn py-3 px-4">Read more</a></p>
            </div>
          </div>
          <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
          	<span class="fa fa-play"></span>
          </a> 
        </div>
      </div>
    </div>

    <section class="ftco-intro leftbox ">
    	<div class="container  ">
    		<div class="row no-gutters mdiv">
    			<div class="col-md-4 d-flex   ">
    				<div class="intro aside-stretch d-lg-flex w-100 cdiv">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text ">
    						<h2>100% Confidential</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100 cdiv">
    					<div class="icon">
    						<span class="flaticon-employee"></span>
    					</div>
    					<div class="text">
    						<h2>Qualified Team</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100 cdiv">
    					<div class="icon">
    						<span class="flaticon-umbrella"></span>
    					</div>
    					<div class="text">
    						<h2>Individual Approach</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section rdiv">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading stx">Services</span>
            <h2 class="text-white">How It Works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-calendar"></span>
	    					</div>
    					</div>
    					<h2>Make Schedule</h2>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-qa"></span>
	    					</div>
    					</div>
    					<h2>Start Discussion</h2>
  						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-checklist"></span>
	    					</div>
    					</div>
    					<h2>Enjoy Plan</h2>
  						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    

		

  
    <section class="ftco-section testimony-section">
    	<div class="img img-bg border" style="background-image: url(clients/images/bg_4.jpg);"></div>
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading stx">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 " style="background:#2d2d2dff;">
                	<div class="icon d-flex align-items-center justify-content-center tsd"><span class="fa fa-quote-left"></div>
                  <div class="text" >
                    <p class="mb-4 ltx">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(clients/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name text-white">Roger Scott</p>
		                    <span class="position ltx">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 " style="background:#2d2d2dff;">
                	<div class="icon d-flex align-items-center justify-content-center tsd"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4 ltx">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(clients/images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name text-white">Roger Scott</p>
		                    <span class="position ltx">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 " style="background:#2d2d2dff;">
                	<div class="icon d-flex align-items-center justify-content-center tsd"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4 ltx">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(clients/images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name text-white">Roger Scott</p>
		                    <span class="position ltx">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4" style="background:#2d2d2dff;">
                	<div class="icon d-flex align-items-center justify-content-center tsd"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4 ltx">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(clients/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name text-white">Roger Scott</p>
		                    <span class="position ltx">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4" style="background:#2d2d2dff;">
                	<div class="icon d-flex align-items-center justify-content-center tsd"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4 ltx">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(clients/images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name text-white">Roger Scott</p>
		                    <span class="position ltx">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


		
		<!-- clients image -->
		<section class="ftco-appointment ftco-section img" style="background-image: url(clients/images/bg_2.jpg);">
			<div class="overlay my"></div>
    	
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading stx">Blog</span>
            <h2 class="text-white">Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<a href="blog-single.blade.php" class="block-20 img" style="background-image: url('clients/images/image_1.jpg');">
	              </a>
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
                <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<a href="blog-single.blade.php" class="block-20 img" style="background-image: url('clients/images/image_2.jpg');">
	              </a>
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
                <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<a href="/blog-single" class="block-20 img" style="background-image: url('clients/images/image_3.jpg');">
	              </a>
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
                <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a mb-3></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>              
							</div>
            </div>
          </div>
        </div>
      </div>
    </section>	

   @endsection
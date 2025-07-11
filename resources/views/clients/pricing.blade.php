@extends('clients.navbar')
@section('content')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('clients/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pricing <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Pricing &amp; Plans</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Affordable Packages</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Adults</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Individual Counseling</li>
		              <li><span class="fa fa-check mr-2"></span>Couples Therapy</li>
		              <li><span class="fa fa-check mr-2"></span>Family Therapy</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Children</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Counseling for Children</li>
		              <li><span class="fa fa-check mr-2"></span>Behavioral Management</li>
		              <li><span class="fa fa-check mr-2"></span>Educational Counseling</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Business</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Consultancy Services</li>
		              <li><span class="fa fa-check mr-2"></span>Employee Counseling</li>
		              <li><span class="fa fa-check mr-2"></span>Psychological Assessment</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-appointment ftco-section img" style="background-image: url(clients/images/bg_2.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 half ftco-animate">
    				<h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
    				<form action="#" class="appointment">
    					<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Email">
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Services</option>
	                        <option value="">Relation Problem</option>
	                        <option value="">Couple Counseling</option>
	                        <option value="">Depression Treatment</option>
	                        <option value="">Family Problem</option>
	                        <option value="">Personal Problem</option>
	                        <option value="">Business Problem</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

      @endsection
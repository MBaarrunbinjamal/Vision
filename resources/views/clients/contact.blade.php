@extends('clients.navbar')
@section('content')
<style>
	.isec {
		background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
	}

	.ctd {
		color: #9e9d9dff !important;
	}

	.cfbg {
		background: #3a3a3aff !important;
	}

	.form-group .label {
		color: #ffffffff !important;
	}

	.contbtn {
		background: #4B0082 !important;
		border: 1.5px solid #4B0082 !important;
		border-radius: 5px !important;
		color: #fff;
	}

	.contbtn:hover {
		background: #5a00a8 !important;
		border: 1.5px solid #5a00a8 !important;
		color: #fff !important;
		transition-duration: 0.50s
	}

	/* Map container */
	.map iframe {
		width: 100%;
		height: 100%;
		border: 0;
		border-radius: 8px;
	}
</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url('clients/images/Flux_Dev_Create_an_image_depicting_a_serene_and_professional_c_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate mb-5 text-center">
				<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/" style="color: #9e9d9dff !important;">Home <i class="fa fa-chevron-right" style="color: #9e9d9dff !important;"></i></a></span></p>
				<h1 class="mb-0 bread text-white">Contact Us</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section isec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper px-md-4">
					<div class="row mb-5">
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center bg-white">
									<span class="fa fa-map-marker text-dark"></span>
								</div>
								<div class="text">
									<p><span class="text-white">Address:</span> Aptech. Scheme#33, Gulzar-e-Hijri, Karachi, Pakistan</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center bg-white">
									<span class="fa fa-phone text-dark"></span>
								</div>
								<div class="text">
									<p><span class="text-white">Phone:</span> <a href="tel://1234567920" class="ctd">+92 334 0621597</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center bg-white">
									<span class="fa fa-paper-plane text-dark"></span>
								</div>
								<div class="text">
									<p><span class="text-white">Email:</span> <a href="mailto:Propello@gmail.com" class="ctd">Propello@gmail.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center bg-white">
									<span class="fa fa-globe text-dark"></span>
								</div>
								<div class="text">
									<p><span class="text-white">Website:</span> <a href="/" class="ctd">yoursite.com</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutters">
						<div class="col-md-7">
							<div class="contact-wrap w-100 p-md-5 p-4 cfbg">
								<h3 class="mb-4 text-white">Contact Us</h3>
								<form method="POST" id="contactForm" action="/contact" name="contactForm" class="contactForm">
									@csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder=" Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder=" Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder=" Subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder=" Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" class="contbtn">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-5 order-md-first d-flex align-items-stretch">
							<!-- Real Google Map Embed -->
							<div class="map w-100">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2755.554426411151!2d67.10809927393836!3d24.947450741773842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3390008cfd9ab%3A0x50570e200b0de0fe!2sAptech%20scheme%2033!5e1!3m2!1sen!2s!4v1759344098888!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
									width="100%" 
									height="100%" 
									style="border:0;" 
									allowfullscreen="" 
									loading="lazy" 
									referrerpolicy="no-referrer-when-downgrade">
								</iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@push('scripts')
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#9900ff'
        });
    </script>
@endif
@endpush

@endsection

@extends('layout.web')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-8 col-md-12">
				<div class="active-review-carusel">
					<div class="single-feedback-carusel">
						<h1>
							Medical Advice One
						</h1>
						<p class="pt-10 pb-10 text-white">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<button class="nw-btn primary-btn circle">Know More</button>
					</div>
					<div class="single-feedback-carusel">
						<h1>
							Medical Advice Two
						</h1>
						<p class="pt-10 pb-10 text-white">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<button class="nw-btn primary-btn circle">Know More</button>
					</div>
					<div class="single-feedback-carusel">
						<h1>
							Medical Advice Three
						</h1>
						<p class="pt-10 pb-10 text-white">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<button class="nw-btn primary-btn circle">Know More</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->




<!-- Analysis Area -->
<div class="container section-title">
	<div class="row justify-content-center">
		<div class="col-md-12 header-text text-center">
			<h1 class="mb-10">We Care for Your Health</h1>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text below as a natural lead-in</p>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		</div>
	</div>
</div>
<section class="feedback-area section-gap relative">
	<!--<div class="overlay overlay-bg"></div>-->

	<div class="container">

		<div class="row analysis-area">




			<div class="col-lg-3">
				<div class="row">


					<form id="myforma" action="" method="GET">
						<div class="form-group">
							<label for="">Select The Lap Name</label>
							<div>
								<select class="form-control form-control-xs selectpicker dynamic" name="selectedLab" data-size="7" data-live-search="true" data-title="Lap Name" id="selectedLab" data-dependent="analysis" data-width="100%">
									@foreach ($labs as $lab)
									<option value='{{$lab->id}}'>{{$lab->en_name}}</option>

									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group analysis-cart">
							<label for="">Search For Analysis</label>
							<div>
								<input class="form-control mb-10" placeholder="--Search For Analysis--" />
								<select class="form-control  show-menu-arrow mb-10" name="analysis[]" id="analysis" data-live-search="true" multiple="" title="-- Select your Analysis --">
									<!-- <option data-tokens="Option-1">Option-1</option> -->

								</select>
								<button onclick="addtocard(this)" class="btn btn-success">Add Analysis to Cart </button>
								<!-- <a href="#" class="btn btn-success">Add Analysis to Cart</a> -->
							</div>
						</div>
						<!-- <div class="form-group analysis-cart">
							<label for="">Search For Other Analysis</label>
							<div>
								<select class="form-control form-control-xs selectpicker" name="" data-size="7" data-live-search="true" data-title="Lap Name" id="state_list" data-width="100%">
									<option>Engineers Syndicate</option>
									<option>Doctors Syndicate</option>
								</select>
							</div>
						</div> -->
					</form>
				</div>
				<h4 class="rec-price-title">Recommended Labs</h4>
				<div class="row">
					<div class="col-lg-12">
						<div class="single-sidebar-widget popular-post-widget">
							<div class="popular-post-list">
								@foreach($labs as $lab)
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<a href="#"><img class="img-fluid rec-logo" src="{{ asset('uploads/'.$lab->logo) }}" alt=""></a>
									</div>
									<div class="details rec-price">
										<p>{{$lab->en_name}}</p>
										<p>{{$lab->en_slogan}}</p>

									</div>
								</div>
								@endforeach

							</div>
						</div>
					</div>

				</div>
			</div>
			<div id="ajaxLab" class="col-lg-9">
				<?php
				$value = Session()->get('analysisSession');
				?>
				@if(Session::has('analysisSession') )
				@include('web.home.ajaxLab')
				@else
				<div id="emptyData">

					<div class="row lap-area">
						<div class="col-lg-3 col-sm-12">
							<img src="{{ asset('webasset/img/logo.png')}}" class="our-logo" /><span>Salamtk</span>
						</div>
						<div class="col-lg-7  col-sm-12">
							<h3 class="our-slogn">We Always Care For Your Health</h3>
						</div>
						<div class="col-lg-2  col-sm-12">
							<!--<a href="#" class="btn btn-success btn-lap">Lap Page</a>-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 video-right justify-content-center align-items-center d-flex relative analysis-area-vedio video-right2">
							<div class="overlay overlay-bg"></div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-12 pb-10 header-text text-center">
							<h3 class="mb-10 text-white pt-10">We Care for Your Health</h3>
							<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</p>
							<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor sit amet</p>
						</div>
					</div>
					<div class="row steps">
						<ul>
							<li class="text-white"><span> 1 - <i class="fa fa-angle-double-right"></i> Select Lap Name </span>
								<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor sit amet elit Lorem dolor sit amet</p>
							</li>
							<li class="text-white"><span> 2 - <i class="fa fa-angle-double-right"></i> Select Analysis Name </span>
								<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor elit Lorem ipsum dolor sit amet</p>
							</li>
							<li class="text-white"><span> 3 - <i class="fa fa-angle-double-right"></i> Click Submit </span>
								<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor sit amet elit Lorem ipsum dolor amet</p>
							</li>
						</ul>
					</div>

				</div>
				@endif

			</div>
		</div>
	</div>
</section>
<!-- End Analysis Area -->

<!-- Start Servicing Area -->
<section class="appointment-area">
	<div class="container">
		<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
			<div class="col-lg-5 col-md-6 appointment-left pt-60">
				<h1>
					Our Services
				</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
				</p>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single-facilities">
							<span class="lnr lnr-heart"></span>
							<a href="#">
								<h4>Intensive Care</h4>
							</a>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-facilities">
							<span class="lnr lnr-users"></span>
							<a href="#">
								<h4>Family Planning</h4>
							</a>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 feedback-left relative d-flex justify-content-center align-items-center rec-logo">
				<!--<div class="overlay overlay-bg"></div>-->
				<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
			</div>
		</div>
	</div>
</section>
<!-- End Servicing Area -->

<!-- Scan Area -->
<div class="container section-title">
	<div class="row justify-content-center">
		<div class="col-md-12 header-text text-center">
			<h1 class="mb-10">We Care for Your Health</h1>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text below as a natural lead-in</p>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		</div>
	</div>
</div>
<section class="feedback2-area section-gap relative">
	<!--<div class="overlay overlay-bg"></div>-->
	<div class="container">
		<div class="row analysis-area">
			<div class="col-lg-3">
				<div class="row">
					<form>
						<div class="form-group">
							<label for="">Select The Lap Name</label>
							<div>
								<select class="form-control form-control-xs selectpicker" name="" data-size="7" data-live-search="true" data-title="Lap Name" id="state_list" data-width="100%">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
								</select>
							</div>
						</div>
						<div class="form-group analysis-cart">
							<label for="">Search For Scan</label>
							<div>
								<input class="form-control mb-10" placeholder="--Search For Scan--" />
								<select class="form-control show-menu-arrow mb-10" data-live-search="true" multiple="" title="-- Select your Analysis --">
									<option data-tokens="Option-1">Option-1</option>
									<option data-tokens="Option-2">Option-2</option>
									<option data-tokens="Option-3">Option-3</option>
									<option data-tokens="Option-4">Option-4</option>
									<option data-tokens="Option-5">Option-5</option>
									<option data-tokens="Option-6">Option-6</option>
									<option data-tokens="Option-7">Option-7</option>
								</select>
								<a href="#" class="btn btn-info">Add Scan to Cart</a>
							</div>
						</div>
						<div class="form-group analysis-cart">
							<label for="">Search For Other Scan</label>
							<div>
								<select class="form-control form-control-xs selectpicker" name="" data-size="7" data-live-search="true" data-title="Lap Name" id="state_list" data-width="100%">
									<option>Engineers Syndicate</option>
									<option>Doctors Syndicate</option>
								</select>
							</div>
						</div>
					</form>
				</div>
				<h4 class="rec-price-title">Recommended Labs</h4>
				<div class="row">
					<div class="col-lg-12">
						<div class="single-sidebar-widget popular-post-widget">
							<div class="popular-post-list">
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<a href="#"><img class="img-fluid rec-logo" src="img/rec-lap1.png" alt=""></a>
									</div>
									<div class="details rec-price">
										<p>El Borg Lap</p>
										<p>Lorem ipsum dolor</p>
										<p>Lorem ipsum dolor</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<a href="#"><img class="img-fluid rec-logo" src="img/rec-lap2.png" alt=""></a>
									</div>
									<div class="details rec-price">
										<p>El Mokhtabr Lap</p>
										<p>Lorem ipsum dolor</p>
										<p>Lorem ipsum dolor</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<a href="#"><img class="img-fluid rec-logo" src="img/rec-lap1.png" alt=""></a>
									</div>
									<div class="details rec-price">
										<p>El Borg Lap</p>
										<p>Lorem ipsum dolor</p>
										<p>Lorem ipsum dolor</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-9">
				<div class="row lap-area">
					<div class="col-lg-3 col-sm-12">
						<img src="img/logo.png" class="our-logo" /><span>Salamtk</span>
					</div>
					<div class="col-lg-7  col-sm-12">
						<h3 class="our-slogn">We Always Care For Your Health</h3>
					</div>
					<div class="col-lg-2  col-sm-12">
						<!--<a href="#" class="btn btn-success btn-lap">Lap Page</a>-->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 video-right justify-content-center align-items-center d-flex relative analysis-area-vedio">
						<div class="overlay overlay-bg"></div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12 pb-10 header-text text-center">
						<h3 class="mb-10 text-white pt-10">We Care for Your Health</h3>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</p>
						<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="row steps">
					<ul>
						<li class="text-white"><span> 1 - <i class="fa fa-angle-double-right"></i> Select Lap Name </span>
							<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor sit amet elit Lorem dolor sit amet</p>
						</li>
						<li class="text-white"><span> 2 - <i class="fa fa-angle-double-right"></i> Select Scan Name </span>
							<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor elit Lorem ipsum dolor sit amet</p>
						</li>
						<li class="text-white"><span> 3 - <i class="fa fa-angle-double-right"></i> Click Submit </span>
							<p class="text-white">Consectetur adipisicing elit Lorem ipsum dolor sit amet elit Lorem ipsum dolor amet</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Scan Area -->

<!-- Start Join Area -->
<section class="offered-service-area section-gap bg-1">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offered-left">
				<h1>Routine Checkup</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<div class="service-wrap row">
					<div class="col-lg-6 col-md-6">
						<div class="single-service">
							<div class="thumb">
								<img class="img-fluid" src="img/join-3.jpg" alt="">
							</div>
							<a href="#">
								<h4>Routine Checkup</h4>
							</a>
							<p>
								inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-service">
							<div class="thumb">
								<img class="img-fluid" src="img/join-4.jpg" alt="">
							</div>
							<a href="#">
								<h4>Routine Checkup</h4>
							</a>
							<p>
								inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<form class="form-wrap sidebar-appointment">
					<h4 class="pb-20 text-center">Subscribe With Us Now</h4>
					<input type="text" class="form-control" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
					<input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'">
					<input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
					<div>
						<select class="form-control">
							<option data-display="">Lap Type</option>
							<option value="1">Type One</option>
							<option value="2">Type Two</option>
							<option value="3">Type Three</option>
							<option value="4">Type Four</option>
						</select>
					</div>
					<div>
						<select class="form-control">
							<option data-display="">Other Type</option>
							<option value="1">Type One</option>
							<option value="2">Type Two</option>
							<option value="3">Type Three</option>
							<option value="4">Type Four</option>
						</select>
					</div>
					<textarea name="messege" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
					<button class="nw-btn primary-btn circle">Confirm Request<span class="lnr lnr-arrow-right"></span></button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End Join Area -->
@endsection

@section('scripts')

<script>
	//adding analysis to session
	function addtocard(theForm) {
		theForm = $(theForm).closest("form");
		event.preventDefault();
		$.ajax({ // create an AJAX call...
			data: $(theForm).serialize(), // get the form data
			method: "get", // GET or POST
			url: "{{url('/addToCard')}}", // the file to call
			success: function(response) { // on success..

				$('#ajaxLab').html(response); // update the DIV
				// $('#myforma').reset();
				document.getElementById("myforma").reset();
				$("#selectedLab").val('default');
				$("#selectedLab").selectpicker("refresh");
				$('#analysis').html('');

			}
		});
	}
	//remove item from session
	function removeItem(c) {

		var id = c;

		$.ajax({ // create an AJAX call...
			// get the form data
			url: '{{ url("/removeItem") }}/' + id,

			success: function(response) { // on success..
				$('#ajaxLab').html(response); // update the DIV
				// $('#myforma').reset();
				document.getElementById("myforma").reset();
				$("#selectedLab").val('default');
				$("#selectedLab").selectpicker("refresh");
				$('#analysis').html('');
			}
		});

	}
	$(document).ready(function() {

		$('.dynamic').change(function() {

			if ($(this).val() != '') {
				var select = $(this).attr("id");
				var value = $(this).val();


				$.ajax({
					url: "{{route('dynamicLabAnalysis.fetch')}}",
					method: "get",
					data: {
						select: select,
						value: value,

					},
					success: function(result) {

						$('#analysis').html(result);
					}

				})
			}
		});
	});
</script>

@endsection
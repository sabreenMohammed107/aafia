@extends('layout.web')
@section('content')
	<!-- start banner Area -->
    <section class="banner-area relative about-banner bg1-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="mb-10 text-white">We Care for Your Health</h1>
							<h2 class="text-white">About</h2>
							<p class="text-white link-nav"><a href="#">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> About </a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start Goals Area -->
			<section class="our-mission-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Goals to Achieve</h1>
								<p>Nunc placerat mi id nisi interdum mollis</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 accordion-left">
							<!-- accordion 2 start-->
							<dl class="accordion">
								<dt>
									<a href="">Our Mission</a>
								</dt>
								<dd>
									Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
								</dd>
								<dt>
									<a href="">Info</a>
								</dt>
								<dd>
									Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget diam.
								</dd>
								<dt>
									<a href="">Info</a>
								</dt>
								<dd>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
								</dd>
								<dt>
									<a href="">Info</a>
								</dt>
								<dd>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
								</dd>
							</dl>
							<!-- accordion 2 end-->
						</div>
						<div class="col-md-6 video-right video-right3 justify-content-center align-items-center d-flex relative">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/about/play.png" alt=""></a>
						</div>
					</div>
				</div>
			</section>
			
			<!-- End our-mission Area -->

			<!-- Start info Area -->
			<section class="info-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="{{ asset('webasset/img/about/about-img.jpg')}}" alt="">
						</div>
						<div class="col-lg-6 info-area-right">
							<h1>Who we are to Serve you</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.</p>
							<br>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
						</div>
					</div>

					<hr />
				</div>
			</section>
			<!-- End info Area -->
@endsection
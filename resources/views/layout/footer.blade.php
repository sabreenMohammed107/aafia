<!-- Start brands Area -->
<section class="brands-area">
	<div class="container">
		<div class="brand-wrap section-gap">
			<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="{{ asset('webasset/img/brand-lap1.png')}}" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="{{ asset('webasset/img/brand-lap.png')}}" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="{{ asset('webasset/img/brand-lap2.png')}}" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="{{ asset('webasset/img/brand-lap.png')}}" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="{{ asset('webasset/img/brand-lap1.png')}}" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End brands Area -->


<!-- start footer Area -->
<footer class="footer-area section-gap">
	<div class="layer"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6">
				<div class="single-footer-widget">
					<h6>Top Services</h6>
					<ul class="footer-nav">
						<li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum Lorem Ipsum</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4  col-md-6">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">Contact Us</h6>
					<p>12,Salah Salem , Nasr City, Cairo, Egypt Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text below as a natural</p>
					<h4 class="text-white">0100 123 63 41 - 0120 145 45 32</h4>
				</div>
			</div>
			<div class="col-lg-5  col-md-12">
				<div class="single-footer-widget newsletter">
					<h6>Newsletter</h6>
					<p>You can trust us. we only send promo offers, not a single spam consectetur adipisicing elit With supporting text.</p>
					<div id="mc_embed_signup">

						<form class="form-inline" action="{{url('/sendNewsLetter')}}" method="POST">
							@csrf
							<div class="form-group row" style="width: 100%">
								<div class="col-lg-8 col-md-12">
									<input name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
								</div>

								<div class="col-lg-4 col-md-12">
									<button type="submit" class="nw-btn primary-btn circle">Subscribe<span class="lnr lnr-arrow-right"></span></button>
								</div>
							</div>
							<div class="info">
								
								@if(Session::has('flag') )
							
								<div id="alertDiv" class="alert {{ Session::get('alert-class', 'alert-success') }}">
									<button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
									<strong style="color:#032f04;font-weight:bold">add record successful </strong>
								</div>
								@endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->
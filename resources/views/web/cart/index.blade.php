@extends('layout.web')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="mb-10 text-white">We Care for Your Health</h1>
				<h2 class="text-white">Cart</h2>
				<p class="text-white link-nav"><a href="#">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Cart </a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<div class="container section-title">
	<div class="row justify-content-center">
		<div class="col-md-12 header-text text-center">
			<h1 class="mb-10">We Care for Your Health</h1>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text below as a natural lead-in</p>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		</div>
	</div>
</div>
<section>
	<div class="container">
	<div id="ajaxCart">
	@include('web.cart.ajaxCart')
	</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" id="exampleModalCenterTitle">Confirm Your Data</h5>
					<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Name :</label>
							<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" value="Ahmed Muhammad Abd El-Rahman">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Mobile :</label>
							<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" value="0100 124 98 65 / 0120 145 78 79">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 col-form-label">Address :</label>
							<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" value="Lorem ipsum dolor sit amet, consectetur adipisicing">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-defulte" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success">Confirm</button>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Start feedback Area -->
<section class="feedback-area section-gap aboutpage-feedback-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-60 header-text text-center">
				<h1 class="mb-10 ">Enjoy our Client’s Feedback</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>
		<div class="row feedback-contents justify-content-center align-items-center">
			<div class="col-lg-6 feedback-left feedback-bg relative d-flex justify-content-center align-items-center rec-logo">
			</div>
			<div class="col-lg-6 feedback-right">
				<div class="active-review-carusel">
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Ahmed Ali</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Salma Muhammad</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Abd Elrahman Samy</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked	"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Marwa Adel</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked	"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Khaled Elsayed</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked	"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End feedback Area -->
@endsection

@section('scripts')

<script>
	//remove item from session
	function removeCartItem(c) {

		var id = c;
	
		$.ajax({ // create an AJAX call...
			// get the form data
			url: '{{ url("/removeCartItem") }}/' + id,

			success: function(response) { // on success..
				
				$('#ajaxCart').html(response); // update the DIV

			}
		});

	}
</script>
@endsection
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
							<p class="text-white link-nav"><a href="#">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Cart </a></p>
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
					<div class="row">
						<div class="table-responsive">
							<table class="table table-image">
								<thead class="bg-success text-white">
									<tr>
										<th>Image</th>
										<th>Product</th>
										<th class="text-center">Price</th>
										<th class="text-center">Discount</th>
										<th class="text-center">Total</th>
										<th> </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="img/scan-1.jpg" class="img-fluid img-thumbnail" alt="Sheep">
										</td>
										<td>
											<h4 class="media-heading">Scan Name</h4>
											<h5 class="media-heading">El Borg Lap</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text as a natural lorem.</p>
										</td>
										<td class="text-center"><strong>200.00/LE</strong></td>
										<td class="text-center"><strong>20.00/LE</strong></td>
										<td class="text-center"><strong>180.00/LE</strong></td>
										<td class=""><button type="button" class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button></td>
									</tr>
									<tr>
										<td>
											<img src="img/scan-2.jpg" class="img-fluid img-thumbnail" alt="Sheep">
										</td>
										<td>
											<h4>Scan Name</h4>
											<h5>El Borg Lap</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text as a natural lorem.</p>
										</td>
										<td class="text-center"><strong>200.00/LE</strong></td>
										<td class="text-center"><strong>20.00/LE</strong></td>
										<td class="text-center"><strong>180.00/LE</strong></td>
										<td class=""><button type="button" class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button></td>
									</tr>
									
								</tbody>
							</table>

							<div class="col-lg-12">

								<hr />
								<div class="row">
									<div class="col-lg-8"></div>
									<div class="col-lg-4">
										<table class="table">
											<tbody>
												<tr>
													<td><h6>Subtotal</h6></td>
													<td class="text-right"><h5>360.00 LE</h5></td>
												</tr>
												<tr>
													<td><h6>Home Visit</h6></td>
													<td class="text-right"><h5>40.00 LE</h5></td>
												</tr>
												<tr>
													<td><h5>Total</h5></td>
													<td class="text-right"><h5>400.00 LE</h5></td>
												</tr>
												<tr>
													<td>
														<button type="button" class="btn btn-success">Continue Shopping</button>
													</td>
													<td>
														<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Checkout</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
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
@endsection
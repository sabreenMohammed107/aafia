@extends('layout.web')
@section('content')

<!-- start banner Area -->
<section class="banner-area relative about-banner orders-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="mb-10 text-white">We Care for Your Health</h1>
							<h2 class="text-white">Orders</h2>
							<p class="text-white link-nav"><a href="#">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Client Orders </a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			
			<section>
				<div class="container mb-20">
					<div class="section-title">
						<div class="row justify-content-center">
							<div class="col-md-12 header-text text-center">
								<h1 class="mb-10">We Care for Your Health</h1>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text below as a natural lead-in</p>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="table-responsive client-orders mb-20">
							<table class="table table-striped">
								<thead class="bg-success text-white">
                              
									<tr>
										<th class="text-center"><h4 class="text-white">Date</h4></th>
										<th class="text-center"><h4 class="text-white">Order No.</h4></th>
										<th class="text-center"><h4 class="text-white">Total</h4></th>
										<th class="text-center"><h4 class="text-white">Status</h4></th>
										<th> </th>
									</tr>
								</thead>
								<tbody>
                                @foreach($orders as $order)
									<tr>
										<td class="text-center"><h5>{{date('d-m-Y', strtotime($order->order_date))}}</h5></td>
										<td class="text-center"><h5>PO# {{$order->order_no}}</h5></td>
										<td class="text-center"><h5>{{$order->total_amount}} LE</h5></td>
										<td class="text-center">
                                        @if($order->order_status_id==103)
                                        <button type="button" class="btn btn-outline-danger btn-sm" disabled><strong><i class="fa fa-times"></i> Canceled</strong>
                                        </button>
                                       
                                        @elseif($order->order_status_id==102)
                                        <button type="button" class="btn btn-outline-success btn-sm"disabled><strong><i class="fa fa-check"></i> Succeed</strong></button>
                                      
                                        @elseif($order->order_status_id==101)
                                        <button type="button" class="btn btn-outline-warning btn-sm" disabled><strong><i class="fa fa-pause"></i> Progress</strong></button>
                                      
                                      
                                        @endif
                                        </td>
										<td class="">
                                        <a href="{{ route('orderDetails', $order->id) }}" class="btn btn-success btn-sm">Details</a>
                                        </td>
									</tr>
                                    @endforeach
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
			

			<!-- Start offered-service Area -->
			<section class="offered-service-area dep-offred-service pt-20"style="background-color:#f9f9ff">
				<div class="container">
					<div class="section-title">
						<div class="row justify-content-center">
							<div class="col-md-12 header-text text-center">
								<h1 class="mb-10">Our Offered Services</h1>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit With supporting text below as a natural lead-in</p>
								<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							</div>
						</div>
					</div>
					<div class="row offred-wrap">
						<div class="col-lg-12 offered-left mb-20">
							<div class="service-wrap row">
								<div class="col-lg-4 col-md-4">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="img/s-6.png" alt="">
										</div>
										<a href="#">
											<h4>Routine Checkup</h4>
										</a>
										<p>
											inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="img/s-5.jpeg" alt="">
										</div>
										<a href="#">
											<h4>Routine Checkup</h4>
										</a>
										<p>
											inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="img/s-7.jpg" alt="">
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
					</div>
				</div>
			</section>
			<!-- End offered-service Area -->

@endsection

@section('scripts')
@endsection
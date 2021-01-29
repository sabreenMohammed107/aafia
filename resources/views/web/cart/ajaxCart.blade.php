
@if(Session::has('message') )
	<div id="alertDiv" class="alert {{ Session::get('alert-class', 'alert-info') }}">
		<button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
		<strong style="color:#fff;font-weight:bold">{{ Session::get('message') }} </strong>
	</div>
	@endif


<div class="row">
			<div class="table-responsive">
				<table class="table table-image">
					<?php
					$price = 0;
					$discount = 0;
					$afterDiscount = 0;
					?>
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
						@foreach($analysisCart as $cart)
						<?php
						$afterDiscount += $cart->original_cost - ($cart->original_cost * $cart->discount_pct);
						?>
						<tr>
							<td>
								@if($cart->analysis)
								<img src="img/scan-1.jpg" class="img-fluid img-thumbnail" alt="Sheep">
								@else
								<img src="img/analysis-1.jpg" class="img-fluid img-thumbnail" alt="Sheep">

								@endif
							</td>
							<td>
								<h4 class="media-heading">@if($cart->analysis){{$cart->analysis->en_name}}
									@else
									{{$cart->scan->en_name}}
									@endif
								</h4>
								<h5 class="media-heading">@if($cart->analysis){{$cart->order->analysislab->en_name}}
									@else
									{{$cart->order->scanlab->en_name}}
									@endif
								</h5>
								<p>@if($cart->analysis){{$cart->analysis->en_desc}}
									@else
									{{$cart->scan->en_desc}}
									@endif
								</p>
							</td>
							<td class="text-center"><strong>{{$cart->original_cost}}/LE</strong></td>
							<td class="text-center"><strong>{{$cart->discount_pct}}/LE</strong></td>
							<td class="text-center"><strong>{{$cart->original_cost -($cart->original_cost * $cart->discount_pct)}}/LE</strong></td>
							<td class="">

								<button id="{{$cart->id}}" onclick="removeCartItem({{$cart->id}})" type="button" class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button>
							</td>
						</tr>

						@endforeach
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
										<td>
											<h6>Total Price</h6>
										</td>
										<td class="text-right">
											<h5>{{ $analysisCart->sum('original_cost') }} LE</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h6>Total Discountt</h6>
										</td>
										<td class="text-right">
											<h5>{{ $analysisCart->sum('discount_pct') }} LE</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Price After Discount </h5>
										</td>
										<td class="text-right">
											<h5>
												{{$afterDiscount}}LE
											</h5>
										</td>
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
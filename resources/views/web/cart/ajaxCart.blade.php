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
				@if($analysisCart)
				@foreach($analysisCart as $cart)
				<?php
				$afterDiscount += $cart->original_cost - (($cart->original_cost * $cart->discount_pct) / 100);
				?>
				<tr>
					<td>
						@if($cart->analysis)
						<img src="{{asset('uploads/'.$cart->order->analysislab->logo ?? '') }}" class="img-fluid img-thumbnail" alt="Sheep" />
						@else
						<img src="{{asset('uploads/'.$cart->order->scanlab->logo ?? '') }}" class="img-fluid img-thumbnail" alt="Sheep" />


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
					<td class="text-center"><strong>{{$cart->discount_pct}} %</strong></td>
					<td class="text-center"><strong>{{$cart->original_cost -(($cart->original_cost * $cart->discount_pct)/100)}}/LE</strong></td>
					<td class="">

						<button id="{{$cart->id}}" onclick="removeCartItem({{$cart->id}})" type="button" class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button>
					</td>
				</tr>

				@endforeach
				@endif
			</tbody>
		</table>

		<div class="col-lg-12">

			<hr />
			<div class="row">
				<div class="col-lg-8">
					<div class="container" style="box-shadow:5px 5px 5px rgba(68,68,68,0.6);">
						<h2>Patient Data</h2>
						<form class="form-horizontal" action="{{route('patientData')}}" method="post">
						@csrf
						<input type="hidden" name="order" value="{{$order->id ?? 0}}">
						<input type="hidden" name="userId" value="{{ Auth::user()->id }}">
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="inputFirstname">Name</label>
									<input type="text" class="form-control" name="patient_name" readonly value="@guest User @else {{ Auth::user()->name }}  @endguest" id="inputFirstname" placeholder="Name">
								</div>
								<div class="col-sm-6">
									<label for="inputLastname">Phone</label>
									<input type="text" class="form-control" name="mobile" value="@guest User @else {{ Auth::user()->mobile }}  @endguest" required id="inputLastname" placeholder="Phone">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="timefrom">Time From:</label>
									<input type="time" class="form-control" value="{{date('H:i', strtotime($order->v_from))}}" name="v_from" required id="timefrom" placeholder="timefrom">
								</div>
								<div class="col-sm-6">
									<label for="timeto">Time To:</label>
									<input type="time" class="form-control" name="v_to" value="{{date('H:i', strtotime($order->v_to))}}" required id="timeto" placeholder="timeto">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-6">
									<label for="dateVisit">Visit Date:</label>
									<input type="date" class="form-control" name="visit_date" @if($order->visit_date) value="{{date('Y-m-d', strtotime($order->visit_date))}}" @else value="{{date('Y-m-d', strtotime(Carbon\Carbon::now()))}}" @endif required id="dateVisit" placeholder="dateVisit">
								</div>
								<div class="col-sm-6">
									<label for="address">Address:</label>
									<input type="text" class="form-control" name="address" value="@guest User @else {{ Auth::user()->patient->address }}  @endguest" required id="address" placeholder="address">
								</div>
							</div>


							<div class="form-group row">
								<div class="col-sm-6">
									<label for="dateVisit">Syndicate:</label>
									<select class="form-control form-control-xs selectpicker " name="syndicate_id" data-size="7" data-live-search="true"  id="syndicate_id"  data-width="100%">
									<option value="">@if(Auth::user()->patient->syndicate) {{Auth::user()->patient->syndicate->text}} @else Select @endif</option>
									@foreach ($syndicate as $obj)
									<option value='{{$obj->id}}'>{{$obj->text}}</option>

									@endforeach
								</select>
								</div>
								
							</div>


							<div class="form-group row">
								<button type="submit" class="btn btn-success px-4 mb-3">Save</button>
							</div>

						</form>
					</div>
				</div>


				<div class="col-lg-4">
					<table class="table">
						<tbody>
							<tr>
								<td>
									<h6>Total Price</h6>
								</td>
								<td class="text-right">
									<h5>{{ $analysisCart ? $analysisCart->sum('original_cost'):0 }} LE</h5>
								</td>
							</tr>
							<tr>
								<td>
									<h6>Total Discountt</h6>
								</td>
								<td class="text-right">
									<?php
									$dif = 0;
									if ($analysisCart) {
										$dif = $analysisCart->sum('original_cost');
									}

									?>
									<h5>{{ $dif - $afterDiscount}} LE</h5>
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
									<a href="{{ url('/') }}" class="btn btn-success">Continue Shopping</a>
								</td>
								<td>
									<form action="{{route('SavingCart')}}" style="display: none;" id="form-id" method="get">

										<input type="hidden" name="total" value="{{$afterDiscount}}">
										<input type="hidden" name="order" value="{{$order->id ?? 0}}">
									</form>


									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#save">Checkout</button>
								</td>
							</tr>
						</tbody>
					</table>



					<!--save Company-->
					<div id="save" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header header-color-modal bg-color-2">
									<h4 class="modal-title" style="text-align:right">Saving Cart </h4>
									<div class="modal-close-area modal-close-df">
										<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
									</div>
								</div>
								<div class="modal-body">
									<span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>

									<h4>Order Confirmation - Are You Sure ? </h4>
								</div>
								<div class="modal-footer info-md">
									<button class="btn btn-success waves-effect waves-light" name="action" value="save" onclick="document.getElementById('form-id').submit();">Save</button>

									<a class="btn btn-danger waves-effect waves-light" data-dismiss="modal" href="#">Cancel</a>


								</div>
							</div>
						</div>
					</div>
					<!--/save Company-->
				</div>
			</div>
		</div>
	</div>
</div>
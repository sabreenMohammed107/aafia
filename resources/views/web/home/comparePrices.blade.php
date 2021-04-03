@if($comparess && isset($comparess[0]))

<div class="card text-center">
		<div class="card-header bg-success text-white">
{{$comparess[0]->en_name}}

</div>

				<div class="card-body">
					<div class="col-lg-12">
						<div class="single-sidebar-widget popular-post-widget @if($comparess && isset($comparess[0])) analysis-cart @endif">
							<div class="popular-post-list">
								@foreach($comparess as $comp)
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<a href="#">
										@if($comp->lab)
										<img class="img-fluid rec-logo" width="120" height="70" src="{{ asset('uploads/'.$comp->lab->logo ?? '') }}" alt="">
										@endif
										</a>
									</div>
									
									<div class="details rec-price">
									<p> {{$comp->lab->en_name ?? ''}}</p>
										<h5>Price: <span style="text-decoration:line-through">{{$comp->original_cost}}LE</span>{{$comp->original_cost-(($comp->original_cost * $comp->discount_pct)/100) }}LE</h5>

									</div>
								</div>
								@endforeach

							</div>
						</div>
					</div>

				</div>
				</div>

				@endif



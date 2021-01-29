<!-- ajax Data on change Lab -->
<div id="ajaxData">

	@if(Session::has('message') )
	<div id="alertDiv" class="alert {{ Session::get('alert-class', 'alert-info') }}">
		<button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
		<strong style="color:#fff;font-weight:bold">{{ Session::get('message') }} </strong>
	</div>
	@endif
	<div class="row lap-area">
	@if(Session::has('analysisSession') )
		<div class="col-lg-3 col-sm-12">
			<img src="{{ asset('uploads/'.$value[0]->lab->logo ?? '') }}" />
		</div>
		<div class="col-lg-7  col-sm-12">
			<h3>{{$value[0]->lab->en_slogan ?? ''}}</h3>
		</div>
		@endif
		<div class="col-lg-2  col-sm-12">

			@guest

			<a href="{{route('login')}}" class="btn btn-danger btn-lap">Check Out</a>
			@else


			<a href="{{route('checkout')}}" class="btn btn-danger btn-lap">Check Out</a>
			</li>
			@endguest
		</div>
	</div>
	<div class="row analysis-area-data">
	@if(Session::has('analysisSession') )
		@foreach($value as $data)
		@foreach($data->analysis as $obj)
		<div class="col-lg-4 col-md-6 mb-10">
			<div class="card text-center">
				<div class="card-header bg-success text-white">{{$obj->discount_pct}}</div>
				<div class="card-body">
					<h5 class="card-title">{{$obj->en_name}}</h5>
					<p class="card-text">{{$obj->en_desc}}.</p>
					<h5>Price: <span style="text-decoration:line-through">{{$obj->original_cost}}LE</span>{{($obj->original_cost * 100)/$obj->discount_pct }}LE</h5>
					<a href="#" class="btn  btn-success btn-sm">Details</a>
					{{--<button class="btn" title="Delete" onclick="removeItem('{{$data->id}}')" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>--}}
					<button id="{{$obj->id}}" onclick="removeItem({{$obj->id}})" title="Delete" class="btn  btn-danger btn-sm">Remove </button>
				</div>
			</div>
		</div>
		@endforeach
		@endforeach
		@endif
	</div>

	<div class="row justify-content-center">
		@guest

		<a href="{{route('login')}}" class="btn  btn-danger text-white">Check Out</a>
		@else


		<a href="{{route('checkout')}}" class="btn  btn-danger text-white">Check Out</a>
		</li>
		@endguest

	</div>
</div>
<!-- end -->
<!-- ajax Data on change Lab -->
<div id="ajaxData">

    @if(Session::has('message') )
    <div id="alertDiv" class="alert {{ Session::get('alert-class', 'alert-info') }}">
        <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
        <strong style="color:#fff;font-weight:bold">{{ Session::get('message') }} </strong>
    </div>
    @endif
    <div class="row lap-area">
        @foreach($analysisCart as $data)
        @if($data->scan)
        <div class="col-lg-3 col-sm-12">
            @if(isset($analysisCart[0]) && $data->order->scanlab)
            <img src="{{asset('uploads/'.$data->order->scanlab->logo ?? '') }}" alt="bb" />
            @else
            <img src="{{ asset('webasset/img/logo.png')}}" class="our-logo" /><span>Salamtk</span>
            @endif
        </div>
      
        <div class="col-lg-7  col-sm-12">

            <h3 class="our-slogn mt-3">{{ isset($analysisCart[0]) && $data->order->scanlab ? $data->order->scanlab->en_slogan : ''}}</h3>
        </div>
        @break
        @endif
        @endforeach
        <div class="col-lg-2  col-sm-12">

            @guest

            <a href="{{route('login')}}" class="btn btn-danger btn-lap mb-3">Check Out</a>
            @else


            <a href="{{route('checkout')}}" class="btn btn-danger btn-lap mb-3">Check Out</a>
            </li>
            @endguest
        </div>
    </div>
    <div class="row analysis-area-data">

        @foreach($analysisCart as $data)
        @if($data->scan)

        <div class="col-lg-4 col-md-6 mb-10">
            <div class="card text-center">
                <div class="card-header bg-success text-white">{{$data->scan->discount_pct}}</div>
                <div class="card-body">
                    <h5 class="card-title">{{$data->scan->en_name}}</h5>
                    <p class="card-text">	{{ Str::limit($data->scan->en_desc, 200, ' ...') }}</p>
                    <h5>Price: <span style="text-decoration:line-through">{{$data->scan->original_cost}}LE</span>{{$data->scan->original_cost-(($data->scan->original_cost * $data->scan->discount_pct)/100) }} LE</h5>
                    <a href="#" class="btn  btn-success btn-sm">Details</a>
                    {{--<button class="btn" title="Delete" onclick="removeScanItem('{{$data->id}}')" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>--}}
                    <button id="{{$data->id}}" onclick="removeScanItem({{$data->id}})" title="Delete" class="btn  btn-danger btn-sm">Remove </button>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

  
</div>
<!-- end -->
@extends('admin.adminLayout.main')



@section('crumb')

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <ul class="breadcome-menu pull-left" style="direction: ltr;">
                <li>
                    <a href="{{ url('/admin') }}"> Home </a><span class="bread-slash"> / </span>
                </li>
                <li>
                    <a href="{{ url('/admin') }}l"> Labs </a><span class="bread-slash"> / </span>
                </li>
                <li>
                    <span class="bread-blod"> Orders - Analysis</span>
                </li>
            </ul>
        </div>
    </div>

@endsection
@section('content')

    <div class="container">
        <div class="row">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin-top: 25px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list backbutton">


                                <div class="row ">
                                    <div class="col-md-6 mb-10">
                                        <div class="card pb-10">
                                            <div class="card-header bg-success">
                                                <div class="d-inline h4 text-white">Order Data</div>
                                            </div>
                                            <div class="card-body">
                                                <dl class="row">
                                                    <dd class="col-sm-4">Order Number</dd>
                                                    <dt class="col-sm-8"> {{$order->order_no}}</dt>
                                                    <dd class="col-sm-4">Order Date</dd>
                                                    <dt class="col-sm-8">{{date('d-m-Y', strtotime($order->order_date))}}</dt>
                                                </dl>
                                                <dl class="row"></dl>
                                                <dl class="row">
                                                    <dd class="col-sm-4">Total Amount</dd>
                                                    <dt class="col-sm-8">{{$order->total_amount}} EGP</dt>
                                                    <dd class="col-sm-4">Order Status</dd>
                                                    <dt class="col-sm-8">
                                                        @if($order->order_status_id==103)
                                                        Canceled

                                                        @elseif($order->order_status_id==102)
                                                        Succeed

                                                        @elseif($order->order_status_id==101)
                                                        In Progress
                                                        @else
                                                        <span></span>

                                                        @endif

                                                    </dt>
                                                </dl>
                                                <dl class="row">
                                                    <dd class="col-sm-4">Patient Name</dd>
                                                    <dt class="col-sm-8">{{$order->patient->user->name ?? ''}}</dt>
                                                    <dd class="col-sm-4">Payment Method</dd>
                                                    <dt class="col-sm-8">On Home Visit</dt>
                                                </dl>
                                                <hr>
                                                <dl class="row">
                                                    <dt class="col-sm-12">Comments</dt>
                                                    <dd class="col-sm-12">
                                                        {{$order->notes}}
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <div class="d-inline h4 text-white">Order Details</div>
                                            </div>
                                            <div class="card-body" style="overflow-y: auto; -webkit-overflow-scrolling: touch; max-height: 500px; max-height: 50vh;">
                                                @foreach($analysisCart as $data)
                                                @if($data->analysis)
                                                <div class="row mg-0">
                                                    <div class="card mb-10">
                                                        <div class="card-horizontal">
                                                            <div class="card-body">
                                                                <h4 class="card-title">{{$data->analysis->lab->en_name ?? ''}} - Analysis</h4>
                                                                <h6 class="mb-10">{{$data->analysis->en_name}}</h6>
                                                                <p class="card-text mb-10">{{$data->analysis->en_desc}}.</p>
                                                                <h6>Price: {{$data->analysis->original_cost-($data->analysis->original_cost * $data->analysis->discount_pct)/100 }}  LE</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                <hr>
                                                @foreach($analysisCart as $data)
                                                @if($data->scan)
                                                <div class="row mg-0">
                                                    <div class="card mb-10">
                                                        <div class="card-horizontal">
                                                            <div class="card-body">
                                                                <h4 class="card-title">{{$data->scan->lab->en_name ?? ''}} - scan</h4>
                                                                <h6 class="mb-10">{{$data->scan->en_name}}</h6>
                                                                <p class="card-text mb-10">{{$data->scan->en_desc}}.</p>
                                                                <h6>Price:{{$data->scan->original_cost-(($data->scan->original_cost * $data->scan->discount_pct)/100) }} LE</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

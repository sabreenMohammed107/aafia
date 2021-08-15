@extends('layout.web')
@section('content')


<!-- start banner Area -->
<section class="banner-area relative about-banner details-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="mb-10 text-white">We Care for Your Health</h1>
                <h2 class="text-white">Orders Details</h2>
                <p class="text-white link-nav"><a href="#">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Orders </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Order Details</a></p>
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
</section>


<!-- Start offered-service Area -->
<section class="offered-service-area dep-offred-service pt-20" style="background-color:#f9f9ff">
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

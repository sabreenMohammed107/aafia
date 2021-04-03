@extends('admin.adminLayout.main')



@section('crumb')

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                                <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                    <li>
                                        <a href="index.html"> Home </a><span class="bread-slash"> / </span>
                                    </li>
                                    <li>
                                        <a href="labs.html"> Labs </a><span class="bread-slash"> / </span>
                                    </li>
                                    <li>
                                        <span class="bread-blod"> Lab Edit </span>
                                    </li>
                                </ul>
                            </div>
</div>

@endsection
@section('content')
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15" style="background-repeat: repeat;background-image: url(img/green-01.png);">
    <div class="container">
        <form action="{{route('admin.update',$lab->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @method('PUT')
            <div class="row res-ltr">




                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="{{ asset('uploads')}}/{{$lab->logo}}" alt="" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">

                                <div class="file-button" style="background-color: transparent;">

                                    <input type="file" name="logo" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Lab Data </h1>
                            </div>
                        </div>
                    <hr>
                        <div class="sparkline16-graph">
                            <div class="date-picker-inner" style="text-align:left">

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Lab En Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->en_name}}" name="en_name" class="form-control" placeholder="lab_En_Name">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Lab Ar Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->ar_name}}" name="ar_name" class="form-control" placeholder="lab_Ar_Name">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>En Slogan</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->en_slogan}}" name="en_slogan" class="form-control" placeholder="En Slogan">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Ar Slogan</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->ar_slogan}}" name="ar_slogan" class="form-control" placeholder="Ar Slogan">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Overview</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->overview}}" name="overview" class="form-control" placeholder="Overview">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Description</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <textarea class="form-control" value="{{$lab->description}}" placeholder="enter notes" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" value="{{$lab->phone}}" name="phone" class="form-control" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->address}}" name="address" class="form-control" placeholder="address">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>contact person</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" value="{{$lab->contact_person}}" name="contact_person" class="form-control" placeholder="contact person">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>contact person Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" value="{{$lab->contact_person_mobile}}" name="contact_person_mobile" class="form-control" placeholder="contact person Mobile">
                                    </div>
                                </div>
                                <div>

                                    <label>Lab Status</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio1" value="1" @if($lab->active == 1) checked @endif > Active
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio3" value="0"  @if($lab->active == 0) checked @endif > Not Active
                                    </label>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center " >

            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15" style="background-color: #77C30C;">Save</button>
                <a href="{{route('admin.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" style="background-color: #77C30C;">Back</a>
                <!-- <a href="labs.html" class="btn btn-primary waves-effect waves-light mg-b-15" style="background-color: #77C30C;">Save</a> -->

            </div>
        </form>
    </div>
</div>

@endsection
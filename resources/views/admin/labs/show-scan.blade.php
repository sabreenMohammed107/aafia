@extends('admin.adminLayout.main')



@section('crumb')

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <ul class="breadcome-menu pull-left" style="direction: ltr;">
                <li>
                    <a href="{{ url('/admin') }}"> Home </a><span class="bread-slash"> / </span>
                </li>
                <li>
                    <a href="{{ url('/admin') }}"> Labs </a><span class="bread-slash"> / </span>
                </li>
                <li>
                    <span class="bread-blod"> Scan </span>
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


                                                <div class="modal-body">
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Scan En Name</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <input type="text" name="en_name" readonly class="form-control"
                                                                placeholder="Scan_En_Name" value="{{$row->en_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Scan Ar Name</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <input type="text" name="ar_name" readonly class="form-control"
                                                                placeholder="Scan_Ar_Name" value="{{$row->ar_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Scan En Desc</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <input type="text" name="en_desc" readonly class="form-control"
                                                                placeholder="Scan En Desc" value="{{$row->en_desc}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Scan Ar Desc</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <input type="text" name="ar_desc" readonly class="form-control"
                                                                placeholder="Scan Ar Desc" value="{{$row->ar_desc}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Scan Cost</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <input type="number" name="original_cost" readonly class="form-control"
                                                                placeholder="Scan_original_cost" value="{{$row->original_cost}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Discount Pct</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <input type="number" name="discount_pct" readonly class="form-control"
                                                                placeholder="discount_pct" value="{{$row->discount_pct}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group data-custon-pick" style="text-align:left">
                                                        <label>Notes</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <textarea class="form-control" readonly placeholder="enter notes"
                                                                name="notes">{{$row->notes}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div>

                                                        <label>Scan Status</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="active" disabled id="AnalisysinlineRadio1"
                                                                value="1" @if($row->active == 1) checked @endif>
                                                            Active
                                                        </label>

                                                        <label class="radio-inline">
                                                            <input type="radio" name="active" disabled id="AnalisysinlineRadio3"
                                                                value="0" @if($row->active != 1) checked @endif> Not Active
                                                        </label>


                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"
                                                        style="background-color: #77C30C;" onclick="location.href='{{ url('lab-scan',$row->lab_id) }}'">Close</button>

                                                </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

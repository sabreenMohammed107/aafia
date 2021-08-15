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


                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright ">
                                        <table class="table-striped col-sm-12" id="table" data-toggle="table"
                                            data-pagination="true" data-search="true" data-show-columns="true"
                                            data-show-pagination-switch="true" data-show-refresh="true"
                                            data-key-events="true" data-resizable="false" data-cookie="true"
                                            data-cookie-id-table="saveId" data-show-export="true"
                                            data-click-to-select="true" data-toolbar="#toolbar" style="direction:ltr;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>order_no</th>
                                                    <th>order_date</th>
                                                    <th>total_amount</th>
                                                    <th>order_status</th>
                                                    <th>patient_name</th>
                                                    <th>visit_date</th>
                                                    <th>v_from</th>
                                                    <th>v_to</th>
                                                    <th>option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $index => $row)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $row->order_no }}</td>
                                                        <td>{{ date('d-m-Y', strtotime($row->order_date)) }}</td>

                                                        <td>{{ $row->total_amount }}</td>


                                                        <td>
                                                            @if($row->order_status_id==103)
                                                            Canceled

                                                            @elseif($row->order_status_id==102)
                                                            Succeed

                                                            @elseif($row->order_status_id==101)
                                                            In Progress
                                                            @else
                                                            <span></span>

                                                            @endif
                                                        </td>


                                                        <td>{{ $row->patient->user->name ?? '' }}</td>
                                                        <td>{{date('d-m-Y', strtotime($row->visit_date))}}</td>
                                                        <td>{{ $row->v_from }}</td>

                                                        <td>
                                                            {{ $row->v_to }}
                                                        </td>

                                                        <td>

                                                            <a href="{{ route('analysis-status.edit', $row->id) }}"
                                                                class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                                    aria-hidden="true"></i></a>

                                                        </td>
                                                    </tr>

                                                @endforeach



                                            </tbody>

                                        </table>
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

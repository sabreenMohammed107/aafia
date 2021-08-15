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
                                        <span class="bread-blod"> Analysis </span>
                                    </li>
                                </ul>
                            </div>
</div>

@endsection
@section('content')

<div class="container" >
    <div class="row">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin-top: 25px;" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list backbutton">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm"
                                data-toggle="modal" data-target="#myanalisys"
                                style="background-color: #77C30C;height: 50px;font-size: 25px;">
                                New Analisys
                            </button>


                            <div class="sparkline13-graph">
                                <div
                                    class="datatable-dashv1-list custom-datatable-overright ">
                                    <table class="table-striped col-sm-12"
                                        id="table" data-toggle="table"
                                        data-pagination="true" data-search="true"
                                        data-show-columns="true"
                                        data-show-pagination-switch="true"
                                        data-show-refresh="true"
                                        data-key-events="true"
                                        data-resizable="false" data-cookie="true"
                                        data-cookie-id-table="saveId"
                                        data-show-export="true"
                                        data-click-to-select="true"
                                        data-toolbar="#toolbar"
                                        style="direction:ltr;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Analisys En Name</th>
                                                <th>Analisys En Desc</th>
                                                <th>Analisys Original Cost</th>
                                                <th>Discount PCT</th>
                                                <th>active</th>
                                                <th>option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($analysis as $index => $row)
                                            <tr>
                                                <td>{{ $index +1 }}</td>

                                                <td>{{ $row->en_name }}</td>

                                                <td>{{ $row->en_desc }}</td>


                                                <td>{{ $row->original_cost }}</td>


                                                <td>{{ $row->discount_pct }}</td>

                                                <td>@if ($row->active == 1)
                                                    Active
                                                @else
                                                  Not Active
                                                @endif</td>

                                                <td>
                                                    <a href="{{ route('analysis.show', $row->id) }}"  class="pd-setting-ed"><i
                                                        class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                                    <a href="{{ route('analysis.edit', $row->id) }}"  class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                        <a href="#"  onclick="destroy('this Analysis','{{$row->id}}')" class="pd-setting-ed"><i
                                            class="fa fa-trash-o"
                                            aria-hidden="true"></i></a>
                                         <form id="delete_{{$row->id}}" action="{{ route('analysis.destroy', $row->id) }}"  method="POST" style="display: none;">
									@csrf
									@method('DELETE')
									<button type="submit" value=""></button>
									</form>


                                                </td>
                                            </tr>

                                            @endforeach



                                        </tbody>

                                    </table>
                                </div>
                            </div>



                                <!-- Modal -->
                                <div class="modal fade" id="myanalisys" tabindex="-1"
                                role="dialog" aria-labelledby="myanalisys">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title"
                                                id="myanalisys">New Analisys
                                            </h4>
                                        </div>
                                        <form action="{{route('analysis.store') }}" method="POST">
@csrf
<input type="hidden" name="lab_id" value="{{$lab_id}}" >
                                            <div class="modal-body">
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Analisys En Name</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <input type="text"
                                                            name="en_name"
                                                            class="form-control"
                                                            placeholder="Analisys_En_Name">
                                                    </div>
                                                </div>
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Analisys Ar Name</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <input type="text"
                                                            name="ar_name"
                                                            class="form-control"
                                                            placeholder="Analisys_Ar_Name">
                                                    </div>
                                                </div>
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Analisys En Desc</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <input type="text"
                                                            name="en_desc"
                                                            class="form-control"
                                                            placeholder="Analisys En Desc">
                                                    </div>
                                                </div>
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Analisys Ar Desc</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <input type="text"
                                                            name="ar_desc"
                                                            class="form-control"
                                                            placeholder="Analisys Ar Desc">
                                                    </div>
                                                </div>
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Analisys Cost</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <input type="number"
                                                            name="original_cost"
                                                            class="form-control"
                                                            placeholder="analisys_original_cost">
                                                    </div>
                                                </div>
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Discount Pct</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <input type="number"
                                                            name="discount_pct"
                                                            class="form-control"
                                                            placeholder="discount_pct">
                                                    </div>
                                                </div>
                                                <div class="form-group data-custon-pick"
                                                    style="text-align:left">
                                                    <label>Notes</label>
                                                    <div
                                                        class="input-mark-inner mg-b-22">
                                                        <textarea
                                                            class="form-control"
                                                            placeholder="enter notes"
                                                            name="notes"></textarea>
                                                    </div>
                                                </div>
                                                <div>

                                                    <label>Analisys Status</label>
                                                    <label class="radio-inline">
                                                        <input type="radio"
                                                            name="active"
                                                            id="AnalisysinlineRadio1"
                                                            value="1" checked>
                                                        Active
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input type="radio"
                                                            name="active"
                                                            id="AnalisysinlineRadio3"
                                                            value="0"> Not Active
                                                    </label>


                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="btn btn-default"
                                                    data-dismiss="modal"
                                                    style="background-color: #77C30C;">Close</button>
                                                <button type="submit"
                                                    class="btn btn-primary"
                                                    style="background-color: #77C30C;">Add
                                                    Analisys</button>
                                            </div>


                                        </form>

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

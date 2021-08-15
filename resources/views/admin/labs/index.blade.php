@extends('admin.adminLayout.main')



@section('crumb')

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                                <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                    <li>
                                        <a href="{{ url('/admin') }}"> Home </a><span class="bread-slash"> / </span>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin') }}"> Labs </a>
                                    </li>

                                </ul>
                            </div>
</div>

@endsection
@section('content')
<div class="container-fluid" >
			<div class="about-area2 section-padding40 wantToWork-area section-bg3"  data-background="img/gallery/section_bg01.png" >
				<div class="container">
					<div class="row align-items-center" style="margin-bottom: 20px;">
						<div class="col-lg-6 col-md-12" >
							<!-- about-img -->
							<div class="about-img">
								<img src="{{ asset('uploads')}}/{{$lab->logo}}" alt="" style="background-size: cover;height: 300px!important;">

							</div>

						</div>
						<div class="col-lg-6 col-md-12 " >
							<div class="about-caption">
								<!-- Section Tittle -->
								<div class="section-tittle mb-35">
									<h2>{{$lab->en_name}}</h2>
								</div>
								<p class="pera-top mb-40"> <b style="font-weight: 800;">Lab Slogan :</b>{{$lab->en_name}} </p>
								<p class="pera-bottom mb-30"><b style="font-weight: 800;">Lab overview :</b> {{$lab->overview}}  </p>
								<p class="pera-bottom mb-30"><b style="font-weight: 800;">Lab Description :</b> {{$lab->description}} </p>

								<div class="icon-about backbutton">

									<a href="{{ url('lab-analysis',$lab->id) }}" class="col-sm-3  " title="Analisys"><img src="{{ asset('adminasset/img/icon/003-analysis.svg')}}" alt="" class=" mr-20" style="width: 75px;height:75px;background-color: #57C65D;padding:15px;border-radius: 15px;"></button></a>
									<a href="{{ route('admin.edit',$lab->id) }}"  class="col-sm-3  " title="Edit"><img src="{{ asset('adminasset/img/icon/001-edit.svg')}}" alt="" style="width: 75px;height:75px;background-color: #57C65D;padding: 15px;border-radius: 15px;"></button></a>
									<a href="{{ url('lab-scan',$lab->id) }}"  class="col-sm-3  " title="Scans"><img src="{{ asset('adminasset/img/icon/002-scanner.svg')}}" alt="" style="width: 75px;height:75px;background-color: #57C65D;padding: 15px;border-radius: 15px;"></button></a>

							 	</div>
						 	</div>
					 	</div>

				 	</div>
				 </div>
			</div>

		</div>
@endsection

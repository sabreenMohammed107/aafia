	<!-- Start Left menu area -->
	<div class="left-sidebar-pro">
		<nav id="sidebar" class="">
			<div class="sidebar-header" style="padding:15px" >
				<a href="{{ url('/admin') }}" class="mainlogot"><img class="main-logo " src="{{ asset('adminasset/img/logo/logo.png')}}" alt="" height="60px" />AFIA</a>
				<strong><a href="{{ url('/admin') }}"><img src="{{ asset('adminasset/img/logo/logosn.png')}}" alt="" /></a></strong>
			</div>
		</nav>
	</div>
	<!-- End Left menu area -->
	<div class="all-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="logo-pro" style="padding:15px" >
						<a href="{{ url('/admin') }}" class="mainlogot"><img class="main-logo " src="{{ asset('adminasset/img/logo/logo.png')}}" alt="cccc"  height="60px" > AFIA</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-advance-area">
			<div class="header-top-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="header-top-wraper">
								<div class="row">

									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right"
										style="direction: rtl;">
										<div class="header-right-info">
											<ul class="nav navbar-nav mai-top-nav header-right-menu">


												<!-- جزء الرسايل -->

												<!-- <li class="nav-item dropdown">

												</li> -->
										<!-- جزء الاشعارات -->

										<!-- <li class="nav-item">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
												class="nav-link dropdown-toggle"><i class="educate-icon educate-bell"
													aria-hidden="true"></i><span class="indicator-nt"></span></a>
											<div role="menu" class="notification-author dropdown-menu animated zoomIn">
												<div class="notification-single-top">
													<h1>Notification</h1>
												</div>
												<ul class="notification-menu">
													<li>
														<a href="#">
															<div class="notification-content">
																<span class="notification-date">16 April</span>
																<h2>name of noty</h2>
																<p>Lorem ipsum, dolor sit amet consectetur adipisicing
																	elit. At itaque commodi praesentium</p>

															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="notification-content">
																<span class="notification-date">16 April</span>
																<h2>name of noty</h2>
																<p>Lorem ipsum, dolor sit amet consectetur adipisicing
																	elit. At itaque commodi praesentium</p>

															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="notification-content">
																<span class="notification-date">16 April</span>
																<h2>name of noty</h2>
																<p>Lorem ipsum, dolor sit amet consectetur adipisicing
																	elit. At itaque commodi praesentium</p>

															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="notification-content">
																<span class="notification-date">16 April</span>
																<h2>name of noty</h2>
																<p>Lorem ipsum, dolor sit amet consectetur adipisicing
																	elit. At itaque commodi praesentium</p>

															</div>
														</a>
													</li>
												</ul>
												<div class="notification-view">
													<a href="#">View All Notification</a>
												</div>
											</div>
										</li> -->
										<!-- جزء معلومات المستخدم والدروب توجيل -->
										<li class="nav-item">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
												class="nav-link dropdown-toggle">
												<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
												<span class="admin-name">Welcome  @guest User @else {{ Auth::user()->name }}  @endguest</span>
												<img src="{{ asset('adminasset/img/1.jpg')}}" alt="" />
											</a>
											<ul role="menu"
												class="dropdown-header-top author-log dropdown-menu animated zoomIn"
												style="text-align:left">
                                                @guest
                            <li>
                                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li >
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li >

                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </li>
                        @endguest


											</ul>
										</li>



										</ul>
									</div>
								</div>




								<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 pull-left" style="direction: rtl;">
									<div class="header-top-menu tabl-d-n">
										<ul class="nav navbar-nav mai-top-nav">
											<li class="nav-item dropdown res-dis-nn">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
													class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i
															class="fa fa-angle-down"></i></span> Lab </a>
												<div role="menu" class="dropdown-menu animated zoomIn">
                                                    @guest


                                                    @else

                                                    <?php
                                                    $lab = App\Models\Lab::where('id', '=', Auth::user()->lab_id)->first();
                                                  ?>
                                                    <a href="{{ route('admin.edit',$lab->id) }}" class="dropdown-item">Edit Lab</a>
													<a href="{{ url('lab-scan',$lab->id) }}" class="dropdown-item">Scans</a>
													<a href="{{ url('lab-analysis',$lab->id) }}" class="dropdown-item">Analysis</a>

                                                     @endguest

												</div>
											</li>
											<li class="nav-item dropdown res-dis-nn">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
													class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i
															class="fa fa-angle-down"></i></span>Orders </a>
												<div role="menu" class="dropdown-menu animated zoomIn">

                                                    @guest


                                                    @else

                                                    <?php
                                                    $lab = App\Models\Lab::where('id', '=', Auth::user()->lab_id)->first();
                                                  ?>
                                                    <a href="{{ route('analysis-orders',$lab->id) }}" class="dropdown-item">Analysis Orders</a>
                                                    <a href="{{ route('scan-orders',$lab->id) }}" class="dropdown-item">Scan Orders</a>

                                                     @endguest

												</div>
											</li>
											{{-- <li class="nav-item dropdown res-dis-nn">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
													class="nav-link dropdown-toggle"> <span
														class="angle-down-topmenu"><i
															class="fa fa-angle-down"></i></span>Setup</a>
												<div role="menu" class="dropdown-menu animated zoomIn">
													<a href="branch.html" class="dropdown-item">Branch</a>
													<a href="Cities.html" class="dropdown-item">Cities</a>
													<a href="labs.html" class="dropdown-item">Labs</a>
													<a href="nationalities.html" class="dropdown-item">Nationalities</a>
													<a href="Reach_Source.html" class="dropdown-item">Reach Source</a>
													<a href="Faculty.html" class="dropdown-item">Faculty </a>

													<a href="Student_Status.html" class="dropdown-item">Student status
													</a>


												</div>
											</li>
											<li class="nav-item dropdown res-dis-nn">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
													class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i
															class="fa fa-angle-down"></i></span> Training </a>
												<div role="menu" class="dropdown-menu animated zoomIn">

													<a href="Courses.html" class="dropdown-item">Courses</a>
													<a href="Trainers.html" class="dropdown-item">Trainers</a>
													<a href="Rounds.html" class="dropdown-item">Rounds</a>

												</div>
											</li>
											<li class="nav-item dropdown res-dis-nn">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
													class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i
															class="fa fa-angle-down"></i></span> Stock </a>
												<div role="menu" class="dropdown-menu animated zoomIn">
													<a href="#" class="dropdown-item">Stock</a>
													<a href="#" class="dropdown-item">Stock</a>
													<a href="#" class="dropdown-item">Stock</a>
													<a href="#" class="dropdown-item">Stock</a>
													<a href="#" class="dropdown-item">Stock</a>
												</div>
											</li>
											<li class="nav-item dropdown res-dis-nn">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
													class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i
															class="fa fa-angle-down"></i></span> Home </a>
												<div role="menu" class="dropdown-menu animated zoomIn">
													<a href="#" class="dropdown-item">Home </a>
													<a href="#" class="dropdown-item">Home </a>
													<a href="#" class="dropdown-item">Home </a>
													<a href="#" class="dropdown-item">Home </a>
													<a href="#" class="dropdown-item">Home </a>
												</div>
											</li> --}}
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row" style="direction:rtl">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul class="mobile-menu-nav">
									<li>
										<a data-toggle="collapse" data-target="#Charts" href="#">Home <span
												class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul class="collapse dropdown-header-top">
											<li><a href="#" class="dropdown-item">Home</a></li>
											<li><a href="#" class="dropdown-item">Home</a></li>
											<li><a href="#" class="dropdown-item">Home</a></li>
											<li><a href="#" class="dropdown-item">Home</a></li>
											<li><a href="#" class="dropdown-item">Home</a></li>
										</ul>
									</li>
									<li>
										<a data-toggle="collapse" data-target="#demoevent" href="#">Stock <span
												class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demoevent" class="collapse dropdown-header-top">
											<li><a href="#" class="dropdown-item">Stock</a></li>
											<li><a href="#" class="dropdown-item">Stock</a></li>
											<li><a href="#" class="dropdown-item">Stock</a></li>
											<li><a href="#" class="dropdown-item">Stock</a></li>
											<li><a href="#" class="dropdown-item">Stock</a></li>
										</ul>
									</li>
									<li>
										<a data-toggle="collapse" data-target="#demopro" href="#">Finance <span
												class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demopro" class="collapse dropdown-header-top">
											<li><a href="#" class="dropdown-item">Finance</a></li>
											<li><a href="#" class="dropdown-item">Finance</a></li>
											<li><a href="#" class="dropdown-item">Finance</a></li>
											<li><a href="#" class="dropdown-item">Finance</a></li>
											<li><a href="#" class="dropdown-item">Finance</a></li>
										</ul>
									</li>
									<li>
										<a data-toggle="collapse" data-target="#democrou" href="#">Profile<span
												class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="democrou" class="collapse dropdown-header-top">
											<li><a href="User_profile.html" class="dropdown-item">User Profile</a></li>


										</ul>
									</li>
									<li>
										<a data-toggle="collapse" data-target="#demolibra" href="#"> setup <span
												class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demolibra" class="collapse dropdown-header-top">
											<li><a href="branch.html" class="dropdown-item">Branch</a></li>
											<li><a href="Cities.html" class="dropdown-item">Cities</a></li>
											<li><a href="labs.html" class="dropdown-item">Labs</a></li>
											<li><a href="nationalities.html" class="dropdown-item">Nationalities</a>
											</li>
											<li><a href="Reach_Source.html" class="dropdown-item">Reach Source</a></li>
											<li><a href="Faculty.html" class="dropdown-item">Faculty</a></li>
											<li><a href="Student_Status.html" class="dropdown-item">Student status</a>
											</li>




										</ul>
									</li>
									<li>
										<a data-toggle="collapse" data-target="#Charts" href="#">Users <span
												class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul class="collapse dropdown-header-top">
											<li><a href="Users.html" class="dropdown-item">Users </a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu end -->

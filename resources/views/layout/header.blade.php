
		  <header id="header">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-left">
			  				<a href=""><i class="fa fa-facebook social"></i></a>
				  			<a href=""><i class="fa fa-twitter social"></i></a>
							<a href=""><i class="fa fa-youtube social"></i></a>				
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a href=""><i class="fa fa-phone"></i> <span class="text"><span class="text"> +02 012 3654 896</span></span></a>
						<a href=""><i class="fa fa-envelope"></i> <span class="text"><span class="text"> support@medical.com</span></span></a>
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"class="logo"><img src="{{ asset('webasset/img/logo.png')}}" alt="" title="" />Aafia</a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{ url('/') }}">Home</a></li>
			          <li><a href="{{ url('/about') }}">About</a></li>
			          <li><a href="#">Services</a></li>
			          <li><a href="#">News</a></li>						          					          		          
			          <li><a href="{{ url('/contact') }}">Contact Us</a></li>
						<li class="menu-has-children">
							<a href=""><img src="{{ asset('webasset/img/avatar3.png')}}" style="margin-top:-5px" />Welcome  @guest User @else {{ Auth::user()->name }}  @endguest</a>
							<ul>
								
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
                        
					  <li>
                      @guest
                      <a href="{{ route('login') }}" class="btn  btn-danger check-top">Check Out</a></li>
                        @else
		
                        <a href="{{ route('checkout') }}" class="btn  btn-danger check-top">Check Out</a></li>
                            </li>
                        @endguest
                    
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!--<link rel="shortcut icon" href="img/fav.png">-->
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Medical</title>

    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{ asset('webasset/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/Bootstrap v4.4.1.css')}}">
    <link rel="stylesheet" href="{{ asset('webasset/css/login.css')}}">

</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{ asset('webasset/img/register.jpg')}}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body card-body2">
                            <div class="brand-wrapper">
                                <h3><img src="{{ asset('webasset/img/logo.png')}}" alt="logo" class="logo">Salamtak</h3>
                            </div>
                            <p class="">Get sarted with your free account</p>

                            <form method="POST" style="min-width:100%" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input id="name" type="text" class="form-control mg-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control mg-0" id="inputEmail3" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                    <input id="email" type="email" class="form-control mg-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                    <input id="password" type="password" class="form-control  mg-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <button type="submit" class="btn btn-block login-btn mb-4">
                                    {{ __('Register') }}
                                </button>

                                
                            </form>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('webasset/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('webasset/js/popper.min.js')}}"></script>
    <script src="{{ asset('webasset/js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('webasset/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('webasset/js/easing.min.js')}}"></script>
    <script src="{{ asset('webasset/js/hoverIntent.js')}}"></script>
    <script src="{{ asset('webasset/js/superfish.min.js')}}"></script>
    <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
    <script src="{{ asset('webasset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('webasset/js/jquery.tabs.min.js')}}"></script>
    <script src="{{ asset('webasset/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('webasset/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('webasset/js/mail-script.js')}}"></script>
    <script src="{{ asset('webasset/js/main.js')}}"></script>
    <script src="{{ asset('webasset/js/custom.js')}}"></script>
</body>

</html>
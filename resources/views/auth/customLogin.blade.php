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
                    <div class="col-md-7">
                        <img src="{{ asset('webasset/img/login.png')}}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <h3><img src="{{ asset('webasset/img/logo.png')}}" alt="logo" class="logo">Salamtak</h3>
                            </div>
                            <p class="login-card-description">Sign into your account</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                            </form>
                            <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <p class="login-card-footer-text">Don't have an account?

                                @if (Route::has('register'))

                                <a href="{{ route('register') }}" class="text-reset">
                                    Register here</a>
                                @endif
                            </p>
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
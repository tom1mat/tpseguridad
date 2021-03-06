<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<base href="{{ asset('public/assets') }}">
<head>
    <meta charset="utf-8">

    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="http://www.iconarchive.com/download/i82447/medicalwp/medical/Health-Sign-red.ico">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Login Content -->
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-50 animated fadeIn">
                    <!-- Login Title -->
                    <div class="text-center">
                        <i class="fa fa-2x fa-plus-square text-primary"></i>
                        <p class="text-muted push-15-t">CONSULTORIO | REGISTRARSE</p>
                    </div>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('usuario'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('usuario') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('dni'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dni') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('rep-password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rep-password') }}</strong>
                        </span>
                    @endif
                    {{--<form class="js-validation-login form-horizontal push-30-t" action="base_pages_dashboard.html" method="post">--}}
                    <form class="js-validation-login form-horizontal push-30-t" method="POST" action="{{ route('register') }}" aria-label="{{ __('register') }}">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary floating">
                                <input id="register-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                {{--<input class="form-control" type="text" id="login-username" name="login-username">--}}
                                <label for="register-email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="form-material form-material-primary floating">
                                <input id="register-name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                {{--<input class="form-control" type="text" id="login-username" name="login-username">--}}
                                <label for="register-name">Nombre y Apellido</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-material form-material-primary floating">
                                <input id="register-dni" type="text" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" value="{{ old('dni') }}" required>
                                {{--<input class="form-control" type="password" id="login-password" name="login-password">--}}
                                <label for="register-dni">DNI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="form-material form-material-primary floating">
                                <input id="register-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                {{--<input class="form-control" type="password" id="login-password" name="login-password">--}}
                                <label for="register-password">Contraseña</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-material form-material-primary floating">
                                <input id="register-rep-password" type="password" class="form-control{{ $errors->has('rep-password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                {{--<input class="form-control" type="password" id="login-password" name="login-password">--}}
                                <label for="register-rep-password">Confirmar Contraseña</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group push-30-t">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <button class="btn btn-sm btn-block btn-primary" type="submit">Registrarme</button>
                        </div>
                    </div>
                    </form>
                    <!-- END Login Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="pulldown push-20-t text-center animated fadeInUp">
    <small class="text-muted">DV &copy; 2018</small>
</div>
<!-- END Login Footer -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_pages_login.js"></script>
</body>
</html>

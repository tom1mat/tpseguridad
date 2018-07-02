@php $loggedUser = \Illuminate\Support\Facades\Auth::user(); @endphp
<!DOCTYPE html>
<html>
<head>
    <base href="{{ asset('public/assets') }}">
    @include('partials.import-headers')
    @yield('css')
</head>

<body>
<div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
    @include('partials.sidebar')
    @include('partials.header')
    <main id="main-container">
        <div class="content animated fadeIn">
            @include('partials.notifications')
            <div class="row" style="margin-top: 25px;">
                @if(!is_null($loggedUser) && strcmp($_SERVER["REQUEST_URI"], "/tpseguridad/"))
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 12px; color:green;">
                        <h1 style="color: black;">{{ $loggedUser->name }}</h1>
                        <h2 style="font-size: 20px;">{{ $loggedUser->role->role }}</h2>
                        <h3 style="font-size: 20px; color: #9d9de0;">{{ $loggedUser->email }}</h3>
                    </div>
                </div>
                @endif
                @yield('main')
            </div>
        </div>
    </main>

    <footer id="page-footer" class="bg-white">
        <div class="content">
            <!-- Copyright Info -->
            <div class="font-s12 push-20 clearfix">
                <div class="pull-right">
                    By <a href="https://davinci.edu.ar/" class="orange">Tomás Mateo | Franco Petrone | Agustín Fontova</a>
                </div>
                 </div>
            <!-- END Copyright Info -->
        </div>
    </footer>
</div>
</body>
<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
    });

</script>
@yield('js')
</html>

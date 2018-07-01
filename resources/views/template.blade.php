<!DOCTYPE html>
<html>
<head>
    <base href="{{ asset('public/assets') }}">
    @include('partials.import-headers')
    @yield('css')
</head>

<body>
<div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
    @include('partials.topbar')
    @include('partials.sidebar')
    @include('partials.header')
    <main id="main-container">
        <div class="content">
            <div class="row animated fadeIn" style="margin-top: 25px;">
                @include('partials.notifications')
                @yield('main')
            </div>
        </div>
    </main>

    <footer id="page-footer" class="bg-white">
        <div class="content">
            <!-- Copyright Info -->
            <div class="font-s12 push-20 clearfix">
                <div class="pull-right">
                    Powered by <a href="http://www.bits0.com" class="orange">Bits0.com</a>
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

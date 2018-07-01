<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <!-- Header Navigation Right -->
    <ul class="nav-header pull-right" style="margin-right: -12px;">
        @if($user = Auth::user())
            @if(strpos(\Request::route()->getName(),'panel') !== false)
                @else
        <li>
            <a href="{{ route('panel.dashboard') }}" class="btn btn-default" type="button">
                Back to panel <i class="si si-logout"></i>
            </a>
        </li>
            @endif
        <li>
            <div class="btn-group" >
                <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                    <span>{{ Auth::user()->name  }}</span>
                    <img src="assets/img/avatars/avatar10.jpg" alt="Avatar">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">Actions</li>
                    <li>
                        <a tabindex="-1" href="{{ route('logout') }}">
                            <i class="si si-logout pull-right"></i>Log out
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        @else
            <li>
                <a href="{{ route('login') }}" class="btn btn-default" type="button">
                    Log In <i class="si si-login"></i>
                </a>
            </li>
        @endif
        <li>
        </li>
    </ul>
    <!-- END Header Navigation Right -->

    <!-- Header Navigation Left -->
    <ul class="nav-header pull-left">
        {{--<li class="hidden-md hidden-lg">--}}
            {{--<!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->--}}
            {{--<button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">--}}
                {{--<i class="fa fa-navicon"></i>--}}
            {{--</button>--}}
        {{--</li>--}}
        {{--<li class="hidden-xs hidden-sm">--}}
            {{--<!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->--}}
            {{--<button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">--}}
                {{--<i class="fa fa-ellipsis-v"></i>--}}
            {{--</button>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<!-- Opens the Apps modal found at the bottom of the page, before including JS code -->--}}
            {{--<button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">--}}
                {{--<i class="si si-grid"></i>--}}
            {{--</button>--}}
        {{--</li>--}}
        {{--<li class="visible-xs">--}}
            {{--<!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->--}}
            {{--<button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">--}}
                {{--<i class="fa fa-search"></i>--}}
            {{--</button>--}}
        {{--</li>--}}
        {{--<li class="js-header-search header-search">--}}
            {{--<form class="form-horizontal" action="base_pages_search.html" method="post">--}}
                {{--<div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">--}}
                    {{--<input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">--}}
                    {{--<span class="input-group-addon"><i class="si si-magnifier"></i></span>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</li>--}}
    </ul>
    <!-- END Header Navigation Left -->
</header>
<!-- END Header -->
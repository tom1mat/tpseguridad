<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right visible-xs visible-sm" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <a class="h5 text-white">
                    <!--<i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">Grupo Rodríguez</span>-->
                    <a href="{{ route('panel.dashboard') }}">
                        <img src="{{ url('public/images/ecatalog-logo-iso.png') }}" width="35px">
                        <img src="{{ url('public/images/ecatalog-logo-letra.png') }}" class="sidebar-mini-hide" height="45px">
                    </a>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content side-content-full">
                <ul class="nav-main">
                    <li class="open">
                        <a href="{{ route('panel.workflow.index') }}"><i style="margin-right: 15px;" class="fa fa-2x fa-cogs"></i><span class="sidebar-mini-hide">Workflow</span></a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->isAllowed(3))
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-barcode"></i><span class="sidebar-mini-hide">Skus</span></a>
                            <ul>
                                <li>
                                    <a href="{{ route('panel.skus.index') }}">View all skus</a>
                                </li>
                                <li>
                                    <a href="{{ route('panel.skus.create') }}">Create sku</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x fa-product-hunt"></i><span class="sidebar-mini-hide">Products</span></a>
                        <ul>
                            <li><a href="{{ route('panel.products.index') }}">View all products</a></li>
                            {{--<li><a href="{{ route('panel.products.create') }}">Create product</a></li>--}}
                        </ul>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->isAllowed(1))
                    {{--<li>--}}
                        {{--<a href="{{ route('panel.search.index') }}"><i class="fa fa-2x  fa-globe"></i><span class="sidebar-mini-hide">Search</span></a>--}}
                    {{--</li>--}}
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->isAllowed(4))
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-image"></i><span class="sidebar-mini-hide">Econtent</span></a>
                        <ul>
                            {{--<li>--}}
                                {{--<a href="{{ route('panel.econtents.index') }}">View econtents</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{ route('panel.econtents.create') }}">Request econtent</a>

                            </li>
                        </ul>
                    </li>
                    @endif
                    {{--<li>--}}
                        {{--<a href="{{ route('public.explore') }}"><i style="margin-right: 15px;" class="fa fa-2x  fa-columns"></i><span class="sidebar-mini-hide">Explore</span></a>--}}
                    {{--</li>--}}
                    @if(\Illuminate\Support\Facades\Auth::user()->isAllowed(1))
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-object-group"></i><span class="sidebar-mini-hide">Key Visuals</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('panel.keyvisuals.index') }}">View all key visuals</a>
                            </li>
                            <li>
                                <a href="{{ route('panel.keyvisuals.create') }}">Create Key Visual</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-trademark"></i><span class="sidebar-mini-hide">Brands</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('panel.brands.index') }}">View all brands</a>
                            </li>
                            <li>
                                <a href="{{ route('panel.brands.create') }}">Create brand</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if(\Illuminate\Support\Facades\Auth::user()->isAllowed(2))
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-shopping-basket"></i><span class="sidebar-mini-hide">Categories</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('panel.categories.index') }}">View all categories</a>
                            </li>
                            <li>
                                <a href="{{ route('panel.categories.create') }}">Create category</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('panel.help') }}"><i style="margin-right: 25px !important; margin-left: 5px !important;" class="fa fa-2x  fa-question"></i><span class="sidebar-mini-hide">Help</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"><i style="margin-right: 15px;" class="fa fa-2x  fa-power-off"></i><span class="sidebar-mini-hide">Log Out</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
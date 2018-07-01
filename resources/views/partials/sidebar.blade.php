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
                    <a >
                        <img  width="35px">
                        <img  class="sidebar-mini-hide" height="45px">
                    </a>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content side-content-full">
                <ul class="nav-main">
                    <li class="open">
                        <a ><i style="margin-right: 15px;" class="fa fa-2x fa-cogs"></i><span class="sidebar-mini-hide">Workflow</span></a>
                    </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-barcode"></i><span class="sidebar-mini-hide">Skus</span></a>
                            <ul>
                                <li>
                                    <a>View all skus</a>
                                </li>
                                <li>
                                    <a >Create sku</a>
                                </li>
                            </ul>
                        </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x fa-product-hunt"></i><span class="sidebar-mini-hide">Products</span></a>
                        <ul>
                            <li><a >View all products</a></li>
                            {{--<li><a href="{{ route('panel.products.create') }}">Create product</a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-image"></i><span class="sidebar-mini-hide">Econtent</span></a>
                        <ul>
                            <li>
                                <a >Request econtent</a>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-object-group"></i><span class="sidebar-mini-hide">Key Visuals</span></a>
                        <ul>
                            <li>
                                <a >View all key visuals</a>
                            </li>
                            <li>
                                <a>Create Key Visual</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-trademark"></i><span class="sidebar-mini-hide">Brands</span></a>
                        <ul>
                            <li>
                                <a >View all brands</a>
                            </li>
                            <li>
                                <a >Create brand</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-2x  fa-shopping-basket"></i><span class="sidebar-mini-hide">Categories</span></a>
                        <ul>
                            <li>
                                <a >View all categories</a>
                            </li>
                            <li>
                                <a >Create category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i style="margin-right: 25px !important; margin-left: 5px !important;" class="fa fa-2x  fa-question"></i><span class="sidebar-mini-hide">Help</span></a>
                    </li>
                    <li>
                        <a ><i style="margin-right: 15px;" class="fa fa-2x  fa-power-off"></i><span class="sidebar-mini-hide">Log Out</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
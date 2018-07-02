@php $user = \Illuminate\Support\Facades\Auth::user(); @endphp
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
                        <a ><i style="margin-right: 15px; color: #0f8496;" class="fa fa-2x fa-plus-square"></i><span class="sidebar-mini-hide">CONSULTORIO</span></a>
                    </li>
                    @if(!is_null($user))
                        {{-- PACIENTE --}}
                        @if($user->isAllowed(1))
                            <li>
                                <a href="{{ route('patient.shifts.index') }}"><i class="fa fa-2x fa-newspaper-o"></i><span class="sidebar-mini-hide">Mis Turnos</span></a>
                            </li>
                            <li>
                                <a href="{{ route('patient.shifts.create') }}"><i class="fa fa-2x fa-plus"></i><span class="sidebar-mini-hide">Nuevo Turno</span></a>
                            </li>
                        @endif
                        {{-- END PACIENTE --}}

                        @if($user->getUserRoleId() >= 2)
                            {{-- SECRETARIA --}}
                            @if($user->isAllowed(2))
                                <li>
                                    <a href="{{ route('secretary.users.index') }}"><i class="fa fa-2x fa-users"></i><span class="sidebar-mini-hide">Usuarios</span></a>
                                </li>
                            {{-- END SECRETARIA --}}
                            {{-- DOCTOR --}}
                            @elseif($user->isAllowed(3))
                                <li>
                                    <a href="{{ route('doctor.users.index') }}"><i class="fa fa-2x fa-users"></i><span class="sidebar-mini-hide">Pacientes</span></a>
                                </li>
                            {{-- END DOCTOR --}}

                            {{-- ADMIN --}}
                            @elseif($user->isAllowed(4))
                                <li>
                                    <a href="{{ route('admin.index') }}"><i class="fa fa-2x fa-users"></i><span class="sidebar-mini-hide">Usuarios</span></a>
                                </li>
                            @endif
                            {{-- END ADMIN --}}
                        @endif

                        {{-- ADMIN --}}
                        @if($user->isAllowed(4))
                            <li>
                                <a href="{{ route('admin.users.create') }}"><i class="fa fa-2x fa-user-plus"></i><span class="sidebar-mini-hide">Nuevo Usuario</span></a>
                            </li>
                        @endif
                        {{-- END ADMIN --}}

                        <li>
                            <a href="{{ route('faq') }}"><i style="margin-right: 25px !important; margin-left: 5px !important;" class="fa fa-2x fa-question"></i><span class="sidebar-mini-hide">FAQ</span></a>
                        </li>
                        @if($user->getUserRoleId() >= 1)
                            <li>
                                <a href="{{ route('logout') }}"><i style="margin-right: 15px;" class="fa fa-2x fa-sign-out"></i><span class="sidebar-mini-hide">Cerrar Sesión</span></a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="../login"><i class="fa fa-2x fa-sign-in"></i><span class="sidebar-mini-hide">Ingresar</span></a>
                        </li>
                        <li>
                            <a href="../register"><i class="fa fa-2x fa-user-o"></i><span class="sidebar-mini-hide">Registrarse</span></a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}"><i style="margin-right: 25px !important; margin-left: 5px !important;" class="fa fa-2x fa-question"></i><span class="sidebar-mini-hide">FAQ</span></a>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
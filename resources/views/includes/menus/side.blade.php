<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu bg-dark"> 
                <div class="pcoded-navigation-label" data-i18n="nav.category.navigation" style="color:aliceblue !important;">MENUS</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="/dashboard" class="waves-effect waves-dark" style="color:aliceblue !important;">
                            <span class="pcoded-micon"><i class="ti-home" style="color:aliceblue !important;"></i><b>D</b></span>
                            <span class="pcoded-mtext">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="f#" class="waves-effect waves-dark" style="color:aliceblue !important;">
                            <span class="pcoded-micon"><i class="ti-user" style="color:aliceblue !important;"></i><b>FC</b></span>
                            <span class="pcoded-mtext">USERS</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.permit') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-list" style="color:aliceblue !important;"></i><b>FC</b></span>
                            <span class="pcoded-mtext" style="color:aliceblue !important;">Registered Permit</span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li>
                </ul>
                {{-- <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="f#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-settings"></i><b>FC</b></span>
                            <span class="pcoded-mtext">Settings</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/permit" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                            <span class="pcoded-mtext">Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt ml-1 mr-3"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                            </span>
                        </a>
                    </li>
                </ul> --}}
            </div>
        </nav>
        <div class="pcoded-content">

            <!-- Page-header end -->

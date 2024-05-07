<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                     <div class="navbar-container container-fluid">
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <img src="{{ asset('admin/images/faq_man.png') }}" class="img-radius" alt="User-Profile-Image">
                                <span>Admin</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li class="waves-effect waves-light">
                                    <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                {{-- <li class="waves-effect waves-light">
                                    <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li> --}}
                                <li class="waves-effect waves-light">
                                    {{-- <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"> --}}
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                 <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </form>
                                    {{-- </a> --}}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
             </div>
        </nav>

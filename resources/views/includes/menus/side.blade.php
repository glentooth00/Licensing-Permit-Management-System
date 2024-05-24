<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link d-flex align-items-center">
        <img src="{{ asset('dist/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 me-2"
            style="opacity: .8">
        <span class="brand-text font-weight-light w-10 justify-center" style="font-size: 20px">Estancia LGU
            Business<br>and Licensing Permit
            <br>Information
            System</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/images/faq_man.png') }}" class="img-radius" alt="User-Profile-Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="fa fa-home mr-3 ml-1" aria-hidden="true"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-tie"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
            <a href="{{ route('admin.permit') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
               Registered Permit
              </p>
            </a> --}}
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i style='font-size:24px' class='far mr-3 ml-1'>&#xf2b9;</i>
                        <p>
                            Registered Permits

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.permit') }}" class="nav-link">
                                <i style="font-size:20px" class="fa ml-4">&#xf0f6; </i>
                                <p class="ml-2"> View Permits</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('business-permits.for-renewal') }}" class="nav-link">
                                <i style="font-size:20px" class="fa ml-4">&#xf0f6; </i>
                                <p class="ml-2"> Renew</p>
                            </a>
                        </li>
                        <!-- Other nav items -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('business-permits.archived') }}">
                                <i style="font-size:20px" class="fa ml-4">&#xf0f6; </i>
                                <p class="ml-2"> Archived</p>
                            </a>
                        </li>
                    </ul>
            </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>

</aside>

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
                {{-- <a href="#" class="d-block">Alexander Pierce</a> --}}
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon fa-solid fa-gauge-high"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-tie"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permit') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Registered Permit
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

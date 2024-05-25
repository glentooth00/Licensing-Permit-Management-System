<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <img src="{{ asset('dist/images/logo.png') }}" alt="AdminLTE Logo" width="60" class="img-circle">
            <br>
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
                <img src="{{ asset('admin/images/admin.png') }}" class="img-radius" alt="User-Profile-Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="fa fa-home mr-3 ml-1" aria-hidden="true"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                   <i class="fa-regular fa-folder-open nav-icon"></i>
                    <p>
                         Registered Permits
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.permit') }}" class="nav-link">
                            <i class="fa-solid fa-file-lines nav-icon"></i>
                            <p> View Permits</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('business-permits.for-renewal') }}" class="nav-link">
                            <i class="fa-solid fa-file-lines nav-icon"></i>
                            <p>Renew</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('business-permits.archived') }}" class="nav-link">
                            <i class="fa-solid fa-box-archive nav-icon"></i>
                            <p>Archived</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>

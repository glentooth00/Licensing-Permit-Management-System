  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Settings</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
             {{-- <a href="auth-normal-sign-in.html" class="dropdown-item"> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                    </a>
                </form>
            {{-- </a> --}}
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

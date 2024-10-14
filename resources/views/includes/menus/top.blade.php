  <!-- Navbar -->
  {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
                      <i class="fas fa-user mr-2"></i> Users
                  </a>
                  <div class="dropdown-divider"></div>
                  {{-- <a href="auth-normal-sign-in.html" class="dropdown-item"> --}}
  {{-- <form method="POST" action="{{ route('logout') }}">
      @csrf
      <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
          <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
      </a>
  </form> --}}
  {{-- </a> --}}
  {{-- </div>
  </li>
  </ul>
  </nav> --}}
  <!-- /.navbar -->


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Navbar left content -->

      <!-- Navbar right content -->
      <div class="dropdown ml-auto"> <!-- Add ml-auto class here -->
          <a class="dropdown-toggle" href="#" id="gearDropdown" role="button" aria-haspopup="true"
              aria-expanded="false">
              <i class="fa-solid fa-gear"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gearDropdown">
              <a class="dropdown-item" href="#">Settings</a>
              <hr>
              <div>
                  {{-- <a style="font-size: 14px;" class="dropdown-item" href="#">Maintenance
                  </a>
                  <a style="font-size: 14px;" class="dropdown-item" href="">Permit
                      Expiration
                  </a> --}}
                  <a style="font-size: 14px;" class="dropdown-item" href="{{ route('admin.permit.user') }}">User
                      Management</a>
                  <a style="font-size: 14px;" class="dropdown-item" href="{{ route('admin.permit.logs') }}">Activity
                      Logs</a>
                  <a style="font-size: 14px;" class="dropdown-item" href="{{ route('admin.permit.street') }}">Add
                      Streets</a>
                  <a style="font-size: 14px;" class="dropdown-item" href="{{ route('admin.permit.barangay') }}">Add
                      Barangay</a>

              </div>

              <hr>
              <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item" name="action" value="logout">Logout</button>
              </form>
          </div>
      </div>
  </nav>


  <style>
      .dropdown-menu {
          display: none;
          position: absolute;
          top: 100%;
          right: 0;
          z-index: 1000;
      }

      .dropdown.active .dropdown-menu {
          display: block;
      }
  </style>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
          const gearDropdown = document.getElementById("gearDropdown");
          const dropdown = document.querySelector(".dropdown");

          gearDropdown.addEventListener("click", function(event) {
              event.preventDefault();
              dropdown.classList.toggle("active");
          });

          // Close dropdown when clicking outside
          document.addEventListener("click", function(event) {
              if (!event.target.matches(".dropdown-toggle")) {
                  dropdown.classList.remove("active");
              }
          });

          // Prevent dropdown from closing when clicking inside
          dropdown.addEventListener("click", function(event) {
              event.stopPropagation();
          });
      });
  </script>

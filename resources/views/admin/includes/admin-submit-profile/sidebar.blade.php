<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Anticasting</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  {{-- <li class="nav-item active">
      <a class="nav-link" href="{{ route('users.dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li> --}}

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  {{-- <div class="sidebar-heading">
      Interface
  </div> --}}
  <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          {{--  <a class="nav-link" href="{{route('users.submitProfile')}}" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-user"></i>
              <span>Users</span>
          </a>  --}}
          <a class="nav-link" href="">
              <i class="fas fa-fw fa-user"></i>
              <span>Admin Profile</span>
          </a>
          {{--  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Submit Profile:</h6>
                  <a class="collapse-item" href="{{route('users.submitProfile')}}">Profile</a>
                     <a class="collapse-item" href="{{route('users.change-password')}}">ChangePassword</a>

              </div>
          </div>  --}}
      </li>

      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.logout') }}">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
          </a>
      </li>
 <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  <!-- Sidebar Message -->
</ul>
<!-- End of Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('Homepage') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('showusers') }}">
                    <i class="fas fa-user fa-tachometer-alt"></i>
                    <span>Users</span></a>
            </li>
          <hr class="sidebar-divider">
          <li class="nav-item ">
                <a class="nav-link" href="{{ route('showALL') }}">
                    <i class="fas fa-user fa-tachometer-alt"></i>
                    <span>Events</span></a>
            </li>
          <hr class="sidebar-divider">
          <li class="nav-item ">
                <a class="nav-link" href="/admin/dashboard/archive">
                    <i class="fas fa-user fa-tachometer-alt"></i>
                    <span>Historique</span></a>
            </li>
          <hr class="sidebar-divider">



        </ul>
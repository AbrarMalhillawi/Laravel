<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> This Moment</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          {{-- Auth::user()->name --}}
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


              {{-- dashboard --}}

          <li class="nav-item menu-open">
            <a href="booking" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          {{-- user --}}
          <li class="nav-item">
            <a href="user" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          {{-- {{route('activity.index')}} --}}
                   {{-- activity --}}
        <li class="nav-item">
          {{-- {{route('admin.activity.index')}} --}}
                <a href="activity" class="nav-link" >
                  <i class="nav-icon fas fa-th"></i>
                  <p>Activity</p>
                </a>
              </li>

              {{-- booking --}}
              <li class="nav-item">
                <a href="confirm" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Booking</p>
                </a>
              </li>
              
{{--              
             
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li> --}}
            
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
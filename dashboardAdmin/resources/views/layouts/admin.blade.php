<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')| SlimWebSite</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="sidebar-min" style="height: auto;">
<div class="wrapper" >

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <p>
                    <i class="nav-icon fas fa-power-off"></i>
                    Logout
                </p>
            </a>
            <form id="logout-form" action=" {{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- SlimWebSite Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{asset('img/logo.svg')}}" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8;height:90px;width:90px">
      <span class="brand-text font-weight-light">SlimWebSite</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/avatar.jpg')}}" class="img-circle" style="height:50px;width:50px" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="inline-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('role.index') }}" class="nav-link">
                <i class="fas fa-shield-alt nav-icon"></i>
                <p>
                    Roles
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                <i class="fas fa-unlock nav-icon"></i>
                <p>
                    Permissions
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                <i class="fas fa-users-cog nav-icon"></i>
                <p>
                    Users
                </p>
                </a>
            </li>
          </ul>

          <li class="nav-item">
                <a href="{{ route('user.profile') }}" class="nav-link">
                <i class="fas fa-id-badge nav-icon"></i>
                <p>
                    Profile
                </p>
                </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>
                Members
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>
                Contributors
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-bell nav-icon"></i>
              <p>
                Notifications
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-address-card nav-icon"></i>
              <p>
                Members Cards
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-image nav-icon"></i>
              <p>
                Change Profile Photo
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.getPassword') }}" class="nav-link">
              <i class="fas fa-lock nav-icon"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off nav-icon"></i>
              <p>
                Logout
              </p>
              <form id="logout-form" action=" {{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper" style="min-height: 1604.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">@yield('title')</h1>
        </div>
        
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">@yield('title')</a></li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        @include('partials.alert')
        @yield('content')
      </div>
      
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content-header -->

</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/vendor/adminlte/dist/css/adminlte.min.css">
  @yield('styles')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home', app()->getLocale()) }}" class="nav-link">@lang('auth.home')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('about', app()->getLocale()) }}" class="nav-link">@lang('auth.about')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('contact', app()->getLocale()) }}" class="nav-link">@lang('auth.contact')</a>
      </li>
    </ul>
<div class="dropdown navbar-nav ml-auto" style="float: right;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{ app()->getLocale() == 'es'? 'Spanish':'English' }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ url(app()->getLocale() == 'es'? 'en':'es') }}">{{ app()->getLocale() == 'es'? 'English':'Spanish' }}
</a>
  </div>
</div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home', app()->getLocale()) }}" class="brand-link">
      <img src="/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">@lang('auth.project_name')</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                @lang('auth.basic')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            	<li class="nav-item">
                <a href="{{ route('home', app()->getLocale()) }}" class="nav-link">
                  <i class="fa fa-home nav-icon"></i>
                  <p>@lang('auth.home')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('about', app()->getLocale()) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('auth.about')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contact', app()->getLocale()) }}" class="nav-link">
                  <i class="far fa-address-book nav-icon"></i>
                  <p>@lang('auth.contact')</p>
                </a>
              </li>
            </ul>
          </li>
          @guest
          <li class="nav-item">
            <a href="{{ route('login', app()->getLocale()) }}" class="nav-link">
              <i class="nav-icon fa fa-sign-in"></i>
              <p>
                @lang('auth.login')
              </p>
            </a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a href="{{ route('companies.index', app()->getLocale()) }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                @lang('auth.companies')
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('employees.index', app()->getLocale()) }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                @lang('auth.employees')
              </p>
            </a>
          </li>
          <li class="nav-item"> 
              <i class="nav-icon fa fa-sign-out"></i>
            <a href="#" onclick="document.getElementById('logout-form').submit()">@lang('auth.logout')
            </a>
          </li>
      <form method="POST" action="{{ route('logout', app()->getLocale())}}" id="logout-form">
        @csrf
      </form>
         @endauth
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Main content -->
<br>    
    @yield('content')
 <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>      @lang('auth.footer1') &copy; {{ date('Y') }} <a href="https://adminlte.io">@lang('auth.project_name')</a>.</strong>       @lang('auth.footer2')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/adminlte/dist/js/adminlte.min.js"></script>
@yield('javascripts')

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Jubilee Portal') }}</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href={{ asset("plugins/fontawesome-free/css/all.min.css") }}>

<!-- iCheck -->
<link rel="stylesheet" href={{ asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>

<!-- Styles -->
<link href={{ asset('css/app.css') }} rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href={{ asset("dist/css/adminlte.min.css") }}>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href={{ url('dashboard/user/'.Auth::user()->id) }} class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href={{ route('contacts.show') }} class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">2 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 3 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 2 new forms
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      {{-- Logout link --}}
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-bold">Jubilee Insurance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ (request()->is('/dashboard/user*')) ? 'menu-open': 'null' }}">
            <a href={{ url('dashboard/user/'.Auth::user()->id) }} class="nav-link {{ (request()->is('dashboard/user*')) ? 'active': 'null' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('user/forms*')) ? 'menu-open': 'null' }}">
            <a href="/user/forms/membership-form/details/create" class="nav-link {{ (request()->is('user/forms*')) ? 'active': 'null' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Forms
                <span class="badge badge-info right">3</span>
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('user/status*')) ? 'menu-open': 'null' }}">
            <a href="/user/status" class="nav-link {{ (request()->is('user/status')) ? 'active': 'null' }}">
              <i class="nav-icon fas fa-spinner fa-spin"></i>
              <p>
                Status
                <span class="right badge badge-danger">Pending</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <main class="content">
      <div class="container-fluid" style="padding-bottom: 1px">
        @yield('content')
      </div><!-- /.container-fluid -->
    </main>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> <a href="https://www.jubileeinsurance.com" style="color: #d92334;">Jubilee Insurance Company of Tanzania.</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        2020 &copy; All Rights Reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- Scripts -->
<!-- jQuery -->
<script src={{ asset("plugins/jquery/jquery.min.js")}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset("plugins/jquery-ui/jquery-ui.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{ asset("dist/js/adminlte.min.js")}}></script>

{{-- Custom javascript --}}
<script>
// Script for enabling submit button to be active after declaration
$('#terms').change(function () {
  $('#submit').prop("disabled", !this.checked);
}).change()

// Custom text area script for Medical History Form
let checker = document.getElementById('qsn1')
let checker1 = document.getElementById('qsn1a')
let textInput = document.getElementById('QsnTextarea1')

checker.addEventListener('click', ()=> textInput.disabled = !checker.checked)
checker1.addEventListener('click', ()=> textInput.disabled = !checker.checked)
</script>

</body>
</html>

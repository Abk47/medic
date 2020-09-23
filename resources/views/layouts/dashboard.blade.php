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
        <a class="nav-link" data-widget="pushmenu" data-enable-remember='TRUE' href="#" role="button"><i class="fas fa-bars"></i></a>
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
    <a href="{{ url('dashboard/user/'.Auth::user()->id) }}" class="brand-link">
      <span class="brand-text font-weight-bold">JUBILEE INSURANCE</span>
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
            <a href="#" class="nav-link {{ (request()->is('user/forms*')) ? 'active': 'null' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Forms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user/forms/membership-form/details/create" class="nav-link {{ (request()->is('user/forms/membership-form*')) ? 'active': 'null' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membership Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member Cessations Form</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ (request()->is('user/status*')) ? 'menu-open': 'null' }}">
            <a href="#" class="nav-link {{ (request()->is('user/status')) ? 'active': 'null' }}">
              <i class="nav-icon fas fa-spinner fa-spin"></i>
              @if(count($status) === 1)
              <p>
                Status
                <span class="right badge badge-info">Submitted</span>
              </p>
              @else
              <p>
                Status
                <span class="right badge badge-danger">Not submitted</span>
              </p>
              @endif
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
            @if ((request()->is('dashboard/user*')))
            <h1 class="m-0 text-dark">Dashboard</h1>
            @elseif((request()->is('contacts')))
            <h1 class="m-0 text-dark">Contacts</h1>
            @else
            <h1 class="m-0 text-dark">Forms</h1>
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if ((request()->is('dashboard/user*')))
              <li class="breadcrumb-item"><a href="{{ url('dashboard/user/'.Auth::user()->id) }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              @elseif((request()->is('user*')))
              <li class="breadcrumb-item"><a href="{{ url('dashboard/user/'.Auth::user()->id) }}">Home</a></li>
              <li class="breadcrumb-item active">Forms</li>
              @else
              <li class="breadcrumb-item"><a href="{{ url('dashboard/user/'.Auth::user()->id) }}">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
              @endif
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

{{-- Sweet Alert 2  --}}
<script src={{ asset("plugins/sweetalert2/sweetalert2.all.min.js") }}></script>

{{-- Custom javascript --}}
<script>
// Script for enabling submit button to be active after declaration
$('#terms').change(function () {
  $('#send_form').prop("disabled", !this.checked);
}).change()
</script>

{{-- Display notification when a dependant is deleted  --}}
@if(session('dependant_delete'))
 <script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
        icon: 'success',
        title: '{{ session('dependant_delete') }}'
      })
})
 </script>
@endif

{{-- Display notification when a dependant is added  --}}
@if(session('dependant_add'))
 <script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
        icon: 'success',
        title: '{{ session('dependant_add') }}'
      })  
})
 </script>
@endif

{{-- Display notification when a medical record is deleted  --}}
@if(session('record'))
 <script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
        icon: 'success',
        title: '{{ session('record') }}'
      })  
})
 </script>
@endif

{{-- Display notification when a form is submitted  --}}
@if(session('form_success'))
 <script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
    Toast.fire({
        icon: 'success',
        title: '{{ session('form_success') }}'
      })  
})
 </script>
@endif

{{-- Display notification when a form is submitted  --}}
@if(session('form_message'))
 <script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });
    Toast.fire({
        icon: 'warning',
        title: '{{ session('form_message') }}'
      })  
})
 </script>
@endif

</body>
</html>



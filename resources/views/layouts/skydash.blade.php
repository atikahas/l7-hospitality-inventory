<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AR - @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('skydash/template/js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('skydash/template/images/favicon_AR.png') }}" />
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/pwstabs/jquery.pwstabs.min.css') }}">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  @yield('headerScripts')
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"> 
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand " href="index.html">AR INVENTORY</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('skydash/template/images/favicon_AR.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('skydash/template/images/faces/avatar-1.png') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off text-primary"></i> <span>{{ __('Log Out') }}</span></a>
			  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item @yield('dashboard')">
            <a class="nav-link" href="{{url('home')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item @yield('item_management')">
            <a class="nav-link" href="{{url('item')}}">
              <i class="ti-bag menu-icon"></i>
              <span class="menu-title">Item Management</span>
            </a>
          </li>
          <li class="nav-item @yield('purchasing_management')">
            <a class="nav-link" href="{{url('purchase')}}">
              <i class="ti-shopping-cart menu-icon"></i>
              <span class="menu-title">Order Management</span>
            </a>
          </li>

        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 TK. All rights reserved.</span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <script src="{{ asset('skydash/template/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('skydash/template/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('skydash/template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('skydash/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('skydash/template/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('skydash/template/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('skydash/template/vendors/select2/select2.min.js') }}"></script>
  <script src="{{ asset('skydash/template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('skydash/template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('skydash/template/js/template.js') }}"></script>
  <script src="{{ asset('skydash/template/js/settings.js') }}"></script>
  <script src="{{ asset('skydash/template/js/todolist.js') }}"></script>
  <script src="{{ asset('skydash/template/js/dashboard.js') }}"></script>
  <script src="{{ asset('skydash/template/js/data-table.js') }}"></script>
  <script src="{{ asset('skydash/template/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('skydash/template/js/Chart.roundedBarCharts.js') }}"></script>
  <script src="{{ asset('skydash/template/js/select2.js') }}"></script>
  <script src="{{ asset('skydash/template/vendors/pwstabs/jquery.pwstabs.min.js') }}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

	<script>

            @if(Session('success'))
            toastr.success("{{Session('success')}}");
            @endif
            @if(Session('error'))
            toastr.danger("{{Session('error')}}");
            @endif

    </script>

  @yield('footerScripts')
</body>

</html>


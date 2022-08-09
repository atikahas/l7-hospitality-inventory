
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>INVENTORY - @yield('title')</title>
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="{{ asset('atrana/modules/bootstrap-5.1.3/css/bootstrap.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('atrana/css/style.css') }}">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="{{ asset('atrana/modules/fontawesome6.1.1/css/all.css') }}">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="{{ asset('atrana/modules/boxicons/css/boxicons.min.css') }}">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Toastify CSS -->
	<link rel="stylesheet" href="{{ asset('atrana/modules/toastr/toastr.min.css') }}">
	@yield('headerScripts')
</head>

<body>
  	<!--Topbar -->
	<div class="topbar transition">
		<div class="bars">
			<button type="button" class="btn transition" id="sidebar-toggle">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="menu">
			<ul>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="{{ asset('atrana/images/avatar/avatar-1.png') }}" alt="">
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>{{ __('Sign Out') }}</span></a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf </form>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
		<div class="sidebar-content"> 
			<div id="sidebar">
				<!-- Logo -->
				<div class="logo">
					<h2 class="mb-0">INVENTORY</h2>
				</div>

				<ul class="side-menu">
					<li>
						<a href="index.html"><i class='bx bxs-dashboard icon' ></i> Dashboard </a>
					</li>

					<!-- Divider-->
					<li class="divider" data-text="STARTER">STARTER</li>

					<li>
						<a href="{{url('location/view')}}" class="@yield('location')"><i class='fa fa-location icon' ></i> Location </a>
					</li>

					<li>
						<a href="{{url('category/view')}}" class="@yield('category')"><i class='fa fa-list icon' ></i> Category </a>
					</li>

					<li>
						<a href="#">
						<i class='fa fa-shopping-bag icon' ></i> Item 
						<i class='bx bx-chevron-right icon-right' ></i>
						</a>
						<ul class="side-dropdown">
							<li><a href="layout-default.html">View Item</a></li>
							<li><a href="layout-top-navigation.html">Add Item</a></li>
						</ul>
					</li>

					<li>
						<a href="credits.html"><i class='fa fa-pencil-ruler icon' ></i> Stock </a>
					</li>

				</ul>
			</div> 
		</div>
	</div><!-- End Sidebar-->


	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content-start transition" style="padding-top:5px;">
		@yield('content')
	</div><!-- End Content -->


	<!-- Footer -->				
	<footer>
		<div class="footer">
			<div class="float-start">
				<p>2022 &copy; TK</p>
			</div>
		</div>
	</footer>


	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="{{ asset('atrana/js/atrana.js') }}"></script>

	<!-- JS Libraies -->
	<script src="{{ asset('atrana/modules/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('atrana/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('atrana/modules/popper/popper.min.js') }}"></script>
 
    <!-- Template JS File -->
	<script src="{{ asset('atrana/js/script.js') }}"></script>
	<script src="{{ asset('atrana/js/custom.js') }}"></script>

	
	<!-- DataTables  & Plugins -->
	<script src="{{url('')}}/adminlte3/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-rowgroup/js/rowGroup.bootstrap4.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/jszip/jszip.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

	<!-- Toastr Js -->
	<script src="{{ asset('atrana/modules/toastr/toastr.min.js') }}"></script>

	<script>

            @if(Session('success'))
            toastr.success("{{Session('success')}}");
            @endif
            @if(Session('error'))
            toastr.danger("{{Session('error')}}");
            @endif

    </script>


 </body>
</html>

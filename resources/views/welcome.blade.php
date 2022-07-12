
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>AR - Inventory</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="{{ asset('atrana/modules/bootstrap-5.1.3/css/bootstrap.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('atrana/css/style.css') }}">
	<!-- Boostrap Icon-->
	<link rel="stylesheet" href="{{ asset('atrana/modules/bootstrap-icons/bootstrap-icons.css') }}">
    @yield('headerScripts')
</head>
<body>
 
	<div id="auth">
        
		<div class="row h-100">
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-left">
 				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div id="auth-right">
					<div class="auth-logo">
						<!-- <a href="index.html"><img src="{{ asset('atrana/images/AR-logo.jpg') }}" alt="Logo"> INVENTORY MANAGEMENT</a>   -->
					</div>
					<h1 class="auth-title">Log in.</h1>
					<p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
		
					<form method="POST" action="{{ route('login') }}">
                    @csrf
						<div class="form-group position-relative has-icon-left mb-4">
							<input id="email" type="text" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email" required autocomplete="email" autofocus>
							<div class="form-control-icon">
								<i class="bi bi-person"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left mb-4">
							<input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Keep me logged in
							</label>
						</div>
						<button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('Log in') }}</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
		
	 

	<!-- General JS Scripts -->
	<script src="{{ asset('atrana/js/atrana.js') }}"></script>

	<!-- JS Libraies -->
	<script src="{{ asset('atrana/modules/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('atrana/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('atrana/modules/popper/popper.min.js') }}"></script>
 
    <!-- Template JS File -->
	<script src="{{ asset('atrana/js/script.js') }}"></script>
	<script src="{{ asset('atrana/js/custom.js') }}"></script>
 </body>
</html>

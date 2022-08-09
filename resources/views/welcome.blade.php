<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aman Rimba Inventory</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/template/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydash/template/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('skydash/template/images/favicon_AR.png') }}" />
  @yield('headerScripts')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Aman Rimba Inventory System</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email" name="email" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="current-password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('SIGN IN') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('skydash/template/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydash/template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('skydash/template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('skydash/template/js/template.js') }}"></script>
  <script src="{{ asset('skydash/template/js/settings.js') }}"></script>
  <script src="{{ asset('skydash/template/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>

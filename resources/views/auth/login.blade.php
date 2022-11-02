<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Student Login - JU Project Distribution System</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/feather-icon.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('public/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              <div><a class="logo" href="#"><img class="img-fluid for-light" src="{{ asset('public/assets/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('public/assets/images/logo/logo.png') }}" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ route('authenticate') }}">
                  @csrf
                  <h4 class="text-center">Sign in to Student</h4>
                  <p class="text-center">Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="std_email" value="{{old('std_email')}}" placeholder="Test@gmail.com" required>
                    @error('std_email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" placeholder="*********" required>
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    {{-- <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a> --}}
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                  {{-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> --}}
                </form>

                {{-- other signin links --}}
                <div class="row mt-4">
                  <div class="col-md-6">
                    <p>
                      <a href="admin">Login as Admin</a>
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="text-md-end">
                      <a href="teacher">Login as Teacher</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Archive Projects - JU Project Distribution System</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/archive.css') }}">
  </head>
  <body>
    {{-- header start --}}
    <header class="archive-header p-3 shadow-sm">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 mb-3 mb-md-0">
            <p class="text-center text-md-start">
              <img src="{{ asset('public/assets/images/logo/logo.png') }}" alt="" class="img-fluid">
            </p>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h4 class="text-center">Archive Projects</h4>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <p class="text-end d-none d-md-block">
              <a href="login" class="btn btn-primary">Login</a>
            </p>
          </div>
        </div>
      </div>
    </header>
    {{-- header end --}}

    {{-- projects list start --}}
    <section class="projects-list-area py-3 py-lg-5">
      <div class="container">
        @if ( !empty($projects) )
        <div class="row">
          @foreach ( $projects as $item )
          {{-- item --}}
          <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('public/assets/images/image-not-found.jpg') }}" class="card-img-top" alt="">
              <div class="card-body p-4">
                <h5 class="card-title text-primary">{{ $item->std_proj_name }}</h5>
                <p class="card-text mb-2">Project by: {{ $item->fk_std_id }}</p>
                <p class="card-text">Supervised by: {{ $item->fk_teacher_id }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @else
        <p class="text-center">No project found!</p>
        @endif

        {{-- pagination --}}
        @if ($projects->lastPage() > 1 )
        <ul class="pagination justify-content-center">
          <li class="page-item  {{ $projects->currentPage() == 1 ? ' disabled' : '' }}">
              <a class="page-link" href="{{ $projects->url(1) }}">Previous</a>
          </li>
          <li class="page-item {{ $projects->currentPage() == $projects->lastPage() ? ' disabled' : '' }}">
              <a class="page-link" href="{{ $projects->url($projects->currentPage() + 1) }}">Next</a>
          </li>
        </ul>
        @endif
      </div>
    </section>
    {{-- projects list end --}}

    {{-- footer start --}}
    <header class="archive-footer p-3 border-top border-bottom">
      <div class="container">
        <p class="text-center my-2">
          2022 © Jahangirnagar University. | Designed & Developed by <a href="https://www.linkedin.com/in/sazzad-bin-jafor/">Sazzad Bin Jafor</a>.
        </p>
      </div>
    </header>
    {{-- footer end --}}


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
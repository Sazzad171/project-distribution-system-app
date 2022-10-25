<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/images/logo/logo-icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="./assets/images/logo/logo-icon.png" type="image/x-icon">
  <title>Project Distribution System | JU</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/icofont.css') }}">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/themify.css') }}">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/flag-icon.css') }}">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/feather-icon.css') }}">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/scrollbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/chartist.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/date-picker.css') }}">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/vendors/bootstrap.css') }}">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
  <link id="color" rel="stylesheet" href="{{ asset('public/assets/css/color-1.css') }}" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/responsive.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/custom.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- dynamic css --}}
    @yield('css')

</head>

<body>
  <div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg>
  </div>

  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->

  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">

    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid main-logo"
                src="{{ asset('public/assets/images/logo/logo.png') }}" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
          </div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
          <ul class="nav-menus">
            <li>
              <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                  data-feather="maximize"></i></a></li>
            <li class="profile-nav onhover-dropdown p-0 me-0">
              <div class="media profile-media"><img class="user-img b-r-10" src="{{ asset('public/assets/images/user/user.png') }}" alt="">
                <div class="media-body"><span>John Doe</span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                <li>
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button href="#"><i data-feather="log-in"> </i><span>Log out</span></button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Header Ends                              -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper">
            <a href="index.html">
              <img class="img-fluid for-light main-logo" src="{{ asset('public/assets/images/logo/logo.png') }}" alt="">
                <img class="img-fluid for-dark main-logo" src="{{ asset('public/assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="index.html"><img class="img-fluid" src="{{ asset('public/assets/images/logo/logo-icon.png') }}" alt=""></a>
          </div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                      src="./assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                      aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="">Welcome!</h6>
                    <p class="">Greetings from Project Distribution Team, JU.</p>
                  </div>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav active" href="{{ route('dashboard') }}"><i
                      data-feather="home"> </i><span>Dashboard</span></a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('pendingRegisteredStudents.pendingRecords') }}"><i
                      data-feather="files"> </i><span>Pending Registerd Std.</span></a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('timeline.list') }}"><i
                      data-feather="calendar"> </i><span>Registration Timeline</span></a>
                </li>
                {{-- <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="#"><i
                      data-feather="box"> </i><span>Register Records</span></a>
                </li> --}}
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('student.list') }}"><i
                      data-feather="users"> </i><span>Students</span></a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('teacher.list') }}"><i
                      data-feather="user"> </i><span>Teachers</span></a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('semester.list') }}"><i
                      data-feather="inbox"> </i><span>Semester</span></a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('field.list') }}"><i
                      data-feather="box"> </i><span>Field/Areas</span></a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="#"><i
                      data-feather="archive"> </i><span>Prev. Project Status</span></a>
                </li>
                <!-- <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                      data-feather="users"></i><span>Clients</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="./check-transaction.html">Check Transaction</a></li>
                  </ul>
                </li> -->
                <li class="sidebar-main-title">
                  <div>
                    <h6>Thank You!</h6>
                    <p>For Using Our Automated Panel</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
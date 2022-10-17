@extends('layout.main')

{{-- for css --}}
@section('css')

@endsection

@section('main-content')
    <!-- page body starts -->
    <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Dashboard</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <!-- current openings registration start -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <h5 class="border-bottom pb-3">Current Opening Registration</h5>
                        </div>
                        <div class="col-md-4 mb-1">
                            <h6 class="text-success">Start Date:</h6>
                            <p class="text-secondary">20 Nov 2022</p>
                        </div>
                        <div class="col-md-4 mb-1">
                            <h6 class="text-danger">End Date:</h6>
                            <p class="text-secondary">20 Nov 2022</p>
                        </div>
                        <div class="col-md-4 mb-1">
                            <h6 class="text-primary">Semester</h6>
                            <p class="text-secondary">Fall - 22</p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <h6 class="text-center text-danger pt-2">There is No Opening Registration Currently!</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- current openings registration end -->

            <!-- total teacher and student card start -->
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h5 class="border-bottom pb-3">Register My Project/Research</h5>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <p class="text-center">
                                        <a href="{{ route('registerMyProject') }}" class="btn btn-primary">Register</a>
                                    </p>
                                    <h6 class="text-center text-success pt-2">You are already registered!</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h5 class="border-bottom pb-3">My Project/Research</h5>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <p>
                                        <b>Project Name:</b> Research on video editing
                                    </p>
                                    <p>
                                        <b>Supervisor Name:</b> Md. Asad
                                    </p>
                                    <p>
                                        <b>Registered Semester:</b> Fall - 22
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- total teacher and student card end -->

        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
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
                <h3>My Project</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">My Project</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <!-- total teacher and student card start -->
            <div class="row">
                <div class="col-sm-6 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h5 class="border-bottom pb-3">My Project/Research</h5>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <p>
                                        <b>Project Name:</b> 
                                        @unless ( $projectDetails->std_proj_name === null )
                                        {{ $projectDetails->std_proj_name }}
                                        @else
                                        Not Updated
                                        @endunless
                                    </p>
                                    <p>
                                        <b>Supervisor Name:</b> {{ $projectDetails->teacher->tchr_name }}
                                    </p>
                                    <p>
                                        <b>Registered Semester:</b> {{ $projectDetails->semester->sem_title }}
                                    </p>
                                    <p>
                                        <b>Project Status:</b> {{ $projectDetails->status }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h5 class="border-bottom pb-3">Update Your Info</h5>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <form action="{{ route('updateInfo') }}" method="POST">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">My Name</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" type="text" value="" name="stdName" placeholder="My name..">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">My Contact No.</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" type="number" value="" name="stdPhone" placeholder="My contact no..">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Project Name</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" type="text" value="" name="projectName" placeholder="My project name..">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Update</button>
                                    </form>
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
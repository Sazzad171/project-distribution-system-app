@extends('layout.main')

{{-- for css --}}
@section('css')

@endsection

@section('main-content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Student Project Details</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Project deatils</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">

      <!-- register new project start -->
      <div class="card">
        <div class="card-body">
          {{-- registered information --}}
          <div class="row">
            <div class="col-12">
              <h6 class="text-underline mb-3">Student Project Information:</h6>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Student Name:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->student->std_name }}</p>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Student ID:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->student->std_varsity_id }}</p>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Teacher Name:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->teacher->tchr_name }}</p>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Project Name:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->std_proj_name }}</p>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Registered Semester:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->semester->sem_title }}</p>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Project Status:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->status }}</p>
            </div>

            <div class="col-md-3 mb-3 mb-md-2">
              <p><b>Public project:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-2">
              <p>{{ $project->public_project }}</p>
            </div>

          </div>
        </div>
      </div>
      <!-- register new project end -->

    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
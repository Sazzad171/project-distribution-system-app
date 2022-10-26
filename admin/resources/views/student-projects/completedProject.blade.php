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
            <h3>All Students Projects</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">All students projects</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">

      <!-- students table start -->
      <div class="card">
        <div class="card-header p-3">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h6>Projects Records</h6>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- table -->
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="table-primary">
                <tr>
                  <th>Project Name</th>
                  <th>Student ID</th>
                  <th>Assigned Teacher</th>
                  <th>Registered Semester</th>
                  <th>Public project</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($studentProjects as $spItem)
                <tr>
                  <td>{{ $spItem->std_proj_name }}</td>
                  <td>{{ $spItem->student->std_varsity_id }}</td>
                  <td>{{ $spItem->teacher->tchr_name }}</td>
                  <td>{{ $spItem->semester->sem_title }}</td>
                  <td>{{ $spItem->public_project }}</td>
                  <td class="text-end">
                    <a href="{{ route('studentProjects.details', $spItem->std_proj_id) }}" class="btn btn-primary-gradien" type="button"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- students table end -->

    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
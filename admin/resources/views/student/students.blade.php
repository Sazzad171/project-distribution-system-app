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
            <h3>Students</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Students</li>
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
              <h6>All Students</h6>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <a href="{{ route('student.create') }}" class="btn btn-primary">Add New Students</a>
              </p> 
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- table -->
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="table-primary">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Intake Semester</th>
                  <th>Research/Project Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sazzad</td>
                  <td>sazzad@gmail.com</td>
                  <td>Summer - 2022</td>
                  <td class="text-center">
                    <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i>Done</span>
                    <span class="badge badge-light-warning"><i class="me-2" data-feather="rotate-cw"></i>Pending</span>
                    <span class="badge badge-light-info"><i class="me-2" data-feather="clock"></i>In progress</span>
                  </td>
                  <td class="text-end">
                    <button class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger-gradien" type="button"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                
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
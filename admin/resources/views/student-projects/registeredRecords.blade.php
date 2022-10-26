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
            <h3>Research/Project Register Records</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Research/Project Register Records</li>
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
              <h6>Previous Records</h6>
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
                  <th>Student Name</th>
                  <th>Student ID</th>
                  <th>Assigned Teacher</th>
                  <th>Registered Semester</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Web</td>
                  <td>Sazzad</td>
                  <td>CSE34243</td>
                  <td>Bulbul ahmed</td>
                  <td>Fall-2021</td>
                  <td>Assigned</td>
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
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
            <h3>Records</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Project Timeline Records</li>
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
              <h6>All Project Timeline Records</h6>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <a href="./register-new-timeline.html" class="btn btn-primary">Add New Timeline</a>
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
                  <th>Registered Semester</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Timeline Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Fall 2022</td>
                  <td>20 Aug 2022</td>
                  <td>30 Aug 2022</td>
                  <td class="text-center">
                    <span class="badge badge-light-danger"><i class="me-2" data-feather="check"></i>Experied</span>
                    <span class="badge badge-light-info"><i class="me-2" data-feather="clock"></i>In progress</span>
                  </td>
                  <td class="text-end">
                    <button class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></button>
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
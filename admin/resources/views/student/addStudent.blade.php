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
            <h3>Add New Student</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Add New Student</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">

      <!-- register new project start -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8">
              <h5>New Student Form</h5>
              <span>Fill out this form.</span>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <button class="btn btn-success">Upload CSV</button>
              </p>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form class="" >
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Student Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="name" placeholder="Enter Name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Student email</label>
              <div class="col-sm-9">
                <input class="form-control" type="email" name="email" placeholder="Enter email..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Student phone</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="phone" placeholder="Enter phone..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Student Intake Semester</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="intakeSemester" placeholder="Enter intake semester..">
              </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
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
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
            <h3>Edit</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Edit Registered Records</li>
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
            <div class="col-md-12">
              <h5>Edit Registered Records</h5>
              <span>Update this form.</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form class="" >
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Project Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="projectName" placeholder="Enter project name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Student Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="studentName" placeholder="Enter student name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Student ID</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="stdId" placeholder="Enter student ID..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Teacher Name</label>
              <div class="col-sm-9">
                <select class="form-select" id="teacherName">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Registered Semester</label>
              <div class="col-sm-9">
                <select class="form-select" id="Semester">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
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
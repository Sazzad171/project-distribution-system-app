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
            <h3>Register New Timeline</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Register New Timeline</li>
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
            <div class="col-sm-8">
              <h5>Research Project Registration Form</h5>
              <span>Fill out this form.</span>
            </div>
            <div class="col-sm-4">
              <p class="text-sm-end">
                <a href="./add-new-area.html" class="btn btn-success">Add New Field/Area</a>
              </p>
            </div>
          </div>
          
        </div>
        <div class="card-body">
          <form class="" >
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Current Semester</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="currentSemester" placeholder="Enter current semester..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Start Date and time</label>
              <div class="col-sm-9">
                <input class="form-control digits" type="datetime-local" name="startDate" value="2018-01-19T18:45:00">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">End Date and time</label>
              <div class="col-sm-9">
                <input class="form-control digits" type="datetime-local" name="endDate" value="2018-01-19T18:45:00">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Select All Field/Area</label>
              <div class="col-sm-9">
                <div class="animate-chk">
                  <label for="areaName1" class="me-3">
                    <input class="checkbox_animated" id="areaName1" name="areaName[]" type="checkbox"> 
                    Option 1
                  </label>
                  <label for="areaName2" class="me-3">
                    <input class="checkbox_animated" id="areaName2" name="areaName[]" type="checkbox"> 
                    Option 2
                  </label>
                  <label for="areaName3" class="me-3">
                    <input class="checkbox_animated" id="areaName3" name="areaName[]" type="checkbox"> 
                    Option 3
                  </label>
                </div>
              </div>
            </div>
            <!-- dynamic new field -->
            <!-- <div class="more-area-box"></div> -->

            <!-- <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Add More Field/Area</label>
              <div class="col-sm-9">
                <button class="btn btn-primary add-field">Add New</button>
                <button class="btn btn-danger remove-field">Remove Last</button>
              </div>
            </div> -->
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
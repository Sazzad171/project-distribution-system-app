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
            <h3>Register my project</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Register my project</li>
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
              <h5>Register my project</h5>
              <span>Fill out this form.</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          {{-- check current registration is on or not --}}
          @if ($timelineActiveData !== null)
          <form class="" >
            <div class="mb-3 row">
              <label class="col-md-2 col-form-label">Select Field/Area of 1</label>
              <div class="col-md-4">
                <select class="form-select" name="myProjArea">
                  <option>Select Field/Area</option>
                  <option value="">1</option>
                </select>
              </div>

              <label class="col-md-2 col-form-label">Select Field/Area of 1</label>
              <div class="col-md-4">
                <select class="form-select" name="myProjArea">
                  <option>Select Field/Area</option>
                  <option value="">1</option>
                </select>
              </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>

          @else
          <p class="text-center text-danger">No registration timeline is available!</p>
          @endif
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
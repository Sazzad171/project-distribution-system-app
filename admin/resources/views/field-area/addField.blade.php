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
            <h3>All Field/Area</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">All Field/Area</li>
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
              <h5>All Field/Area Form</h5>
              <span>You can add new or update existing Field/Area</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form class="" >
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 1</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area1" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 2</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area2" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 3</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area3" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 4</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area4" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 5</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area5" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 6</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area6" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 7</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area7" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 8</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area8" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 9</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area9" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 10</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area10" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 11</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area11" placeholder="Enter field/aera name..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field/Area 12</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="area12" placeholder="Enter field/aera name..">
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
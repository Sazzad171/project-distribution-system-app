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
            <h3>Admin Settings</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Settings</li>
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
              <h5>Change Admin Password</h5>
              <span>Fill out this form to change password.</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form class="" >
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Current Password</label>
              <div class="col-sm-9">
                <input class="form-control" type="password" name="name" placeholder="Enter current password..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">New Password</label>
              <div class="col-sm-9">
                <input class="form-control" type="password" name="email" placeholder="Enter new password..">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Confirm New Password</label>
              <div class="col-sm-9">
                <input class="form-control" type="password" name="phone" placeholder="Confirm new password..">
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
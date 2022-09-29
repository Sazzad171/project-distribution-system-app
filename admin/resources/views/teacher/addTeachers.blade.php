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
            <h3>Add New Teachers</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Add New Teachers</li>
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
              <h5>New Teachers Form</h5>
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
          <form method="POST" action="{{ route('teacher.store') }}">
            @csrf
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Teacher Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="tchr_name" value="{{ old('tchr_name') }}" placeholder="Enter Name..">
                @error('tchr_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Teacher email</label>
              <div class="col-sm-9">
                <input class="form-control" type="email" name="tchr_email" value="{{ old('tchr_email') }}" placeholder="Enter email..">
                @error('tchr_email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Teacher phone</label>
              <div class="col-sm-9">
                <input class="form-control" type="number" name="tchr_phone" value="{{ old('tchr_phone') }}" placeholder="Enter phone..">
                @error('tchr_phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Teacher new password</label>
              <div class="col-sm-9">
                <input class="form-control" type="password" name="tchr_password" value="{{ old('tchr_password') }}" placeholder="Enter new password..">
                @error('tchr_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Add new teacher</button>
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
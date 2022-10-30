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
            <h3>Add New Semester</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Add New Semester</li>
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
              <h5>New Semester Form</h5>
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
          <form method="POST" action="{{ route('semester.store') }}">
            @csrf
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Semester Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="sem_name" value="{{ old('sem_name') }}" placeholder="Enter Semester Name..">
                @error('sem_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Semester Year</label>
              <div class="col-sm-9">
                <input class="form-control" type="number" min="1900" max="2099" name="sem_year" value="{{ old('sem_year') }}" placeholder="Enter year..">
                @error('sem_year')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
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
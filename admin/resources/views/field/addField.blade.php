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
            <h3>Add Field/Area</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Add Field/Area</li>
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
              <h5>Add Field/Area Form</h5>
              <span>You can add new or update existing Field/Area</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('field.store') }}">
            @csrf
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Field Name</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="fld_name" value="{{ old('fld_name') }}" placeholder="Enter Field Name..">
                @error('fld_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Add New</button>
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
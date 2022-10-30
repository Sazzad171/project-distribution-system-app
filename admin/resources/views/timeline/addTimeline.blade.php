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
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
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
          </div>
          
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('timeline.store') }}">
            @csrf
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Current Semester</label>
              <div class="col-sm-9">
                <select name="tl_semester" class="form-control">
                  <option value="">Select a semester</option>
                  @foreach ($semesters as $semester)
                    <option value="{{ $semester->sem_id }}">{{ $semester->sem_title }}</option>
                  @endforeach
                </select>
                @error('tl_semester')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Start Date and time</label>
              <div class="col-sm-9">
                <input class="form-control digits" type="datetime-local" name="tl_start" value="{{ old('tl_start') }}">
                @error('tl_start')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">End Date and time</label>
              <div class="col-sm-9">
                <input class="form-control digits" type="datetime-local" name="tl_end" value="{{ old('tl_end') }}">
                @error('tl_end')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Select All Field/Area</label>
              <div class="col-sm-9">
                <div class="animate-chk">
                  @foreach ($fields as $field)
                    <label for="field{{ $field->fld_id }}" class="me-3">
                      <input class="checkbox_animated" id="field{{ $field->fld_id }}" name="tl_field[]" type="checkbox" value="{{ $field->fld_id }}"> 
                      {{ $field->fld_name }}
                    </label>
                  @endforeach
                </div>
                @error('tl_field')
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
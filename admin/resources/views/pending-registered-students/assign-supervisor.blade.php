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
            <h3>Assign Supervisor</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Assign Supervisor</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">

      <!-- register new project start -->
      <div class="card">
        <div class="card-body">
          {{-- registered information --}}
          <div class="row">
            <div class="col-12">
              <h6 class="text-underline mb-3">Student Registration Information:</h6>
            </div>

            <div class="col-md-3 mb-3 mb-md-1">
              <p><b>Student Name:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-1">
              <p>{{ $studentRegistrationData->student->std_name }}</p>
            </div>

            {{-- for show field --}}
            @for ($i=0; $i < 15; $i++)
            <p class="d-none">{{ $temp = "field".$i }}</p>
            @if ($studentRegistrationData->$temp !== null)

            <div class="col-md-3 mb-3 mb-md-1">
              <p><b>Prefered Field/Area {{ $i }}:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-1">
              <p>{{ $studentRegistrationData->$temp }}</p>
            </div>

            @endif
            @endfor

            <div class="col-md-3 mb-3 mb-md-1">
              <p><b>Semester:</b> </p>
            </div>
            <div class="col-md-9 mb-3 mb-md-1">
              <p>{{ $studentRegistrationData->semester->sem_title }}</p>
            </div>
          </div>

          <hr class="my-4">

          {{-- form --}}
          <h6 class="text-underline mb-3">Assign Supervisor:</h6>
          <form method="POST" action="{{ route('pendingRegisteredStudents.newProject') }}">
            @csrf

            {{-- hidden input --}}
            <input type="hidden" name="studentId" value="{{ $studentRegistrationData->student->std_id }}">
            <input type="hidden" name="stdRegId" value="{{ $studentRegistrationData->std_reg_id }}">

            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Select Teacher</label>
              <div class="col-sm-9">
                <select class="form-control" name="assigned_supervisor">
                  <option value="">Select a supervisor</option>
                  @foreach ($teachers as $teacher)
                  <option value="{{ $teacher->tchr_id }}">{{ $teacher->tchr_name }}</option>
                  @endforeach
                </select>
                @error('assigned_supervisor')
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
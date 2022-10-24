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
          {{-- check if previously registered or not --}}
          @unless ( count($studentRegistrationStatus) !== 0 )

          {{-- check current registration is on or not --}}
          @if ($currentTimelineData !== null)
          <form class="" action="{{ route('stdRegistration') }}" method="POST">
            @csrf

            {{-- hidden input for semester and timeline --}}
            <input type="hidden" name="fk_tl_id" value="{{ $timelineItem[0]->timeline->tl_id }}">
            <input type="hidden" name="fk_sem_id" value="{{ $timelineItem[0]->timeline->fk_sem_id }}">

            <div class="mb-3 row">

              @foreach ($fieldItems as $parentItems)
              <label class="col-md-4 col-form-label mb-3">Select Field/Area of {{ $loop->index+1 }}</label>
              <div class="col-md-6 mb-3">
                <select class="form-select" name="field{{ $loop->index+1 }}">
                  <option>Select Field/Area</option>
                  @foreach ($fieldItems as $item)
                  <option value="{{ $item->fld_name }}">{{ $item->fld_name }}</option>
                  @endforeach
                </select>
              </div>
              @endforeach

            </div>
            
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>

          @else
          <p class="text-center text-danger">No registration timeline is available!</p>
          @endif

          {{-- if you already registered --}}
          @else
          <p class="text-center text-danger">You are already registered, Thank you!</p>
          @endunless
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
@extends('layout.main')

{{-- for css --}}
@section('css')

@endsection

@section('main-content')
    <!-- page body starts -->
    <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Student Details</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">Student Details</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <!-- card start -->
            <div class="row">
                <div class="col-sm-6 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h5 class="border-bottom pb-3">Project/Research Details</h5>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <p>
                                        <b>Student Name:</b> {{ $studentDetail->std_name }}
                                    </p>
                                    <p>
                                        <b>Student ID:</b> {{ $studentDetail->std_varsity_id }}
                                    </p>
                                    <p>
                                        <b>Student Email:</b> {{ $studentDetail->std_email }}
                                    </p>
                                    <p>
                                        <b>Student Phone:</b> {{ $studentDetail->std_phone }}
                                    </p>
                                    <p>
                                        <b>Project Name:</b> 
                                        @unless ( $studentDetail->studentProject->std_proj_name === null )
                                        {{ $studentDetail->studentProject->std_proj_name }}
                                        @else
                                        Not Updated
                                        @endunless
                                    </p>
                                    <p>
                                        <b>Project Status:</b> {{ $studentDetail->studentProject->status }}
                                    </p>
                                    <p>
                                        <b>Public Project:</b> {{ $studentDetail->studentProject->public_project }}
                                    </p>
                                    <p>
                                        <a href="" class="btn btn-info">Contact with this student</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h5 class="border-bottom pb-3">Update Student Info</h5>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <form action="{{ route('updateStudentInfo', $studentDetail->studentProject->std_proj_id) }}" method="POST">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Project Name</label>
                                            <div class="col-sm-8">
                                              <input class="form-control" type="text" value="{{ $studentDetail->studentProject->std_proj_name }}" name="std_proj_name" placeholder="Project name..">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Project Status</label>
                                            <div class="col-sm-8">
                                              <select name="status" id="" class="form-control">
                                                <option value="{{ $studentDetail->studentProject->status }}">{{ $studentDetail->studentProject->status }}</option>
                                                @switch( $studentDetail->studentProject->status )
                                                    @case("Done")
                                                        <option value="Started">Started</option>
                                                        <option value="Testing">Testing</option>
                                                        @break
                                                    @case("Started")
                                                        <option value="Testing">Testing</option>
                                                        <option value="Done">Done</option>
                                                        @break
                                                    @case("Testing")
                                                        <option value="Started">Started</option>
                                                        <option value="Done">Done</option>
                                                        @break
                                                    @default
                                                        <option value="Started">Started</option>
                                                        <option value="Testing">Testing</option>
                                                        <option value="Done">Done</option>
                                                @endswitch
                                              </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Public Project</label>
                                            <div class="col-sm-8">
                                                <select name="public_project" id="" class="form-control">
                                                    <option value="{{ $studentDetail->studentProject->public_project }}">{{ $studentDetail->studentProject->public_project }}</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->

        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
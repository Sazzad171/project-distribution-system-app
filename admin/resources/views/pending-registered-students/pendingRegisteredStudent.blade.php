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
            <h3>Pending Registered Students</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Pending Registered Students</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">

      <!-- students table start -->
      <div class="card">
        <div class="card-header p-3">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h6>All Pending Records</h6>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- table -->
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="table-primary">
                <tr>
                  <th>Student Name</th>
                  <th>Student ID</th>
                  <th>Semester</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($studentRegistrationData as $srItem)
                <tr>
                  <td>{{ $srItem->student->std_name }}</td>
                  <td>{{ $srItem->student->std_varsity_id }}</td>
                  <td>{{ $srItem->semester->sem_title }}</td>
                  <td class="text-center">
                    <a href="{{ route('pendingRegisteredStudents.assignSupervisor', $srItem->std_reg_id) }}" class="btn btn-primary-gradien" type="button">Assign Supervisor</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- students table end -->

    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
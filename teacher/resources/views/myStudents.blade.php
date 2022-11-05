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
            <h3>Assigned Students</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Students</li>
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
            <div class="col-md-12">
              <h6>All Students</h6>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- table -->
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="table-primary">
                <tr>
                  <th>Name</th>
                  <th>ID</th>
                  <th>Research/Project Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @unless ( empty($myStudents) )
                @foreach ($myStudents as $stItem)
                <tr>
                  <td>{{ $stItem->std_name }}</td>
                  <td>{{ $stItem->std_varsity_id }}</td>
                  <td class="text-center">
                    <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i>Done</span>
                    <span class="badge badge-light-warning"><i class="me-2" data-feather="rotate-cw"></i>Pending</span>
                    <span class="badge badge-light-info"><i class="me-2" data-feather="clock"></i>In progress</span>
                  </td>
                  <td class="text-end">
                    <a href="{{ $stItem->std_id }}" class="btn btn-success-gradien" type="button"><i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                @endforeach

                @else
                <tr>
                  <td colspan="4">
                    <p class="text-center text-danger">You have no student yet!</p>
                  </td>
                </tr>
                @endunless
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
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
            <h3>Students</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
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
            <div class="col-md-8">
              <h6>All Students</h6>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <a href="{{ route('student.create') }}" class="btn btn-primary">Add New Students</a>
              </p> 
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- table -->
          <div class="table-responsive mb-4">
            <table class="table table-bordered">
              <thead class="table-primary">
                <tr>
                  <th>Name</th>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Intake Semester</th>
                  <th>Research/Project Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @unless (count($students) === 0)

                  @foreach ($students as $student)
                    <tr>
                      <td>{{ $student->std_name }}</td>
                      <td>{{ $student->std_varsity_id }}</td>
                      <td>{{ $student->std_email }}</td>
                      <td>Summer - 2022</td>
                      <td class="text-center">
                        <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i>Done</span>
                        <span class="badge badge-light-warning"><i class="me-2" data-feather="rotate-cw"></i>Pending</span>
                        <span class="badge badge-light-info"><i class="me-2" data-feather="clock"></i>In progress</span>
                      </td>
                      <td class="text-end">
                        <a href="{{ route('student.edit', $student->std_id) }}" class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('student.delete', $student->std_id) }}" class="btn btn-danger-gradien" type="button"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach

                @else
                  <tr>
                    <td colspan="5">
                      <p class="text-center">No student found!</p>
                    </td>
                  </tr>

                @endunless
              </tbody>
            </table>
          </div>

          {{-- pagination --}}
          @if ($students->lastPage() > 1 )
            <ul class="pagination justify-content-center">
                <li class="page-item  {{ $students->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $students->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $students->lastPage(); $i++)
                    <li class="page-item {{ $students->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $students->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $students->currentPage() == $students->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $students->url($students->currentPage() + 1) }}">Next</a>
                </li>
            </ul>
          @endif
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
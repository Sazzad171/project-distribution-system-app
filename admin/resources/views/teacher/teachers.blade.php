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
            <h3>Teachers</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Teachers</li>
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
              <h6>All Teachers</h6>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <a href="{{ route('teacher.create') }}" class="btn btn-primary">Add New Teachers</a>
              </p>
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
                  <th>Email</th>
                  <th>Phone</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @unless (count($teachers) === 0)

                  @foreach ($teachers as $teacher)
                    <tr>
                      <td>{{ $teacher->tchr_name }}</td>
                      <td>{{ $teacher->tchr_email }}</td>
                      <td>{{ $teacher->tchr_phone }}</td>
                      <td>
                        <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i>{{ $teacher->status }}</span>
                      </td>
                      <td class="text-end">
                        <a href="{{ route('teacher.edit', $teacher->tchr_id) }}" class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('teacher.delete', $teacher->tchr_id) }}" class="btn btn-danger-gradien" type="button"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach

                @else
                  <tr>
                    <td colspan="5">
                      <p class="text-center">No data found!</p>
                    </td>
                  </tr>
                @endunless
              </tbody>
            </table>
          </div>

          {{-- pagination --}}
          @if ($teachers->lastPage() > 1 )
            <ul class="pagination justify-content-center">
                <li class="page-item  {{ $teachers->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $teachers->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $teachers->lastPage(); $i++)
                    <li class="page-item {{ $teachers->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $teachers->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $teachers->currentPage() == $teachers->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $teachers->url($teachers->currentPage() + 1) }}">Next</a>
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
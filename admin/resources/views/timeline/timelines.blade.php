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
            <h3>Timeline Records</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Project Timeline Records</li>
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
              <h6>All Project Timeline Records</h6>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <a href="{{ route('timeline.create') }}" class="btn btn-primary">Add New Timeline</a>
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
                  <th>Registered Semester</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Timeline Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @unless (count($timelines) === 0)

                  @foreach ($timelines as $timeline)
                    <tr>
                      <td>{{ $timeline->semester->sem_title }}</td>
                      <td>{{ $timeline->tl_start }}</td>
                      <td>{{ $timeline->tl_end }}</td>
                      <td class="text-center">
                        <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i>Active</span>
                      </td>
                      <td class="text-end">
                        <a href="{{ route('timeline.edit', $timeline->tl_id) }}" class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                  @endforeach

                @else
                  <tr>
                    <td colspan="5">
                      <p class="text-center">No timeline found!</p>
                    </td>
                  </tr>

                @endunless
              </tbody>
            </table>
          </div>

          {{-- pagination --}}
          @if ($timelines->lastPage() > 1 )
            <ul class="pagination justify-content-center">
                <li class="page-item  {{ $timelines->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $timelines->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $timelines->lastPage(); $i++)
                    <li class="page-item {{ $timelines->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $timelines->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $timelines->currentPage() == $timelines->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $timelines->url($timelines->currentPage() + 1) }}">Next</a>
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
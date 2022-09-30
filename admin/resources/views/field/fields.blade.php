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
            <h3>Field/Area</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Field/Area</li>
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
              <h6>All Field/Area</h6>
            </div>
            <div class="col-md-4">
              <p class="text-md-end">
                <a href="{{ route('field.create') }}" class="btn btn-primary">Add New Field/Area</a>
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
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @unless (count($fields) === 0)

                  @foreach ($fields as $field)
                    <tr>
                      <td>{{ $field->fld_name }}</td>
                      <td class="text-center">
                        <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i>Active</span>
                      </td>
                      <td class="text-end">
                        <a href="{{ route('field.edit', $field->fld_id) }}" class="btn btn-warning-gradien" type="button"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('field.delete', $field->fld_id) }}" class="btn btn-danger-gradien" type="button"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach

                @else
                  <tr>
                    <td colspan="5">
                      <p class="text-center">No field found!</p>
                    </td>
                  </tr>

                @endunless
              </tbody>
            </table>
          </div>

          {{-- pagination --}}
          @if ($fields->lastPage() > 1 )
            <ul class="pagination justify-content-center">
                <li class="page-item  {{ $fields->currentPage() == 1 ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $fields->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $fields->lastPage(); $i++)
                    <li class="page-item {{ $fields->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $fields->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $fields->currentPage() == $fields->lastPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $fields->url($fields->currentPage() + 1) }}">Next</a>
                </li>
            </ul>
          @endif
        </div>
      </div>
      <!-- field table end -->

    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
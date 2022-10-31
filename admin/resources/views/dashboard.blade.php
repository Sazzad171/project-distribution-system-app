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
                <h3>Dashboard</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <!-- current openings registration start -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <h5 class="border-bottom pb-3">Current Opening Registration</h5>
                        </div>

                        @unless ( count($currentTimelineData) === 0 )
                        @foreach ( $currentTimelineData as $ctItem )
                        <div class="col-md-4 mb-1">
                            <h6 class="text-success">Start Date:</h6>
                            <p class="text-secondary">{{ \Carbon\Carbon::parse($ctItem->tl_start)->format('j F Y h:i:s A') }}</p>
                        </div>
                        <div class="col-md-4 mb-1">
                            <h6 class="text-danger">End Date:</h6>
                            <p class="text-secondary">{{ \Carbon\Carbon::parse($ctItem->tl_end)->format('j F Y h:i:s A') }}</p>
                        </div>
                        <div class="col-md-4 mb-1">
                            <h6 class="text-primary">Semester</h6>
                            <p class="text-secondary">{{ $ctItem->semester->sem_title }}</p>
                        </div>
                        @endforeach
                        @else
                        <p class="text-center text-danger">No Current Registration Timeline is Running</p>
                        @endunless
                    </div>
                </div>
            </div>
            <!-- current openings registration end -->

            <!-- total teacher and student card start -->
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg></div>
                        <div class="media-body"><span>Total Teachers</span>
                        <h4 class="mt-1 counter">{{ $teachers }}</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-plus icon-bg">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-info b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg></div>
                        <div class="media-body"><span>Total Students</span>
                        <h4 class="mt-1 counter">{{ $students }}</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-plus icon-bg">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- total teacher and student card end -->

        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

{{-- for js  --}}
@section('js')

@endsection
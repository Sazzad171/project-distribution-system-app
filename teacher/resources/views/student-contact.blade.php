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
                <h3>Contact with Student</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">Contact with Student</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">

            <!-- card start -->
            <div class="row">
              {{-- text message --}}
              <div class="col-sm-6 col-xl-6 col-lg-6">
                  <div class="card chat-default">
                      <div class="card-header p-4">
                        <div class="media media-dashboard">
                          <div class="media-body"> 
                            <h6 class="mb-0">Yours Conversation</h6>
                          </div>
                        </div>
                      </div>
                      <div class="card-body chat-box">
                          <form action="{{ route('storeMessage') }}" method="POST" class="mb-4">
                            @csrf
                              <div class="input-group mt-0">
                                  <input class="form-control" type="text" placeholder="Type Your Message..." name="message" required>
                                  <button type="submit" class="send-msg border-0"><i data-feather="send"></i></button>
                              </div>
                          </form>
                          <div class="chat">
                              @if ( !empty($myMessages) )

                              @foreach ( $myMessages as $msItem )

                              @if ( $msItem->fk_teacher_id === null )
                              {{-- teacher --}}
                              <div class="media left-side-chat my-2">
                                  <div class="media-body d-flex">
                                      <div class="img-profile"> <img class="img-fluid" src="{{ asset('public/assets/images/user/user.png') }}" alt="Profile"></div>
                                      <div class="main-chat">
                                          <div class="message-main"><span class="mb-0">{{ $msItem->msg_text }}</span></div>
                                      </div>
                                  </div>
                                  <p class="f-w-400">{{ $msItem->created_at->diffForHumans() }}</p>
                              </div>

                              @else
                              {{-- student --}}
                              <div class="media right-side-chat">
                                  <p class="f-w-400">{{ $msItem->created_at->diffForHumans() }}</p>
                                  <div class="media-body text-end">
                                      <div class="message-main pull-right"><span class="mb-0 text-start">{{ $msItem->msg_text }}</span>
                                          <div class="clearfix"></div>
                                      </div>
                                  </div>
                              </div>
                              @endif

                              @endforeach

                              @else
                              <p class="text-center">No Conversation Yet!</p>
                              @endif

                              {{-- pagination --}}
                              @if ($myMessages->lastPage() > 1 )
                              <ul class="pagination justify-content-center">
                                <li class="page-item  {{ $myMessages->currentPage() == 1 ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $myMessages->url(1) }}">Previous</a>
                                </li>
                                <li class="page-item {{ $myMessages->currentPage() == $myMessages->lastPage() ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $myMessages->url($myMessages->currentPage() + 1) }}">Next</a>
                                </li>
                              </ul>
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
                
              {{-- file message --}}
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <div class="card chat-default">
                    <div class="card-header p-4">
                      <div class="media media-dashboard">
                        <div class="media-body"> 
                          <h6 class="mb-0">Yours Shared Files</h6>
                        </div>
                      </div>
                    </div>
                    <div class="card-body chat-box">
                        <form action="" method="POST" class="mb-4">
                          @csrf
                            
                        </form>
                        <div class="chat">
                            {{-- @if ( !empty($myMessages) )

                            @foreach ( $myMessages as $msItem )

                            @if ( $msItem->fk_teacher_id === null ) --}}
                            {{-- teacher --}}
                            <div class="media left-side-chat my-2">
                                <div class="media-body d-flex">
                                    <div class="img-profile"> <img class="img-fluid" src="{{ asset('public/assets/images/user/user.png') }}" alt="Profile"></div>
                                    <div class="main-chat">
                                        <div class="message-main"><span class="mb-0">fsd</span></div>
                                    </div>
                                </div>
                                <p class="f-w-400">1 day</p>
                            </div>

                            {{-- @else --}}
                            {{-- student --}}
                            <div class="media right-side-chat">
                                <p class="f-w-400">1 day</p>
                                <div class="media-body text-end">
                                    <div class="message-main pull-right"><span class="mb-0 text-start">test</span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- @endif --}}

                            {{-- @endforeach --}}

                            {{-- @else --}}
                            <p class="text-center">No Conversation Yet!</p>
                            {{-- @endif --}}

                            {{-- pagination --}}
                            @if ($myMessages->lastPage() > 1 )
                            <ul class="pagination justify-content-center">
                              <li class="page-item  {{ $myMessages->currentPage() == 1 ? ' disabled' : '' }}">
                                  <a class="page-link" href="{{ $myMessages->url(1) }}">Previous</a>
                              </li>
                              <li class="page-item {{ $myMessages->currentPage() == $myMessages->lastPage() ? ' disabled' : '' }}">
                                  <a class="page-link" href="{{ $myMessages->url($myMessages->currentPage() + 1) }}">Next</a>
                              </li>
                            </ul>
                            @endif
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
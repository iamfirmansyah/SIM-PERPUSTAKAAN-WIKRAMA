@extends('admin.layouts.app',['page'=>'Email'])

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('admin.email.sidebar')
                    <div class="col-10">
                        <div class="btn-group mb-5">
                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-dark dropdown-toggle"
                                type="button">More <span class="caret m-l-5"></span>
                            </button>
                            <div class="dropdown-menu"><span class="dropdown-header">More Option :</span>
                                <a href="" class="dropdown-item">Mark as Read</a>
                                <a href="" class="dropdown-item">Add to Tasks</a>
                                <a href="" class="dropdown-item">Add Star</a>
                                <a href="" class="dropdown-item">Mute</a>
                            </div>
                        </div>
                        @if(session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong> {{session('warning')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @foreach ($emails as $email)
                        <a href="{{ route('email.show', $email->id) }}"
                            class="nav-link {{ ($email->status == 'unread') ? 'active bg-secondary' : '' }} col-12 mb-1 ">

                            <div class="custom-control custom-checkbox mr-3">
                                <input class="custom-control-input" id="customCheck{{$i}}" type="checkbox">
                                <label class="custom-control-label"
                                    for="customCheck{{$i++}}">{{ $email->subject }}</label>
                                <div class="">{{ substr($email->message, 0, 130) }} ... <span class="float-right">
                                        {{$email->created_at->format('d M, Y')}}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        {{-- <span class="float-right mt-5"> {!! $emails->links() !!}</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
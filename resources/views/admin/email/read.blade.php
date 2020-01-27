@extends('admin.layouts.app',['page'=>'Email'])

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('admin.email.sidebar')
                    <div class="col-10">
                        <form action="" method="post" class="form-group btn-group mb-5">
                            <a class="btn btn-outline-secondary mr-1" href="">
                                <span class="btn-inner--icon"><i class="fa fa-exclamation-circle"></i></span>
                            </a>
                            <a class="btn btn-outline-secondary mr-1" href="">
                                <span class="btn-inner--icon"><i class="fa fa-book-reader"></i></span>
                            </a>
                            <a class="btn btn-outline-secondary" href="{{ route('email_destroy', $email->id) }}">
                                <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                            </a>
                        </form>
                        <div class="row">
                            <div class="media align-items-center">
                                <span class="avatar avatar-md rounded-circle">
                                    <img alt="Image placeholder" src="{{asset('admin/img/theme/team-4-800x800.jpg')}}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="text-sm  font-weight-bold">{{ $email->name }}</span>
                                    <br>
                                    <small class="bg-secondary">{{ $email->created_at->format('d M, Y') }}</small>
                                </div>
                            </div>
                        </div>
                        <hr class="row">
                        <div class="row">
                            <span class="col text-primary display-4">{{ $email->subject }}</span>
                            <div class="col-12"><span
                                    class="float-right mr-3">{{ $email->created_at->format('H:i:d') }}</span>
                            </div>

                            <p class="col mt-3">
                                {{ $email->message }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
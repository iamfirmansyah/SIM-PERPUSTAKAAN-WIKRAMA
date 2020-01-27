@extends('admin.layouts.app',['page'=>'Akun'])

@section('content')

<div class="row">
    @include('admin.akun.card')
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">My account</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('akun_edit', Auth::user()->id) }}" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong> {{session('warning')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Username</label>
                                <input type="text" id="input-username" readonly
                                    class="bg-white form-control form-control-alternative" placeholder="Username"
                                    value="{{ Auth::user()->username }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" readonly
                                    class="bg-white form-control form-control-alternative"
                                    placeholder="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Full Name</label>
                                <input type="text" readonly id="input-first-name"
                                    class="bg-white   form-control form-control-alternative" placeholder="First name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Title</label>
                                <input type="text" id="input-last-name" readonly
                                    class="bg-white form-control form-control-alternative" placeholder="title"
                                    value="{{ Auth::user()->title }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Position</label>
                                <input type="text" id="input-last-name" readonly
                                    class="bg-white form-control form-control-alternative" placeholder="position"
                                    value="{{ Auth::user()->position }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Password</label>
                                <input type="password" readonly id="input-first-name"
                                    class="bg-white   form-control form-control-alternative" placeholder="password"
                                    value="">
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control form-control-alternative"
                                    placeholder="Home Address" value="{{ Auth::user()->address }}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">instagram</label>
                                <input type="text" id="input-city" readonly
                                    class="bg-white form-control form-control-alternative"
                                    placeholder="www.instagram.com/" value="{{ Auth::user()->instagram }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">twitter</label>
                                <input type="text" id="input-country" readonly
                                    class="bg-white form-control form-control-alternative"
                                    placeholder="www.twitter.com/" value="{{ Auth::user()->twitter }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">github</label>
                                <input type="text" id="input-postal-code" readonly
                                    class="bg-white form-control form-control-alternative" placeholder="www.github.com/"
                                    value="{{ Auth::user()->github }}">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                    <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" readonly class="bg-white form-control form-control-alternative"
                            placeholder="A few words about you ...">{{ Auth::user()->about_me }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
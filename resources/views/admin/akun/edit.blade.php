@extends('admin.layouts.app',['page'=>'akun'])

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
                    <!--                 <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('akun_update', $user->id) }}">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Username</label>
                                    <input type="text" name="username" id="input-username"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email address</label>
                                    <input type="email" name="email" id="input-email"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Full Name</label>
                                    <input type="text" name="name" id="input-first-name"
                                        class="bg-white   form-control form-control-alternative"
                                        value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Title</label>
                                    <input type="text" name="title" name="title" id="input-last-name"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->title }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Position</label>
                                    <input type="text" name="position" id="input-last-name"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->position }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" name="password" hidden
                                        class=" bg-white form-control form-control-alternative"
                                        value="{{ $user->password }}" id="myInput">
                                    <span>
                                    </span>

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
                                    <input name="address" id="input-address"
                                        class="form-control form-control-alternative" placeholder="Home Address"
                                        value="{{ $user->address }}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">instagram</label>
                                    <input type="text" name="instagram" id="input-city"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->instagram }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">twitter</label>
                                    <input type="text" name="twitter" id="input-country"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->twitter }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">github</label>
                                    <input type="text" name="github" id="input-postal-code"
                                        class="bg-white form-control form-control-alternative"
                                        value="{{ $user->github }}">
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
                            <textarea rows="4" class="bg-white form-control form-control-alternative"
                                name="about_me">{{ $user->about_me }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-danger float-right">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
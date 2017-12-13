@extends('layouts.app')

@section('content')
<section class="page-section mb-sm-70 mb-xs-20 mt-sm-70 mt-xs-30">
    <div class="container relative">

        <!-- Nav Tabs -->
        {{-- <div class="align-center mb-40 mb-xxs-30">
            <ul class="nav nav-tabs tpl-minimal-tabs">

                <li class="active">
                    <a href="#mini-one" data-toggle="tab">Login</a>
                </li>

                <li>
                    <a href="#mini-two" data-toggle="tab">Registration</a>
                </li>

            </ul>
        </div> --}}
        <!-- End Nav Tabs -->

        <!-- Tab panes -->
        <div class="tab-content tpl-minimal-tabs-cont section-text">

            <div class="tab-pane fade in active" id="mini-one">

                <!-- Login Form -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                      <div class="alert custome">
                        @if (session('Status'))
                            <i class="fa fa-lg fa-check-circle-o"></i>
                            {{ session('Status')}}
                        @endif
                      </div>

                        <form class="form contact-form" id="contact_form" method="POST" action="{{ route('user.login') }}">
                          {{ csrf_field() }}
                            <div class="clearfix">

                                <!-- Username -->
                                <div class="form-group{{ $errors->any() ? ' has-error' : '' }}">
                                    <input type="text" name="username" id="username" class="input-md round form-control" placeholder="Username" pattern=".{3,100}" value="{{ old('username') }}">
                                </div>
                                @if ($errors->any())
                                    <span class="help-block">
                                        <strong>{{ $errors->first() }}</strong>
                                    </span>
                                @endif

                                <!-- Password -->
                                <div class="form-group{{ $errors->any() ? ' has-error' : '' }}">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}">
                                </div>
                                @if ($errors->any())
                                    <span class="help-block">
                                        <strong>{{ $errors->first() }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="clearfix">

                                <div class="cf-left-col">

                                    <!-- Inform Tip -->
                                    <div class="form-tip pt-20">
                                        <a href="{{ route('user.password.request') }}"></a>
                                    </div>

                                </div>

                                <div class="cf-right-col">

                                    <!-- Send Button -->
                                    <div class="align-right pt-10">
                                        <button class="submit_btn btn btn-mod btn-medium btn-round" id="login-btn">Login</button>
                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
                <!-- End Login Form -->

            </div>

            {{-- <div class="tab-pane fade" id="mini-two">

                <!-- Registry Form -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">

                        <form class="form contact-form" id="contact_form" method="POST" action="{{ route('user.register.submit') }}">
                          {{ csrf_field() }}
                            <div class="clearfix">

                                <!-- Email -->
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="text" name="email" id="email" class="input-md round form-control" placeholder="email" pattern=".{3,100}" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <!-- Username -->
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" name="name" id="name" class="input-md round form-control" placeholder="name" pattern=".{3,100}" value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                <!-- Password -->
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <!-- Re-enter Password -->
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password-password_confirmation" class="input-md round form-control" placeholder="Re-enter Password" pattern=".{5,100}" required>
                                </div>

                            </div>

                            <!-- Send Button -->
                            <div class="pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Register</button>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- End Registry Form -->

            </div> --}}

        </div>

    </div>
</section>
@endsection

@extends('client.layout')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('get.login') }}">
            @csrf
            <div id="login-form" class="form-container" data-form-container
                 style="color: rgb(198, 40, 40); background: rgb(255, 205, 210);">
                <div class="row">
                    <div class="form-title">
                        <span class="card-header">{{ __('Login') }}</span>
                    </div>
                </div>
                <div class="input-container">
                    <div class="row">
                        <input type="email" name="email" data-min-length="8"
                               placeholder="{{ __('E-Mail Address') }}">
                        @error('email')
                        <span class="req-input invalid">
                                                        <span class="input-status" data-toggle="tooltip"
                                                              data-placement="top"
                                                              title="Input your email."> </span>
                                                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <input type="password" name="password" data-min-length="8"
                               placeholder="{{ __('Password') }}">
                        @error('password')
                        <span class="req-input input-password invalid">
                                                            <span class="input-status" data-toggle="tooltip"
                                                                  data-placement="top"
                                                                  title="Password must be at least 8 characters long."> </span>
                                                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <a href="{{ route('get.register') }}" class="create-account " style="padding-left: 182px">
                            Create an
                            Account </a>
                    </div>

                    <div class="row submit-row">
                        <button type="submit" class="btn btn-block submit-form invalid">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class=" btn-link" style="padding-left: 171px"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="oauth-buttons">
                        <span><i class="fa fa-facebook"></i> </span>
                        <span><i class="fa fa-google-plus"></i> </span>
                        <span><i class="fa fa-linkedin"></i> </span>
                        <span><i class="fa fa-twitter"></i> </span>
                    </div>


                </div>
            </div>
        </form>


        {{--        <div class="row justify-content-center">--}}
        {{--            <div class="col-md-8">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-header">{{ __('Login') }}</div>--}}

        {{--                    <div class="card-body">--}}
        {{--                        <form method="POST" action="{{ route('login') }}">--}}
        {{--                            @csrf--}}

        {{--                            <div class="form-group row">--}}
        {{--                                <label for="email"--}}
        {{--                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

        {{--                                <div class="col-md-6">--}}
        {{--                                    <input id="email" type="email"--}}
        {{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
        {{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

        {{--                                    @error('email')--}}
        {{--                                    <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                                    @enderror--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                            <div class="form-group row">--}}
        {{--                                <label for="password"--}}
        {{--                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

        {{--                                <div class="col-md-6">--}}
        {{--                                    <input id="password" type="password"--}}
        {{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
        {{--                                           required autocomplete="current-password">--}}

        {{--                                    @error('password')--}}
        {{--                                    <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                                    @enderror--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                            <div class="form-group row">--}}
        {{--                                <div class="col-md-6 offset-md-4">--}}
        {{--                                    <div class="form-check">--}}
        {{--                                        <input class="form-check-input" type="checkbox" name="remember"--}}
        {{--                                               id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

        {{--                                        <label class="form-check-label" for="remember">--}}
        {{--                                            {{ __('Remember Me') }}--}}
        {{--                                        </label>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                            <div class="form-group row mb-0">--}}
        {{--                                <div class="col-md-8 offset-md-4">--}}
        {{--                                    <button type="submit" class="btn btn-primary">--}}
        {{--                                        {{ __('Login') }}--}}
        {{--                                    </button>--}}

        {{--                                    @if (Route::has('password.request'))--}}
        {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
        {{--                                            {{ __('Forgot Your Password?') }}--}}
        {{--                                        </a>--}}
        {{--                                    @endif--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </form>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection


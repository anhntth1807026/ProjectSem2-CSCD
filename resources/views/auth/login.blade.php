@extends('client.layout')

@section('content')

    <div class="container" style="width: 35%">
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
                        <a href="{{ route('get.register') }}" class="create-account " >
                            Create an
                            Account </a>
                    </div>

                    <div class="row submit-row">
                        <button type="submit" class="btn btn-block submit-form invalid">
                            {{ __('Login') }}
                        </button>

                        <a class=" btn-link" href="{{ route('form.reset.password') }}" target="_blank">
                            Quên mật khẩu ?
                        </a>

                    </div>
                    <div class="oauth-buttons">
                        <span><i class="fa fa-facebook"></i></span>
                        <span><a href="{{ route('login.google') }}"><i class="fa fa-google-plus"></i> </a> </span>
                        <span><i class="fa fa-linkedin"></i> </span>
                        <span><i class="fa fa-twitter"></i> </span>
                    </div>


                </div>
            </div>
        </form>

    </div>

@endsection


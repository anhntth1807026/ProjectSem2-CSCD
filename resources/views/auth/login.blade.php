@extends('layouts.app')
{{--@extends('admin.layout.master')--}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--    <!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <title>SimpleAdminLTE 2 | Log in</title>--}}
{{--    <!-- Tell the browser to be responsive to screen width -->--}}
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}
{{--    <!-- Bootstrap 3.3.6 -->--}}
{{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="{{asset('fonts/ionicons.min.css')}}">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">--}}

{{--    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">--}}

{{--    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}

{{--    <![endif]-->--}}
{{--</head>--}}
{{--<body class="hold-transition login-page">--}}
{{--<div class="login-box">--}}
{{--    <div class="login-logo">--}}
{{--        <a href=""><b>Admin </b></a>--}}
{{--    </div>--}}
{{--    <!-- /.login-logo -->--}}
{{--    <div class="login-box-body">--}}
{{--        <p class="login-box-msg">Sign in to start your session</p>--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            <div class="form-group has-feedback">--}}
{{--                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                       value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                @error('email')--}}
{{--                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                @enderror--}}
{{--                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
{{--            </div>--}}
{{--            <div class="form-group has-feedback">--}}
{{--                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
{{--                       name="password" required autocomplete="current-password">--}}

{{--                @error('password')--}}
{{--                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                @enderror--}}
{{--                <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-8">--}}
{{--                    <div class="checkbox icheck">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-xs-4">--}}
{{--                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--        </form>--}}


{{--        <!-- /.social-auth-links -->--}}


{{--    </div>--}}
{{--    <!-- /.login-box-body -->--}}
{{--</div>--}}
{{--<!-- /.login-box -->--}}

{{--<!-- jQuery 2.2.3 -->--}}
{{--<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>--}}
{{--<!-- Bootstrap 3.3.6 -->--}}
{{--<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>--}}
{{--<!-- iCheck -->--}}
{{--<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>--}}
{{--<script>--}}
{{--    $(function () {--}}
{{--        $('input').iCheck({--}}
{{--            checkboxClass: 'icheckbox_square-blue',--}}
{{--            radioClass: 'iradio_square-blue',--}}
{{--            increaseArea: '20%' // optional--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}

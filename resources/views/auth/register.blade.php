@extends('client.layout')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('get.register') }}">
            @csrf
            <div id="register" class="form-container" data-form-container
                 style="color: rgb(198, 40, 40); background: rgb(255, 205, 210);">
                <div class="row">
                    <div class="form-title">
                        <span class="card-header">{{ __('Register') }}</span>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-container">
                    <div class="row form-inline">
                        <div class="col-12">
                            <div class="col-6">
                                <input type="text" name="name" data-min-length="3"
                                       placeholder="{{ __('Name') }}">
                            </div>
                            <div class="col-6">
                                <input type="number" name="age" data-min-length="1" style="margin-bottom: 31px "
                                       placeholder="{{ __('Age') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <input type="email" name="email" data-min-length="8"
                               placeholder="{{ __('E-Mail Address') }}">
                    </div>

                    <div class="row">
                        <input type="password" name="password" data-min-length="8"
                               placeholder="{{ __('Password') }}">
                    </div>

                    <div class="row" style="display:none">
                        <span class="req-input confirm-password">
                            <span class="input-status" data-toggle="tooltip" data-placement="top"
                                  title="Password Must Match Initial Password Field."> </span>
                            <input type="password" data-min-length="8" placeholder="Confirm Password">
                        </span>
                    </div>

                    <div class="row">
                        <input type="text" name="address" data-min-length="5"
                               placeholder="{{ __('Address') }}">
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="col-6 form-inline">
                                <input type="number" name="phone" data-min-length="10"
                                       placeholder="{{ __('Phone') }}">
                            </div>

                            <div class="col-6">
                                <select name="gender" class="form-control">
                                    <option selected value="">Gender</option>
                                    <option value="Nam">Male</option>
                                    <option value="Nữ">Female</option>
                                    <option value="Khác">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row submit-row">
                        <button type="submit" class="btn btn-block submit-form invalid">
                            {{ __('Register') }}
                        </button>
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
    </div>
@endsection

@extends('client.layout')
<head>
    <title>Profile</title>
</head>
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <style>
            /*body {*/
            /*    background: -webkit-linear-gradient(left, #cce0cc, #4CAF50);*/
            /*}*/

            body {
                background-image: url('http://127.0.0.1:8000/img/blog/cover1.jpg');
            }

            .form-profile {
                margin-bottom: 50px;
            }

            .form-profile .col-md-4 {
                text-align: center;
            }

            .form-profile-user .col-md-3 {
                margin-top: 10px;
            }

            .emp-profile {
                padding: 3%;
                margin-top: 3%;
                margin-bottom: 3%;
                border-radius: 0.5rem;
                background: #fff;
            }

            .profile-img {
                text-align: center;
            }

            .profile-img img {
                width: 70%;
                height: 30%;
            }

            .profile-img .file {
                position: relative;
                overflow: hidden;
                margin-top: -11%;
                width: 70%;
                border: none;
                border-radius: 0;
                background: #212529b8;
            }

            .profile-img .file input {
                position: absolute;
                opacity: 0;
                right: 0;
                top: 0;
            }

            .profile-head h5 {
                color: #333;
            }

            .profile-head h6 {
                color: #0062cc;
            }

            .profile-edit-btn {
                border: none;
                border-radius: 1.5rem;
                width: 70%;
                padding: 2%;
                font-weight: 600;
                color: #6c757d;
                cursor: pointer;
            }

            .profile-rating {
                font-size: 12px;
                color: #818182;
                margin-top: 5%;
            }

            .profile-rating span {
                color: #495057;
                font-size: 15px;
                font-weight: 600;
            }

            .profile-head .nav-tabs {
                margin-bottom: 5%;
            }

            .profile-head .nav-tabs .nav-link {
                font-weight: 600;
                border: none;
            }

            .profile-head .nav-tabs .nav-link.active {
                border: none;
                border-bottom: 2px solid #0062cc;
            }

            .profile-work {
                padding: 14%;
            }

            .profile-work p {
                font-size: 12px;
                color: #818182;
                font-weight: 600;
                margin-top: 10%;
            }

            .profile-work a {
                padding: 10px;
                text-decoration: none;
                color: #495057;
                font-weight: 600;
                float: left;
            }

            .profile-work ul {
                list-style: none;
            }

            .profile-tab label {
                font-weight: 600;
            }

            .profile-tab p {
                font-weight: 600;
                color: #0062cc;
            }
        </style>
    @endpush
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
    @endpush
    <div class="container emp-profile" style="margin-top: 70px; background: #f4f4f4">
        <div class="row form-profile">
{{--            <div class="col-md-4">--}}
{{--                Trang chủ--}}
{{--            </div>--}}
            <div class="col-md-8" style="text-align: center">
                <strong>Thông tin tài khoản</strong>
            </div>
        </div>
        <div class="row">
{{--            <div class="col-md-4">--}}
{{--                <form method="post" enctype="multipart/form-data">--}}
{{--                    <div class="profile-img">--}}
{{--                        <img--}}
{{--                            src="https://avatars.servers.getgo.com/2205256774854474505_medium.jpg"--}}
{{--                            alt=""/>--}}
{{--                        <div class="file btn btn-lg btn-primary">--}}
{{--                            Change Photo--}}
{{--                            <input type="file" class="form-control" multiple="multiple" style="height:150px"--}}
{{--                                   name="thumbnail[]"--}}
{{--                                   placeholder="Thumbnail">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <div class="profile-work">--}}
{{--                        <a href=""><i class="fas fa-users"></i>&nbsp; Thông tin tài khoản</a><br/>--}}
{{--                        <a href=""><i class="fas fa-bell"></i>&nbsp;&nbsp; Thông báo</a><br/>--}}
{{--                        <a href=""><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp; Quản lí đơn hàng</a>--}}
{{--                    </div>--}}
{{--            </div>--}}
            <div class="container form-profile-user">
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
                <form action="{{ route('admin.update.user', Auth::user()->id)}}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Họ tên</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Email</p>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" name="email" value="{{ Auth::user()->email }}"
                                   type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Mật khẩu</p>
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password" value="{{ Auth::user()->password  }}"
                                   class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Tuổi</p>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="age" value="{{ Auth::user()->age }}"
                                   class="form-control" placeholder="Age">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Địa chỉ</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="address" value="{{ Auth::user()->address }}"
                                   class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Số điện thoại</p>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="phone" value="{{ Auth::user()->phone }}"
                                   class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <p>Giới tính</p>
                        </div>
                        <div class="col-md-6">
                            <select name="gender" class="form-control">
                                <option value="">{{ Auth::user()->gender }}</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6" style="margin-top: 25px">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

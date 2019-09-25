@extends('client.layout')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">Xác nhận giao dịch thành công !</h1>
        <p class="lead"><strong>Cảm ơn bạn đã chung tay bảo vệ môi trường!</strong> </p>
        <hr>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{ route('home') }}" role="button">Quay lại trang chủ.</a>
        </p>
    </div>
@endsection

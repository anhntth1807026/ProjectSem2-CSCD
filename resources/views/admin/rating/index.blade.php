@extends('admin.layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('admin.list.rating')}}">Đánh giá</a>
                </li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </div>
        <div class="table-responsive">
            <h2>Quản lí đánh giá</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên thành viên</th>
                    <th>Sản phẩm</th>
                    <th>Đánh giá</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>

                </tr>
                </thead>
                <tbody>
                @foreach($ratings as $rating )
                    <tr>
                        <td>{{ $rating->id }}</td>
                        <td>{{ isset($rating->users->name) ? $rating->users->name : '[N/A]' }}</td>
                        <td>{{ isset($rating->product->name) ? $rating->product->name : '[N/A]' }}</td>
                        <td>{{ $rating->rate_content }}</td>
                        <td>{{ $rating->rate_number }}</td>
                        <td>
                            {{--                            <a href="" class="btn "><i class="fas fa-trash-alt"></i> Xoá</a>--}}
                            <a class="btn btn-default " href=""><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection




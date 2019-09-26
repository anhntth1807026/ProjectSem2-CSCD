@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.list.transaction') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
            </ol>
        </div>
        <div class="row">
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
            <div class="col-9">
                @if($orders)
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành Tiền</th>
{{--                            <th>Thao tác</th>--}}
                        </tr>
                        </thead>
                        <tbody id="cart-body">
                        <?php $i = 1 ?>
                        @foreach($orders as $key => $order)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ isset($order->product->name) ? $order->product->name : ''}}</td>
                                <td>
                                    <img style="width: 70px; height: 60px;" src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{ isset($order->product->thumbnail) ? $order->product->thumbnail : '' }}" alt="">
                                </td>
                                <td>{{ number_format($order->or_price, 0, ',', '.') }}đ</td>
                                <td>{{ $order->or_quantity }}</td>
                                <td>{{ number_format($order->or_quantity * $order->or_price, 0, ',', '.') }}đ</td>
{{--                                <td>--}}
{{--                                    <a href=""><i class="fa fa-trash-o"></i> Delete</a>--}}
{{--                                </td>--}}
                            </tr>
                            <?php $i ++?>
                        @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <nav aria-label="Page navigation example">
                            {{$orders->links()}}
                        </nav>
                    </div>
                </div>
        </div>
    </div>
@endsection

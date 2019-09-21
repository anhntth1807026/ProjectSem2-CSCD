@extends('client.layout')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{ route('home') }}">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Giỏ hàng</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- Shopping Table Container -->
    <div class="cart-area-start">
        <div class="container">
            @if(\Cart::count() >= 1)
            <div class="area-title">
                <h2>Giỏ hàng của bạn</h2>
            </div>

            <!-- Shopping Cart Table -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="cart-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành Tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody id="cart-body">
                                <?php $i = 1?>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>#{{ $i }}</td>
                                        <td><a href="">{{ $product->name }}</a></td>
                                        <td>
                                            <img style="width: 70px; height: 60px;"
                                                 src="{{$product->options->thumbnail}}" alt="{{ $product->name }}">
                                        </td>
                                        <td>{{ number_format($product->price, 0, ',', '.') }}đ</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="{{ $product->qty }}"
                                                       onchange="updateCart(this.value, '{{ $product->rowId }}')">
                                            </div>
                                        </td>
                                        <td>{{ number_format($product->qty * $product->price, 0, ',', '.') }}đ</td>
                                        <td>
                                            {{--                                                <a href=""><i class="fa fa-pencil"></i>  Edit</a>--}}
                                            {{--                                            <hr>--}}
                                            {{--                                                <a href=" {{ route('delete.shopping.cart', $key) }}"><i class="fa fa-trash-o"></i> Delete</a>--}}
                                            <a href=" {{ route('delete.shopping.cart', $key) }}"><i
                                                    class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++?>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row" id="">
                                <div class="col-md-12">
                                    <a href="" class="btn">Cập nhật</a>
                                    <a href="{{ asset('/shopping/delete/all') }}" class="btn">Xoá giỏ hàng</a>
                                    <h6 class="pull-right">Tổng tiền cần thanh toán {{ Cart::subtotal() }} <a
                                            href="{{ route('form.pay') }}" class="btn btn-success">Thanh Toán</a></h6>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            @else
                <div class="area-title">
                    <h2>Giỏ hàng của bạn trống</h2>
                </div>
            @endif
        </div>
    </div>
    <script type="text/javascript">
        function updateCart(qty, rowId) {
            $.get(
                '{{ route('update.shopping.cart') }}',
                {qty: qty, rowId: rowId},
                function () {
                    location.reload();
                }
            );
        }
    </script>
@endsection

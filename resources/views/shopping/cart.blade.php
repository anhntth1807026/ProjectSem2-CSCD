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
                                            <img style="width: 70px; height: 60px;" src="{{$product->options->thumbnail}}" alt="{{ $product->name }}">
                                        </td>
                                        <td>{{ number_format($product->price, 0, ',', '.') }}đ</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>{{ number_format($product->qty * $product->price, 0, ',', '.') }}đ</td>
                                        <td>
                                                <a href=""><i class="fa fa-pencil"></i>  Edit</a>
                                            <hr>
                                                <a href=""><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i ++?>
                                @endforeach
                            </tbody>
                        </table>
                        <h6 class="pull-right">Tổng tiền cần thanh toán {{ Cart::subtotal() }}  <a href="" class="btn btn-success">Thanh Toán</a></h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            var shoppingCartJson = localStorage.getItem('shopping-cart');--}}
{{--            if (shoppingCartJson == null) {--}}
{{--                alert('Hiện tại không có sản phẩm nào trong giỏ hàng!');--}}
{{--                return;--}}
{{--            }--}}

{{--            var shoppingCart = JSON.parse(shoppingCartJson);--}}
{{--            var htmlContent = '';--}}
{{--            for (var productId in shoppingCart) {--}}
{{--                var cartItem = shoppingCart[productId];--}}
{{--                htmlContent +=--}}
{{--                    `<tr>--}}
{{--                        <td style="width: 10px"> ${cartItem.id} </td>--}}
{{--                        <td>--}}
{{--                            <h6>${cartItem.name}</h6>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="#"><img src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_300,h_350/${cartItem.thumbnail}" alt="${cartItem.name}" class="img-responsive" /></a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <div class="cart-price">${cartItem.price}</div>--}}
{{--                        </td>--}}
{{--                        <td>--}}

{{--                            <input type="button" class="btn-minus" value="-">--}}
{{--                            <input type="text" min="1" value="${cartItem.quantity}">--}}
{{--                            <input type="button" class="btn-add" value="+">--}}

{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <div class="cart-subtotal">${cartItem.price * cartItem.quantity}</div>--}}
{{--                        </td>--}}
{{--                        <td><a href="#"><i class="fa fa-times"></i></a></td>--}}
{{--                </tr>`--}}
{{--                ;--}}
{{--            }--}}

{{--            $('#cart-body').html(htmlContent);--}}


{{--            $('.btn-add').click(function () {--}}
{{--                let input = $(this).next();--}}
{{--                var currentValue = parseInt(input.val());--}}
{{--                input.val(currentValue + 1);--}}

{{--            });--}}
{{--            $('.btn-minus').click(function () {--}}
{{--                let input = $(this).prev();--}}
{{--                var currentValue = parseInt(input.val());--}}
{{--                if (currentValue > 1) {--}}
{{--                    input.val(currentValue - 1);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
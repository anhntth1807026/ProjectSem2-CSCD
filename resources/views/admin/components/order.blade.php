@if($orders)
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
        @foreach($orders as $key => $order)
            <tr>
                <td>#{{ $i }}</td>
                <td><a href="">{{ $order->name }}</a></td>
                <td>
                    <img style="width: 70px; height: 60px;" src="{{$order->options->thumbnail}}" alt="{{ $product->name }}">
                </td>
                <td>{{ number_format($order->or_price, 0, ',', '.') }}đ</td>
                <td>{{ $order->or_quantity }}</td>
                <td>{{ number_format($order->or_quantity * $order->or_price, 0, ',', '.') }}đ</td>
                <td>
                    <a href=""><i class="fa fa-trash-o"></i> Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

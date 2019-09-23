@extends('admin.layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('admin.list.transaction')}}">Transaction</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
        </div>
        <div class="table-responsive">
            <h2>Quản lí đơn hàng</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Ghi chú</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>

                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction )
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ isset($transaction->users->name ) ? $transaction->users->name : '[N/A]' }}</td>
                        <td>{{ number_format($transaction->tr_total, 0 , ',', '.') }} VNĐ</td>
                        <td>{{ $transaction->tr_note }}</td>
                        <td>{{ $transaction->tr_address }}</td>
                        <td>{{ $transaction->tr_phone }}</td>
                        <td>
                            @if($transaction->tr_status == 0)
                                <a href="/admin/transaction/update-status/{{$transaction->id}}?tr_status=1" onclick="return confirm('Bạn có chắc muốn xác nhận thành công đơn hàng?')"
                                   class="btn btn-simple btn-info btn-icon edit" title="Click to have this order finished"><i class="fas fa-check"></i></a>
                                <a href="/admin/transaction/update-status/{{$transaction->id}}?tr_status=-1" onclick="return confirm('Bạn có chắc muốn huỷ đơn hàng?')"
                                   class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>
                            @elseif($transaction->tr_status==1)
                                <i class="fas fa-check 4x text-danger"></i>
                            @elseif($transaction->tr_status==-1)
                                <i class="fas fa-times 4x text-danger"></i>
                            @endif
{{--                            @if($transaction->tr_status == 1)--}}
{{--                                <a href="" class="label-success label"> Đã xử lý</a>--}}
{{--                            @endif--}}
{{--                            <a href="" class="label label-default">Chờ xử lý</a>--}}
                        </td>
                        <td>
{{--                            <a href="" class="btn "><i class="fas fa-trash-alt"></i> Xoá</a>--}}
                            <a class="btn btn-default js_order_item" href="{{ route('admin.view.order',  $transaction->id) }}"><i
                                    class="fas fa-eye"></i></a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection




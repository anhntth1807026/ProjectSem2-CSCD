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
                            @if($transaction->tr_status == 1)
                                <a href="" class="label-success label"> Đã xử lý</a>
                            @endif
                            <a href="" class="label label-default">Chờ xử lý</a>
                        </td>
                        <td>
                            <a href="" class="btn "><i class="fas fa-trash-alt"></i> Xoá</a>
                            <a class="btn btn-default js_order_item" href="{{ route('admin.view.order',  $transaction->id) }}"><i
                                    class="fas fa-eye"></i></a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="myModalOrder" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('script')
    <script>
        $(function () {
            $(".js_order_item").click(function (event) {

                // event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');

                $("#myModalOrder").modal('show');
                // console.log(url);
            });
        })
    </script>
@endsection



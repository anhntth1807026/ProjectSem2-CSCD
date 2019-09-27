@extends('admin.layout.master')

@section('content')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Thống Kê</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('admin.list.transaction')}}">Đơn Hàng</a>
                </li>
                <li class="breadcrumb-item active">Danh Sách</li>

            </ol>

            <div class="pull-right mt-3">
                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span><i class="fa fa-caret-down"></i>
                </div>
{{--                <div class="font-weight-bold ml-4 mt-3 text-uppercase">--}}
{{--                    Total Revenue : <span class="total-revenue"></span> (VND)--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="table-responsive">
            <h2>Quản lí đơn hàng</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Ghi chú</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Ngày tạo</th>
                    <th>Trạng thái</th>
                    <th></th>
                    <th>Thao tác</th>

                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction )
                    <tr class="row-item" id="row-item-{{ $transaction->id }}">
                        <td class="col-0">
                            @if($transaction->tr_status==1 || $transaction->tr_status==0)
                                <input type="checkbox" class="check-item">
                            @endif
                        </td>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ isset($transaction->users->name ) ? $transaction->users->name : '[N/A]' }}</td>
                        <td>{{ number_format($transaction->tr_total, 0 , ',', '.') }} VNĐ</td>
                        <td>{{ $transaction->tr_note }}</td>
                        <td>{{ $transaction->tr_address }}</td>
                        <td>{{ $transaction->tr_phone }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td class=" font-weight-bold status-label">{{$transaction->status}}</td>
                        <td>
                            @if($transaction->tr_status == 0)
                                <a href="/admin/transaction/update-status/{{$transaction->id}}?tr_status=1"
                                   onclick="return confirm('Bạn có chắc muốn xác nhận thành công đơn hàng?')"
                                   class="btn btn-simple btn-info btn-icon edit"
                                   title="Click to have this order finished"><i class="fas fa-check"></i></a>
                                <a href="/admin/transaction/update-status/{{$transaction->id}}?tr_status=-1"
                                   onclick="return confirm('Bạn có chắc muốn huỷ đơn hàng?')"
                                   class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i
                                        class="fas fa-times"></i></a>
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
                            <a class="btn btn-outline-secondary"
                               href="{{ route('admin.view.order',  $transaction->id) }}"><i
                                    class="fas fa-eye"></i></a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7" style="">
                <nav aria-label="Page navigation example">
                    {{$transactions->links()}}
                </nav>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('js/daterangepicker.js')}}"></script>

    <script>
        $(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            cb(start, end);

            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                //do something, like clearing an input
                $('#reportrange').val('');
            });

            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log(picker.endDate.format('YYYY-MM-DD'));
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                $.ajax({
                    url: '/api-get-data-to-time?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        var list_obj = resp.list_obj;
                        if (list_obj == 0) {
                            alert('No data exists', 'Please choose another time range.', 'warning');
                            return;
                        }
                        ;
                        var content = '';
                        for (var i in list_obj) {
                            content += '<tr class="row-item" id="row-item-' + list_obj[i].id + '">';
                            content += '<td class="column-0">';
                            console.log(list_obj[i].status);
                            if (list_obj[i].tr_status == 1 || list_obj[i].tr_status == 0) {
                                content += '<input type="checkbox" class="check-item">';
                            }

                            content += '</td>';
                            content += '<td>' + list_obj[i].id + '</td>';
                            content += '<td>'+ list_obj[i].tr_user_id + '</td>';
                            content += '<td>' +list_obj[i].tr_total + 'VNĐ' + '</td>';
                            content += '<td >' + list_obj[i].tr_note + '</td>';
                            content += '<td >' + list_obj[i].tr_address + '</td>';
                            content += '<td >' + list_obj[i].tr_phone + '</td>';
                            content += '<td style="font-weight: normal;">' + list_obj[i].created_at + '</td>';
                            content += '<td class=" font-weight-bold">' + list_obj[i].status + '</td>';
                            content += '<td >';

                            if (list_obj[i].tr_status == 0) {
                                content += '<a href="/admin/transaction/update-status/' + list_obj[i].id + '?tr_status=1" onclick="return confirm("Bạn có chắc muốn xác nhận thành công đơn hàng?")" class="btn btn-simple btn-info btn-icon edit" title="Click to have this order confirmed"><i class="fas fa-check"></i></a>';
                                content += '<a href="/admin/transaction/update-status/' + list_obj[i].id + '?tr_status=-1" onclick="return confirm("Bạn có chắc muốn huỷ đơn hàng?")" class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>';
                            } else if (list_obj[i].tr_status == 1) {
                                content += '<i class="fas fa-check 4x text-danger"></i>';
                            } else if (list_obj[i].tr_status == -1) {
                                content += '<i class="fas fa-times 4x text-danger"></i>';
                                content += '</td>';
                            }
                            content += '<td>';
                            content += '<a class="btn btn-outline-secondary btn-icon edit " href="/admin/transaction/view/' + list_obj[i].id + ' ">';
                            content += '<i class="fas fa-eye"></i>';
                            content += '</a>';
                            content += '</td>';
                            content += '</tr>';
                        }
                        $('tbody').html(content);
                    },
                    error: function () {
                        swal('Action failed', 'Cannot retrieve data from API', 'error');
                    }
                });

            });
        });

        // $(function () {
        //     var start = moment().subtract(29, 'days');
        //     var end = moment();
        //     $.ajax({
        //         url: '/api-get-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
        //         method: 'GET',
        //         success: function (resp) {
        //             if (resp.length == 0) {
        //                 swal('No data exists for line chart', 'Please choose another time range.', 'warning');
        //                 return;
        //             }
        //             ;
        //             drawChart(resp);
        //             var totalRevenue = 0;
        //             var lastRevenue = parseInt(resp[0].revenue);
        //             var last = resp.length;
        //             var firstRevenue = parseInt(resp[resp.length - 1].revenue);
        //             var difference = lastRevenue - firstRevenue;
        //             // if (difference < 0) {
        //             //     if (-difference > 100000) {
        //             //         $('.advice-content').text('Going down considerably => You should check out 5 best-sellers below to have an effective marketing strategy');
        //             //     } else {
        //             //         $('.advice-content').text('Going down but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
        //             //     }
        //             // }
        //             // if (difference > 0) {
        //             //     if (difference > 2000000) {
        //             //         $('.advice-content').text('Raising up considerably => You are having an effective marketing strategy! Keep going');
        //             //     } else {
        //             //         $('.advice-content').text('Raising up but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
        //             //     }
        //             // }
        //             for (var i = 0; i < resp.length; i++) {
        //                 totalRevenue += parseInt(resp[i].revenue);
        //             }
        //             ;
        //             $('.total-revenue').text(totalRevenue);
        //             $('.total-revenue').formatNumber();
        //
        //         },
        //         error: function () {
        //             swal('Something is wrong', 'Cannot retrieve data from API', 'error');
        //         }
        //     });
        // });
    </script>

@endsection




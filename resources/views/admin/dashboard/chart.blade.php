@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Chart</li>
            </ol>
        </div>
        <div class="row">
            <!-- Icon Cards-->
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <select name="revenue" id="revenue" class="form-control">

                </select>
            </div>
            <div class="row">
                {{--                <div class="float-right mt-3">--}}
                {{--                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; width: 100%">--}}
                {{--                        <i class="fa fa-calendar"></i>&nbsp;--}}
                {{--                        <span></span> <i class="fa fa-caret-down"></i>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div id="chart_div" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{--    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>--}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart', 'bar']});
        google.charts.setOnLoadCallback(function () {
                var start = moment().subtract(1, 'days');
                var end = moment();
                $.ajax({
                    url: '/api-get-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
                    method: 'GET',
                    success: function (resp) {
                        drawChart(resp);
                        var totalRevenue = 0;
                        var lastRevenue = parseInt(resp[0].revenue);
                        var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                        for (var i = 0; i < resp.length; i++) {
                            totalRevenue += parseInt(resp[i].revenue);
                        }
                        $('.total-revenue').text(totalRevenue);
                        $('.total-revenue').formatNumber();
                    }
                })
            }
        );

        function drawChart(tr_total, title) {
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Date');
            data.addColumn('number', 'Revenue');
            for (var i = 0; i < chart_data.length; i++) {
                data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
            }
            var options = {
                legend: 'none'
            };
            var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
            chart.draw(data, options);

        }

    </script>
@endsection

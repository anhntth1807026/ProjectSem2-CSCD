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
                            <li class="home">
                                <a href="{{ route('home') }}">Giỏ hàng</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Thanh toán</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- Shopping Table Container -->
    <div class="main-contact-area ">
        <div class="container wrapper">
            <div class="row cart-body">
                <form class="form-horizontal" method="post">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                        <!--REVIEW ORDER-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Danh sách mua hàng
                                <div class="pull-right"><small><a class="afix-1"
                                                                  href="{{ route('list.shopping.cart') }}">Cập
                                            nhật</a></small></div>
                            </div>
                            <div class="panel-body">
                                @foreach($products as $product)
                                    <div class="form-group">
                                        <div class="col-sm-3 col-xs-3">
                                            <img class="img-responsive" style="width: 100px; height: 70px"
                                                 src="{{$product->options->thumbnail}}"/>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="col-xs-12">{{ $product->name }}</div>
                                            <div class="col-xs-12"><small>Số lượng x
                                                    <span>{{ $product->qty }}</span></small></div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3 text-right">
                                            <h6>{{ number_format($product->price, 0, ',', '.') }} <span>VNĐ</span></h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <hr/>
                                    </div>
                                @endforeach
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <strong>Tổng tiền</strong>
                                        <div class="pull-right"><span>{{ Cart::subtotal() }}</span><span>VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr/>
                                </div>
                            </div>
                        </div>
                        <!--REVIEW ORDER END-->
                    </div>


                </form>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                            <form action="/shopping-cart/pay-online" id="create_form">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-12"><label>Địa chỉ:</label></div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><label>Số điện thoại:</label></div>
                                    <div class="col-md-12"><input type="text" name="phone" class="form-control"
                                                                  value=""/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><label>Email:</label></div>
                                    <div class="col-md-12"><input type="text" name="email" class="form-control"
                                                                  value=""/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><label for="language">Loại hàng hóa </label></div>
                                    <div class="col-md-12">
                                        <select name="order_type" id="order_type" class="form-control">
                                            <option value="billpayment">Thanh toán hóa đơn</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="bank_code">Ngân hàng</label>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="bank_code" id="bank_code" class="form-control">
                                            <option value="">Không chọn</option>
                                            <option value="NCB"> Ngan hang NCB</option>
                                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                                            <option value="SCB"> Ngan hang SCB</option>
                                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                                            <option value="MSBANK"> Ngan hang MSBANK</option>
                                            <option value="NAMABANK"> Ngan hang NamABank</option>
                                            <option value="VNMART"> Vi dien tu VnMart</option>
                                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                            <option value="HDBANK">Ngan hang HDBank</option>
                                            <option value="DONGABANK"> Ngan hang Dong A</option>
                                            <option value="TPBANK"> Ngân hàng TPBank</option>
                                            <option value="OJB"> Ngân hàng OceanBank</option>
                                            <option value="BIDV"> Ngân hàng BIDV</option>
                                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                            <option value="VPBANK"> Ngan hang VPBank</option>
                                            <option value="MBBANK"> Ngan hang MBBank</option>
                                            <option value="ACB"> Ngan hang ACB</option>
                                            <option value="OCB"> Ngan hang OCB</option>
                                            <option value="IVB"> Ngan hang IVB</option>
                                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="language">Ngôn ngữ</label>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="language" id="language" class="form-control">
                                            <option value="vn">Tiếng Việt</option>
                                            <option value="en">English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><label>Ghi chú:</label></div>
                                    <div class="col-md-12">
                                        <textarea name="note" cols="30" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a class="btn btn-success" id="btnPopup">Xác nhận thông tin
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->

                </div>
            </div>
            <div class="row cart-footer">

            </div>
        </div>
    </div>

    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
    <script type="text/javascript">
        $("#btnPopup").click(function () {
            var postData = $("#create_form").serialize();
            var submitUrl = $("#create_form").attr("action");
            $.ajax({
                type: "POST",
                url: submitUrl,
                data: postData,
                dataType: 'JSON',
                success: function (x) {
                    // alert(1);
                    if (x.code === '00') {
                        if (window.vnpay) {
                            vnpay.open({width: 768, height: 600, url: x.data});
                        } else {
                            location.href = x.data;
                        }
                        return false;
                    } else {
                        alert(x.Message);
                    }
                }
            });
            return false;
        });
    </script>
@endsection

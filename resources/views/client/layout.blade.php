<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zero Waste</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow"/>
    <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content"/>
    <meta name="author" content="Codrops"/>
    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>

    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('/thumbnail/logo.png') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/w3CSS.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style-client.css') }}">

    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>

    {{--    <link rel="stylesheet" href="{{Request::is('client/profile') ? '': asset('css/materialize.min.css')}}">--}}

    @stack('styles')
</head>
<body>
<!--Header-->

<header class="short-stor">
    <div class="container-fluid">
        <div class="row" style="background: white">
            <!-- logo start -->
            <div class="col-md-4 col-sm-12 text-center">
                <div class="top-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/logob.jpg') }}" style="width: 170px; height: 70px"></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-5 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="expand"><a href="{{ route('home') }}">Trang Chủ</a>
                            </li>
                            <li class="expand"><a href="/List-Product">Sản Phẩm</a>
                                <div class="restrain mega-menu megamenu4">
											<span>
												<a class="mega-menu-title"
                                                   href="/List-Product?page=&pro_category_id=2&keyword=">Đồ dùng cá nhân</a>
											</span>
                                    <span class="block-last">
												<a class="mega-menu-title"
                                                   href="/List-Product?page=&pro_category_id=1&keyword=">Đồ dùng gia đình</a>
											</span>
                                </div>
                            </li>

                            <li class="expand"><a href="/Blog">Bài Viết</a></li>

                            <li class="expand"><a href="#">Chính Sách</a>
                                <ul class="restrain sub-menu">
                                    <li><a href="/Policy/Data-Confidentiality">Bảo mật thông tin</a></li>
                                    <li><a href="/Policy/Delivery-Transport">Vận chuyển, giao nhận</a></li>
                                    <li><a href="/Policy/Payment-Security">Bảo mật thanh toán</a></li>
                                </ul>
                            </li>
                            <li class="expand"><a href="/About-Us">Chúng Tôi</a></li>
                            <li class="expand"><a href="{{ route('get.contact') }}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu start -->
                <div class="row">
                    <div class="col-sm-12 mobile-menu-area">
                        <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                            <span class="mobile-menu-title">Menu</span>
                            <nav>
                                <ul>
                                    <li><a href="">Trang Chủ</a>
                                    </li>

                                    <li><a href="">Shop</a>
                                        <ul>
                                            <li><a href="">Đồ dùng gia đình</a>
                                            </li>
                                            <li><a href="">Đồ dùng gia đình</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Bài Viết</a></li>
                                    <li><a href="">Chính Sách</a>
                                        <ul>
                                            <li><a href="">Bảo mật thông tin</a></li>
                                            <li><a href="">Vận chuyển, giao nhận</a></li>
                                            <li><a href="">Bảo mật thanh toán</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Chúng Tôi</a></li>
                                    <li><a href="">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- mobile menu end -->
            </div>
            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-md-3 col-sm-12 nopadding-left">
                <div class="top-detail" style=" padding-top: 30px; margin-top: 5px">

                    <!-- addcart top start -->
                    <div class="disflow">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-right">
                                <div class="cart-toggler">
                                    <a href="{{ route('list.shopping.cart') }}"><i class="fa fa-shopping-cart"
                                                                                   style="font-size:18px;"></i></a>
                                    <a href="{{ route('list.shopping.cart') }}"><span id="count-cart"
                                                                                      class="cart-quantity">{{ \Cart::count() }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
{{--                    <div class="disflow">--}}
{{--                        <div class="header-search expand">--}}
{{--                            <div class="search-icon fa fa-search"></div>--}}
{{--                            <div class="product-search restrain">--}}
{{--                                <div class="container nopadding-right">--}}
{{--                                    <form action="index.html" id="searchform" method="get">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" class="form-control" maxlength="128"--}}
{{--                                                   placeholder="Search product...">--}}
{{--                                            <span class="input-group-btn">--}}
{{--                                                <button type="submit" class="btn btn-default"><i--}}
{{--                                                        class="fa fa-search"></i></button>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- search divition end -->
                    <div class="disflow">
                        <div class="expand dropps-menu">
                            <a href="#">
                                {{--                                <i class="fa fa-align-right"></i>--}}
                                <i class="fas fa-user-circle fa-fw" style="font-size:18px;"></i>
                            </a>
                            <ul class="restrain language">

                                @if(Auth::check())
                                    <li>
                                        <a>
                                            Hi, {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li><a href="/client/profile">My Account</a></li>
                                    <li><a href="">My Cart</a></li>
                                    <li><a href="">Checkout</a></li>
                                    <li>
                                        <a href="{{ route('get.logout.user') }}">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('get.login') }}">
                                            {{ __('Login') }}
                                        </a>
                                    </li>
                                    @if (Route::has('get.register'))
                                        <li>
                                            <a href="{{ route('get.register') }}">
                                                {{ __('Register') }}
                                            </a>
                                        </li>
                                    @endif
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top details area end -->

        </div>
    </div>
</header>

<div class="row">
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable " style="position: fixed; right: 20px">
            <a href="#" class="close" data-dismiss="alert " aria-label="close">&times;</a>
            <strong>Thành công! </strong> {{ Session::get('success') }}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable" style="position: fixed; right: 20px">
            <a href="#" class="close" data-dismiss="alert " aria-label="close">&times;</a>
            <strong>Thất bại! </strong> {{ Session::get('error') }}
        </div>
    @endif
    @section('content')
    @show
</div>

<footer class="pt-5 pb-4" id="contact">
    <div class="container" style="padding-right: 0px;padding-left: 0px">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px;text-align: center">
                <a><img src="{{ asset('img/logob.jpg') }}" style="width: 170px; height: 70px"></a>
                <ul class="f-address">
                    <li style="margin-bottom: 10px">
                        <div class="row">
                            {{--                            <div class="col-1"><i class="fas fa-map-marker"></i></div>--}}
                            <div class="col-12">
                                <h6 class="font-weight-bold mb-0"><i class="fas fa-map-marker"></i> ĐỊA CHỈ:</h6>
                                <p>SỐ 1 HÙNG VƯƠNG, QUÁN THÁNH <br> BA ĐÌNH, HÀ NỘI, VIỆT NAM</p>
                            </div>
                        </div>
                    </li>
                    <br>
                    <li>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="font-weight-bold mb-0"><i class="far fa-envelope"></i>&nbsp;EMAIL:</h6>
                                <p><a href="#">anhntth1807026@fpt.edu.vn</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px;text-align: center">
                <h5 class="mb-4 font-weight-bold" style="margin-bottom: 25px">BÀI VIẾT MỚI</h5>
                <ul class="recent-post">
                    <li>
                        <a href="#" class="w3-button w3-round" style="text-decoration: none; color: white">
                            <label class="mr-3" style="margin-right: 5px">28 <br>
                                <p>9</p></label>
                            <span>Làm thế nào để sống xanh?</span>
                        </a>
                    </li>
                    <li><a href="#" class="w3-button w3-round" style="text-decoration: none; color: white">
                            <label class="mr-3" style="margin-right: 5px">29 <br>
                                <p>8</p></label>
                            <span>Sống xanh là như thế nào?</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px;text-align: center">
                <h5 class="mb-4 font-weight-bold" style="margin-bottom: 25px;margin-right: 12px">LIÊN HỆ</h5>
                <div class="input-group" style="width: 90%; margin: 22px">
                    <input type="text" class="form-control" placeholder="Địa Chỉ Email:">
                    {{--                    <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>--}}
                </div>
                <ul class="social-pet mt-4" style="margin-left: 10px;">
                    <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<a id="BackToTop"  style="text-decoration: none" title="Chuyển Lên Đầu Trang"></a>

<script>
    var btn = $('#BackToTop');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });
</script>

<script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('js/my-js.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@stack('scripts')
</body>
</html>

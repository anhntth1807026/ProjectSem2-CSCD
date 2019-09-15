<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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

    <link rel="shortcut icon" href="{{ asset('/thumbnail/logo-short-cut.png') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/w3CSS.css') }}">

    {{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style-client.css') }}">

    <script src="{{asset('js/app.js')}}" ></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{Request::is('client/profile') ? '': asset('css/materialize.min.css')}}">
    @stack('styles')
    {{--    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">--}}


</head>
<body>
<!--Header-->

<header class="short-stor">
    <div class="container-fluid">
        <div class="row" style="background: white">
            <!-- logo start -->
            <div class="col-md-3 col-sm-12 text-center nopadding-right">
                <div class="top-logo">
                    <a href=""><img src="" alt=""/></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-6 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="expand"><a href="{{ route('home') }}">Trang Chủ</a>
                            </li>

                            <li class="expand"><a href="/List-Product">Shop</a>
                                <div class="restrain mega-menu megamenu4">
											<span>
												<a class="mega-menu-title" href="">Đồ dùng cá nhân</a>

											</span>
                                    <span class="block-last">
												<a class="mega-menu-title" href="">Đồ dùng gia đình</a>

											</span>
                                </div>
                            </li>
                            <li class="expand"><a href="/Blog">Bài Viết</a></li>
                            <li class="expand"><a href="/Policy">Chính Sách</a>
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
                                    <li><a href="#">Chính Sách</a>
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
                <div class="top-detail">

                    <!-- addcart top start -->
                    <div class="disflow">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-right">
                                <div class="cart-toggler">
                                    <a href="{{ route('list.shopping.cart') }}"><i class="fa fa-shopping-bag" style="font-size:15px;"></i></a>
                                    <a href="{{ route('list.shopping.cart') }}"><span id="count-cart" class="cart-quantity">{{ \Cart::count() }}</span></a>
                                </div>
{{--                                <div class="restrain small-cart-content">--}}
{{--                                    <ul class="cart-list">--}}
{{--                                        <li>--}}
{{--                                            <a class="sm-cart-product" href="product-details.html">--}}
{{--                                                <img src="" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="small-cart-detail">--}}
{{--                                                <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>--}}
{{--                                                <a href="#" class="edit-btn"><img src="" alt="Edit Button"/></a>--}}
{{--                                                <a class="small-cart-name" href="product-details.html">Voluptas--}}
{{--                                                    nulla</a>--}}
{{--                                                <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a class="sm-cart-product" href="product-details.html">--}}
{{--                                                <img src="" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="small-cart-detail">--}}
{{--                                                <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>--}}
{{--                                                <a href="#" class="edit-btn"><img src="" alt="Edit Button"/></a>--}}
{{--                                                <a class="small-cart-name" href="product-details.html">Donec ac--}}
{{--                                                    tempus</a>--}}
{{--                                                <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <p class="total">Subtotal: <span class="amount">$155.00</span></p>--}}
{{--                                    <p class="buttons">--}}
{{--                                        <a href="checkout.html" class="button">Checkout</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="index.html" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="128"
                                                   placeholder="Search product...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                    <div class="disflow">
                        <div class="expand dropps-menu">
                            <a href="#">
                                {{--                                <i class="fa fa-align-right"></i>--}}
                                <i class="fas fa-user-circle fa-fw" style="font-size:15px;"></i>
                            </a>
                            <ul class="restrain language">

                                @if(Auth::check())
                                    <li>
                                        <a>
                                            Hi, {{ Auth::user()->name }}
                                        </a>
                                        <a href="{{ route('get.logout.user') }}">
                                            {{ __('Logout') }}
                                        </a>
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">My Cart</a></li>
                                    <li><a href="">Checkout</a></li>
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

{{--<div class="w3-top">--}}
{{--    <div class="w3-bar w3-white w3-card" id="myNavbar">--}}
{{--        <a href="#home" class="w3-bar-item w3-button w3-wide" style="color: #00acd6;size: 60px;text-decoration: none">Tree--}}
{{--            Hugger</a>--}}
{{--        <div class="w3-right w3-hide-small">--}}
{{--            <div class="w3-dropdown-hover">--}}
{{--                <a class="w3-button w3-black" style="color: #00acd6;=font-size: 14px;text-decoration: none" title="Hãy cùng nhau bảo vệ môi trường ngay từ những việc nhỏ nhất">Sản Phẩm</a>--}}
{{--                <div class="w3-dropdown-content w3-bar-block w3-border w3-animate-opacity">--}}
{{--                    <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none">Đồ Dùng Cá Nhân</a>--}}
{{--                    <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none">Đồ Dùng Gia Đình</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none" title="Liên hệ, góp ý và ủng hộ Tree Hugger">Chúng Tôi</a>--}}

{{--            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none " title="Những bài báo, những thông báo và những phản hồi liên quan đến Tree Hugger">Bài Viết</a>--}}

{{--            <div class="w3-dropdown-hover">--}}
{{--                <a class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none" title="Tìm hiểu thêm về cách hoạt động của Tree Hugger">Chính Sách</a>--}}
{{--                <div class="w3-dropdown-content w3-bar-block w3-border w3-animate-opacity">--}}
{{--                    <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none">Chính Sách Bảo Mật Thông Tin</a>--}}
{{--                    <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none">Chính Sách Vận Chuyển Giao Nhận</a>--}}
{{--                    <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none">Chính Sách Bảo Mật Thanh Toán</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none; padding-right: 30px"><i class="fa fa-cart-plus" aria-hidden="true"></i>--}}
{{--                <span class="cart-quantity badge-danger" title="Kiểm tra giỏ hàng">{{ Cart::count() }}</span>--}}
{{--            </a>--}}

{{--            <a class=" dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"--}}
{{--               aria-haspopup="true" aria-expanded="false">--}}
{{--                <i class="fas fa-user-circle fa-fw" style="padding-top: 22px"></i>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">--}}
{{--                @if(Auth::check())--}}
{{--                    <li class="nav-item dropdown" style="list-style: none">--}}
{{--                        <a class=" dropdown-item" href="#" id="userDropdown" role="button" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">--}}
{{--                            Hi, {{ Auth::user()->name }}--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="{{ route('get.logout.user') }}"--}}
{{--                           style="color: black">--}}
{{--                            {{ __('Logout') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li class="nav-item" style="list-style: none">--}}
{{--                        <a href="{{ route('get.login') }}" class=" nav-link" style=" padding-right: 15px"--}}

{{--                           style="color: #00acd6;text-decoration: none">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('get.register'))--}}
{{--                        <li class="nav-item" style="list-style: none">--}}
{{--                            <a href="{{ route('get.register') }}" class="w3-bar-item w3-button nav-link"--}}
{{--                               style=" padding-right: 15px"--}}
{{--                               style="color: #00acd6;text-decoration: none">{{ __('Register') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @endif--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

<div class="row">
    @section('content')
    @show
</div>

<div class="middle">
    <a class="btn-middle" href="#">
        <i class="fa fa-facebook-f" title="Facebook"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-twitter" title="Twitter"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-google" title="Google"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-instagram" title="Instagram"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-youtube" title="Youtube"></i>
    </a>
</div>

{{--Footer--}}

{{--<footer id="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">--}}
{{--                <div class="footer-logo">--}}
{{--                    <a href="#" style="color:#999999 "><img src="" alt="Tree Hugger" class="img-responsive"></a>--}}
{{--                </div>--}}
{{--                <p>Chung tay bảo vệ môi trường <br class="hidden-xs">Join hands to protect the environment</p>--}}
{{--                <ul class="contact-list list-unstyled">--}}
{{--                    <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"--}}
{{--                                              title="Địa chỉ trụ sở chính"></i></span> So 8 Ton Thuat--}}
{{--                        Thuyet, My Dinh, Ha Noi.--}}
{{--                    </li>--}}
{{--                    <li><a href="mailto:anhntth1807026@fpt.edu.vn" style="color:#999999 " title="Địa chỉ Email"><span--}}
{{--                                class="icon"><i--}}
{{--                                    class="fa fa-envelope-o" aria-hidden="true"></i></span> TreeHugger@mail.com</a>--}}
{{--                    </li>--}}
{{--                    <li><a href="tel:+84 94 585 2000" style="color:#999999 " title="Số điện thoại"><span class="icon"><i--}}
{{--                                    class="fa fa-phone"--}}
{{--                                    aria-hidden="true"></i></span>--}}
{{--                            +84 94 585 2000 </a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                <h3>POPULAR TAGS</h3>--}}
{{--                <p>--}}
{{--                    <span class="w3-tag w3-black w3-margin-bottom">Bottle</span> <span--}}
{{--                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Tote</span> <span--}}
{{--                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Straws</span>--}}
{{--                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mask</span> <span--}}
{{--                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Box</span> <span--}}
{{--                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Gel</span>--}}
{{--                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">mask</span>--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                <h3>SUBSCRIBE</h3>--}}
{{--                <div class="subscribe">--}}
{{--                    <p title="Tham gia cùng chúng tôi.">Đăng kí theo dõi để nhận những thông tin mới nhất về chúng--}}
{{--                        mình<br class="hidden-xs"></p>--}}
{{--                    <form class="subscribe-form" action="#">--}}
{{--                        <div class="input-group flex-nowrap">--}}
{{--                            <input type="text" class="form-control" placeholder="Your Gmail" aria-label="Gmail"--}}
{{--                                   aria-describedby="addon-wrapping">--}}
{{--                            <span style="cursor: pointer; position: absolute; right: 2px; top: 14px; FONT-SIZE: 20px;"--}}
{{--                                  id="addon-wrapping"><i class="far fa-paper-plane"></i>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}

<!-- Footer -->
<footer class="pt-5 pb-4" id="contact">
    <div class="container" style="padding-right: 0px;padding-left: 0px">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px">
                <h5 class="mb-4 font-weight-bold" style="margin-bottom: 25px">CHÚNG TÔI</h5>
                <ul class="f-address">
                    <li style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-1"><i class="fas fa-map-marker"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">ĐỊA CHỈ:</h6>
                                <p>SỐ 1 HÙNG VƯƠNG, QUÁN THÁNH, BA ĐÌNH, HÀ NỘI, VIỆT NAM</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="far fa-envelope"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">OUR EMAIL:</h6>
                                <p><a href="#">anhntth1807026@fpt.edu.vn</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px">
                <h5 class="mb-4 font-weight-bold" style="margin-bottom: 25px">FRESH TWEETS</h5>
                <ul class="f-address">
                    <li>
                        <div class="row" style="margin-bottom: 25px">
                            <div class="col-1"><i class="fab fa-twitter"></i></div>
                            <div class="col-10">
                                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                <label>10 Mins Ago</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row" style="margin-bottom: 25px">
                            <div class="col-1"><i class="fab fa-twitter"></i></div>
                            <div class="col-10">
                                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                <label>10 Mins Ago</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px">
                <h5 class="mb-4 font-weight-bold" style="margin-bottom: 25px">BÀI VIẾT MỚI</h5>
                <ul class="recent-post">
                    <li>
                        <label class="mr-3" style="margin-right: 5px">28 <br>
                            <p>9</p></label>
                        <span>Làm thế nào để sống xanh?</span>
                    </li>
                    <li>
                        <label class="mr-3" style="margin-right: 5px">29 <br>
                            <p>8</p></label>
                        <span>Sống xanh là như thế nào?</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4" style="margin-bottom: 30px">
                <h5 class="mb-4 font-weight-bold" style="margin-bottom: 25px">LIÊN HỆ</h5>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    {{--                    <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>--}}
                </div>
                <ul class="social-pet mt-4">
                    <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{--<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>--}}
{{--<script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>--}}
<script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('js/my-js.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

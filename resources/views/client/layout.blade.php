<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow"/>
    <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content"/>
    <meta name="author" content="Codrops"/>
    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>

    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('/thumbnail/logo-short-cut.png') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/w3CSS.css') }}">

    {{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style-client.css') }}">
    {{--    materialize css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    {{--    font nav header--}}
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin"/>

    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>--}}
</head>
<body>
<!--Header-->

<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide" style="color: #00acd6;size: 60px;text-decoration: none">
            Tree Hugger
        </a>
        <div class="w3-right w3-hide-small">
            <div class="w3-dropdown-hover">
                <a class="w3-button w3-black" style="color: #00acd6;=font-size: 14px;text-decoration: none"
                   title="Hãy cùng nhau bảo vệ môi trường ngay từ những việc nhỏ nhất">Sản Phẩm</a>
                <div class="w3-dropdown-content w3-bar-block w3-border w3-animate-opacity">
                    <a href="#" class="w3-bar-item w3-button"
                       style="color: #00acd6;font-size: 14px; text-decoration: none">Đồ Dùng Cá Nhân</a>
                    <a href="#" class="w3-bar-item w3-button"
                       style="color: #00acd6;font-size: 14px; text-decoration: none">Đồ Dùng Gia Đình</a>
                </div>
            </div>

            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none"
               title="Liên hệ, góp ý và ủng hộ Tree Hugger">Chúng Tôi</a>

            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;font-size: 14px; text-decoration: none "
               title="Những bài báo, những thông báo và những phản hồi liên quan đến Tree Hugger">Bài Viết</a>

            <div class="w3-dropdown-hover">
                <a class="w3-button w3-black" style="color: #00acd6;font-size: 14px; text-decoration: none"
                   title="Tìm hiểu thêm về cách hoạt động của Tree Hugger">Chính Sách</a>
                <div class="w3-dropdown-content w3-bar-block w3-border w3-animate-opacity">
                    <a href="#" class="w3-bar-item w3-button"
                       style="color: #00acd6;font-size: 14px; text-decoration: none">Chính Sách Bảo Mật Thông Tin</a>
                    <a href="#" class="w3-bar-item w3-button"
                       style="color: #00acd6;font-size: 14px; text-decoration: none">Chính Sách Vận Chuyển Giao Nhận</a>
                    <a href="#" class="w3-bar-item w3-button"
                       style="color: #00acd6;font-size: 14px; text-decoration: none">Chính Sách Bảo Mật Thanh Toán</a>
                </div>
            </div>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none; padding-right: 30px"><i
                    class="fa fa-cart-plus" aria-hidden="true"></i>
                <span class="cart-quantity badge-danger" title="Kiểm tra giỏ hàng">{{ Cart::count() }}</span>
            </a>
            <a class=" dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw" style="padding-top: 22px"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                @if(Auth::check())
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class=" dropdown-item" href="/client/profile" id="userDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Hi, {{ Auth::user()->name }}
                        </a>
                        <a class="dropdown-item" href="{{ route('get.logout.user') }}"
                           style="color: black">
                            {{ __('Logout') }}
                        </a>
                    </li>
                @else
                    <li class="nav-item" style="list-style: none">
                        <a href="{{ route('get.login') }}" class=" nav-link" style=" padding-right: 15px"
                           style="color: #00acd6;text-decoration: none">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('get.register'))
                        <li class="nav-item" style="list-style: none">
                            <a href="{{ route('get.register') }}" class="w3-bar-item w3-button nav-link"
                               style=" padding-right: 15px"
                               style="color: #00acd6;text-decoration: none">{{ __('Register') }}
                            </a>
                        </li>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>

@section('content')
@show

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

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
                <div class="footer-logo">
                    <a href="#" style="color:#999999 "><img src="" alt="Tree Hugger" class="img-responsive"></a>
                </div>
                <p>Chung tay bảo vệ môi trường <br class="hidden-xs">Join hands to protect the environment</p>
                <ul class="contact-list list-unstyled">
                    <li>
                        <span class="icon">
                            <i class="fa fa-map-signs" aria-hidden="true" title="Địa chỉ trụ sở chính"></i>
                        </span> So 8 Ton Thuat Thuyet, My Dinh, Ha Noi.
                    </li>
                    <li>
                        <a href="mailto:anhntth1807026@fpt.edu.vn" style="color:#999999 " title="Địa chỉ Email">
                            <span class="icon">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span> TreeHugger@mail.com</a>
                    </li>
                    <li>
                        <a href="tel:+84 94 585 2000" style="color:#999999 " title="Số điện thoại">
                            <span class="icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span> +84 94 585 2000
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>POPULAR TAGS</h3>
                <p>
                    <span class="w3-tag w3-black w3-margin-bottom">Bottle</span> <span
                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Tote</span> <span
                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Straws</span>
                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mask</span> <span
                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Box</span> <span
                        class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Gel</span>
                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">mask</span>
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>SUBSCRIBE</h3>
                <div class="subscribe">
                    <p title="Tham gia cùng chúng tôi.">
                        Đăng kí theo dõi để nhận những thông tin mới nhất về chúng mình<br class="hidden-xs">\
                    </p>
                    <form class="subscribe-form" action="#">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Your Gmail" aria-label="Gmail"
                                   aria-describedby="addon-wrapping">
                            <span style="cursor: pointer; position: absolute; right: 2px; top: 14px; FONT-SIZE: 20px;"
                                  id="addon-wrapping"><i class="far fa-paper-plane"></i>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
{{--  SlideShow(Header)--}}
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
<script src="{{ asset('js/my-js.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
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

    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
    {{--    materialize css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>--}}
</head>
<body>
<!--Header-->

<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide" style="color: #00acd6;size: 60px;text-decoration: none">Tree
            Hugger</a>
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button dropdown-button" data-beloworigin="true" data-hover="true"
               data-activates='dropdown1' style="color: #00acd6;text-decoration: none">Sản Phẩm</a>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#">Đồ Dùng Gia Đình</a></li>
                <li><a href="#">Đồ Dùng Cá Nhân</a></li>
            </ul>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Chúng Tôi</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Bài Viết</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Chính Sách</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none; padding-right: 30px"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                <span class="cart-quantity badge-danger">{{ Cart::count() }}</span>
            </a>

            <a class=" dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw" style="padding-top: 22px"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                @if(Auth::check())
                    <li class="nav-item dropdown" style="list-style: none">
                        <a class=" dropdown-item" href="#" id="userDropdown" role="button" data-toggle="dropdown"
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

<div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="{{ asset('img/new-image/81be5807e3f96cbe68fca1b742263263.jpg') }}" style="width:100%">
    <img class="mySlides" src="{{ asset('img/new-image/f5224c013d9d47e657878207b5b479d9.jpg') }}" style="width:100%">
    <img class="mySlides" src="{{ asset('img/new-image/f951500763d646ae6a9dde86ae68950c.jpg') }}" style="width:100%">
</div>

<div class="w3-container" style="padding:100px 16px;color: white">
    <div class="w3-row-padding">
        <div class="w3-col m12" style="color:#000;">
            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                <div class="w3-content" style="max-width:600px">
                    <h4 class="w3-center"><b>Kết Nối Với Chúng Tôi</b></h4>
                    <form action="/action_page.php" target="_blank">
                        <div class="w3-section">
                            <label>Name</label>
                            <input class="w3-input w3-border" type="text" name="Name" required>
                        </div>
                        <div class="w3-section">
                            <label>Email</label>
                            <input class="w3-input w3-border" type="text" name="Email" required>
                        </div>
                        <div class="w3-section">
                            <label>Message</label>
                            <input class="w3-input w3-border" type="text" name="Message" required>
                        </div>
                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send
                            Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="middle">
    <a class="btn-middle" href="#">
        <i class="fa fa-facebook-f"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-twitter"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-google"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-instagram"></i>
    </a>
    <a class="btn-middle" href="#">
        <i class="fa fa-youtube"></i>
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
                    <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> So 8 Ton Thuat
                        Thuyet, My Dinh, Ha Noi.
                    </li>
                    <li><a href="mailto:anhntth1807026@fpt.edu.vn" style="color:#999999 "><span class="icon"><i
                                    class="fa fa-envelope-o" aria-hidden="true"></i></span> TreeHugger@mail.com</a>
                    </li>
                    <li><a href="tel:+84 94 585 2000" style="color:#999999 "><span class="icon"><i class="fa fa-phone"
                                                                                                   aria-hidden="true"></i></span>
                            +84 94 585 2000 </a></li>
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
                    <p>Đăng kí theo dõi để nhận những thông tin mới nhất về chúng mình<br class="hidden-xs"></p>
                    <form class="subscribe-form" action="#">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Your Gmail" aria-label="Gmail"
                                   aria-describedby="addon-wrapping">
                            <span style="cursor: pointer; position: absolute; right: 2px; top: 14px; FONT-SIZE: 20px;"
                                  id="addon-wrapping"><i class="far fa-paper-plane"></i></span>
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
<script src="{{ asset('js/my-js.js') }}"></script>
</body>
</html>

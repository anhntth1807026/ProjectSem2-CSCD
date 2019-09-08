<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>

    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('/thumbnail/logo-short-cut.png') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/w3CSS.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{--    materialize css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            /*font-family: "Raleway", sans-serif*/
            /*font-family: "Segoe UI", Arial, sans-serif;*/
            font-family: 'Oxygen', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
            /*font-size: 22px;*/
            /*line-height: 34px;*/
            /*font-weight: 300;*/
            /*font-style: normal;*/
            /*text-transform: none;*/
        }

        p {
            font-size: 20px;
        }

        .w3-top {
            position: fixed;
            z-index: 9000
        }

        body, html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/48926321_318638168991952_5734769066673963008_o.jpg?_nc_cat=105&_nc_eui2=AeEOIdhJzGi2gDWeM2CswmfZMbIR_qRusvP7xAIfs_5wFoSXnteyx9iZYA6M6zN3Qtnww8yLbh1-dGrwOD4f1-APlwmn9eh0pl9TyHL92_lmrw&_nc_oc=AQm6l_7UqdI7U9G09MuJIxYWJOGFw1N4m6f-V7anIJzVK4Da0_BcxppDkQUvQbqaNAI&_nc_ht=scontent.fhan2-4.fna&oh=8fb71a35496b2d6c5955b9538c875fe1&oe=5E0B2614");
            min-height: 100%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }

        .w3-padding-32 {
            /* padding-top: 32px!important; */
            padding-bottom: 32px !important;
        }


        element.style {
        }

        .w3-padding-32 {
            /* padding-top: 32px!important; */
            padding-bottom: 32px !important;
        }

        .w3-padding-large {
            padding: 0px 24px !important;
        }

        #footer {
            overflow: hidden;
            padding: 77px 0 20px;
            color: #999999;
            background-color: #232323;
        }

        .middle {
            /*position: absolute;*/
            /*transform: translate(-50%);*/
            text-align: center;
        }

        .btn-middle {
            display: inline-block;
            width: 90px;
            height: 90px;
            background: #f1f1f1;
            margin: 10px;
            border-radius: 70%;
            box-shadow: 0 5px 15px -5px #00000070;
            color: #3498db;
            overflow: hidden;
            position: relative;
        }

        .btn-middle i {
            line-height: 90px;
            font-size: 26px;
            transition: 0.2s linear;
            color: #145a68;
        }

        .btn-middle:hover i {
            transform: scale(1.3);
            color: #4267b2;
        }

        .btn-middle:before {
            content: "";
            position: absolute;
            width: 120%;
            height: 120%;
            /*background: #3498db;*/
            transform: rotate(45deg);
            left: -110%;
            top: 90%;
        }

        .btn-middle::before {
            animation: aaa 0.7s 1;
            top: -10%;
            left: -10%;
        }

        @keyframes aaa {
            0% {
                left: -110%;
                top: 90%;
            }
            50% {
                left: 10%;
                top: -30%;
            }
            100% {
                top: -10%;
            }
        }

        .fa-search-plus, .fa-spa {
            font-size: 200px;
            color: #dfde33de
        }


        .product-grid6, .product-grid6 .product-image6 {
            overflow: hidden
        }

        .product-grid6 {
            font-family: "Segoe UI", Arial, sans-serif;
            text-align: center;
            position: relative;
            transition: all .5s ease 0s
        }

        .product-grid6:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .3)
        }

        .product-grid6 .product-image6 a {
            display: block
        }

        .product-grid6 .product-image6 img {
            width: 100%;
            height: auto;
            transition: all .5s ease 0s
        }

        .product-grid6:hover .product-image6 img {
            transform: scale(1.1)
        }

        .product-grid6 .product-content {
            padding: 12px 12px 15px;
            transition: all .5s ease 0s
        }

        .product-grid6:hover .product-content {
            opacity: 0
        }

        .product-grid6 .title {
            font-size: 20px;
            text-transform: capitalize;
            margin: 0 0 10px;
            transition: all .3s ease 0s
        }

        .product-grid6 .title a {
            color: #000
        }

        .product-grid6 .title a:hover {
            color: #2e86de;
            text-decoration: none
        }

        .product-grid6 .price {
            font-size: 18px;
            font-weight: 600;
            color: #2b9177
        }

        .product-grid6 .price span {
            color: #999;
            font-size: 15px;
            font-weight: 400;
            text-decoration: line-through;
            margin-left: 7px;
            display: inline-block
        }

        .product-grid6 .social {
            background-color: #fff;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            bottom: -50%;
            left: 50%;
            z-index: 1;
            transition: all .5s ease 0s
        }

        .product-grid6:hover .social {
            opacity: 1;
            bottom: 20px
        }

        .product-grid6 .social li {
            display: inline-block
        }

        .product-grid6 .social li a {
            color: #909090;
            font-size: 16px;
            line-height: 45px;
            text-align: center;
            height: 45px;
            width: 45px;
            margin: 0 7px;
            border: 1px solid #909090;
            border-radius: 50px;
            display: block;
            position: relative;
            transition: all .3s ease-in-out
        }

        .product-grid6 .social li a:hover {
            color: #fff;
            background-color: #2e86de;
            width: 80px
        }

        .product-grid6 .social li a:after, .product-grid6 .social li a:before {
            content: attr(data-tip);
            color: #fff;
            background-color: #2e86de;
            font-size: 12px;
            letter-spacing: 1px;
            line-height: 20px;
            padding: 1px 5px;
            border-radius: 5px;
            white-space: nowrap;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -30px
        }

        .product-grid6 .social li a:after {
            content: '';
            height: 15px;
            width: 15px;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -20px;
            z-index: -1
        }

        .product-grid6 .social li a:hover:after, .product-grid6 .social li a:hover:before {
            opacity: 1
        }

        @media only screen and (max-width: 990px) {
            .product-grid6 {
                margin-bottom: 30px
            }
        }

        #footer {
            overflow: hidden;
            padding: 10px 12px 10px;
            color: #999999;
            background-color: #232323;
        }
    </style>
</head>
<body>
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide" style="color: #00acd6;size: 60px;text-decoration: none">Tree
            Hugger</a>
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Sản Phẩm</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Chúng Tôi</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Bài Viết</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Chính Sách</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6;text-decoration: none">Giỏ Hàng</a>
            <a href="#" class="w3-bar-item w3-button" onclick="w3_open1()" style="color: #00acd6;text-decoration: none">Đăng
                Nhập</a>
        </div>

        <nav class="w3-sidebar w3-white w3-animate-top" style="display:none;padding-top:50px;width: 100%"
             id="mySidebar1">
            <a href="javascript:void(0)" onclick="w3_close1()"
               class="w3-button w3-white w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
                <i class="fa fa-remove"></i>
            </a>
            <div class="w3-bar-block w3-center">
                <h1 style="font-size: 50px">Đăng Nhập</h1>
                <h5 style="padding-top: -50px">Luôn Là Một Thành Viên Trung Thành</h5>
                <br>
                <div class="w3-container">
                    <div class="w3-content" style="max-width:700px">
                        <div class="w3-row w3-center w3-card w3-padding">
                            <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');">
                                <div class="w3-col s6 tablink" style="color: #0f0f0f;">Đăng Nhập</div>
                            </a>
                            <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                                <div class="w3-col s6 tablink" style="color: #0f0f0f;">Đăng Ký</div>
                            </a>
                        </div>

                        <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large">
                                <div class="w3-content" style="max-width:600px">
                                    <form action="/signin.php" target="_blank">
                                        <div class="w3-section">
                                            <label>Email</label>
                                            <input class="w3-input w3-border" type="email" name="Email" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Mật Khẩu</label>
                                            <input class="w3-input w3-border" type="password" name="Password" required>
                                        </div>
                                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"
                                                style="margin-top: 50px">Đăng Nhập
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large">
                                <div class="w3-content" style="max-width:600px">
                                    <form action="/register.php" target="_blank">
                                        <div class="w3-section">
                                            <label>Họ Tên</label>
                                            <input class="w3-input w3-border" type="text" name="Name" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Email</label>
                                            <input class="w3-input w3-border" type="email" name="Email" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Mật Khẩu</label>
                                            <input class="w3-input w3-border" type="password" name="Password" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Nhập Lại Mật Khẩu</label>
                                            <input class="w3-input w3-border" type="password" name="ConfirmPassword"
                                                   required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Số Điện Thoại</label>
                                            <input class="w3-input w3-border" type="number" name="Phone" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Số Tuổi</label>
                                            <input class="w3-input w3-border" type="number" name="Age" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Địa chỉ</label>
                                            <input class="w3-input w3-border" type="text" name="Address" required>
                                        </div>
                                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"
                                                style="margin-top: 50px">Đăng Ký
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 100px"></div>
        </nav>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
           onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small" data-aos="zoom-in"
              data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới.</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium" data-aos="zoom-in" data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới</span><br>
        <span class="w3-large" data-aos="zoom-in" data-aos-duration="3000">Ngưng Sử Dụng Đồ Dùng Làm Từ Nhựa Và Các Sản Phẩm Gây Hại Cho Môi Trường.</span>
        <p><a href="#about"
              class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"
              data-aos="zoom-in" data-aos-duration="3000">Tìm
                Hiểu Nhiều Hơn Và Bắt Đầu Từ Hôm Nay</a></p>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>

<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <h3 style="text-align: center">CHÍNH SÁCH BẢO MẬT THANH TOÁN</h3>
        <h4 style="text-align: center;margin: 40px 0 40px 0;opacity: 0.75">KHÀNG HÀNG "ẨN DANH"</h4>
        <div class="content1">
            <h5>Cam kết bảo mật</h5>
            <p>Hệ thống thanh toán thẻ được cung cấp bởi các đối tác cổng thanh toán (“Đối Tác Cổng Thanh Toán”) đã được
                cấp phép hoạt động hợp pháp tại Việt Nam. Theo đó, các tiêu chuẩn bảo mật thanh toán thẻ tại
                www.laidayrefill.com đảm bảo tuân thủ theo các tiêu chuẩn bảo mật ngành.
            </p>
        </div>

        <div class="content1 w3-padding-32">
            <h5>Quy định bảo mật</h5>
            <p>Chính sách giao dịch thanh toán bằng thẻ quốc tế và thẻ nội địa (internet banking) đảm bảo tuân thủ các tiêu chuẩn bảo mật của các Đối Tác Cổng Thanh Toán gồm:</p>
            <ul>
                <li><p>- Thông tin tài chính của Khách hàng sẽ được bảo vệ trong suốt quá trình giao dịch bằng giao thức SSL (Secure Sockets Layer).</p></li>
                <li><p>- Chứng nhận tiêu chuẩn bảo mật dữ liệu thông tin thanh toán (PCI DSS) do Trustwave cung cấp.</p></li>
                <li><p>- Mật khẩu sử dụng một lần (OTP) được gửi qua SMS để đảm bảo việc truy cập tài khoản được xác thực.</p></li>
                <li><p>- Tiêu chuẩn mã hóa MD5 128 bit.</p></li>
                <li><p>- Các nguyên tắc và quy định bảo mật thông tin trong ngành tài chính ngân hàng theo quy định của Ngân hàng nhà nước Việt Nam.</p></li>
            </ul>
            <p>Chính sách bảo mật giao dịch trong thanh toán của www.laidayrefill.com áp dụng với Khách hàng:</p>
            <ul>
                <li><p>- Lại Đây Refill cung cấp tiện ích lưu giữ thông tin thẻ để sử dụng cho các lần thanh toán sau trên www.laidayrefill.com với nguyên tắc Lại Đây Refill chỉ lưu chuỗi đã được mã hóa bởi Đối Tác Cổng Thanh Toán cung cấp cho Tiki, vì vậy Khách hàng lựa chọn sử dụng tiện ích lưu giữ thông tin thẻ thì việc bảo mật thông tin thẻ thanh toán Khách hàng được thực hiện bởi Đối Tác Cổng Thanh Toán đã được cấp phép.</p></li>
                <li><p>- Đối với thẻ quốc tế: thông tin thẻ thanh toán của Khách hàng mà có khả năng sử dụng để xác lập giao dịch không được lưu trên hệ thống của www.laidayrefill.com, Đối Tác Cổng Thanh Toán sẽ lưu giữ và bảo mật theo tiêu chuẩn quốc tế PCI DSS.</p></li>
                <li><p>- Đối với thẻ nội địa (internet banking), Lại Đây Refill chỉ lưu trữ mã đơn hàng, mã giao dịch và tên ngân hàng.</p></li>
            </ul>
            <p>Lại Đây Refill cam kết đảm bảo thực hiện nghiêm túc các biện pháp bảo mật cần thiết cho mọi hoạt động thanh toán thực hiện trên www.laidayrefill.com</p>
        </div>
    </div>
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

<script>
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }

    function w3_open1() {
        document.getElementById("mySidebar1").style.width = "100%";
        document.getElementById("mySidebar1").style.display = "block";
    }

    function w3_close1() {
        document.getElementById("mySidebar1").style.display = "none";
    }

    // Tabbed Menu
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }

    document.getElementById("myLink").click();

    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    function w3_open() {
        document.getElementById("mySidebarImage").style.display = "block";
        document.getElementById("myOverlayImage").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebarImage").style.display = "none";
        document.getElementById("myOverlayImage").style.display = "none";
    }

    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }


</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
<script>
    AOS.init();
</script>

</body>
</html>
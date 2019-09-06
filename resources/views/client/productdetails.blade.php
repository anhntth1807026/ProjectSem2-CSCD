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

<div class="w3-content w3-margin-left-80 w3-margin-right-80">
    <div class="w3-main">
        <div class="w3-white" id="apartment">
            <h2 class="w3-text-gray" style="margin: 80px 0 80px 0;text-align: center">Chi Tiết Sản Phẩm</h2>
            <div class="w3-row-padding" id="about">
                <div class="w3-col m6">
                    <div class="slideimage1">
                        <a href="#ex1" rel="modal:open">
                            <img class="demo"
                                 src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                 style="width:100%" alt="Snow" onclick="myFunction(this);">
                        </a>
                        <div id="ex1" class="modal">
                            <img class="demo"
                                 src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                 style="width:100%;height: auto" alt="Snow" onclick="myFunction(this);">
                            <a href="#" rel="modal:close"></a>
                        </div>
                    </div>
                    <div class="w3-container">
                        <div class="row w3-row-padding w3-section">
                            <div class="w3-col s3 column">
                                <a href="#ex1" rel="modal:open">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/63/de/76/63de7637de6840e0371944a2d06f8d19.jpg"
                                         style="width:100%" alt="Nature" onclick="myFunction(this);">
                                </a>
                                <div id="ex1" class="modal">
                                    <img class="demo"
                                          src="https://i.pinimg.com/564x/63/de/76/63de7637de6840e0371944a2d06f8d19.jpg"
                                          style="width:100%" alt="Nature" onclick="myFunction(this);">
                                    <a href="#" rel="modal:close"></a>
                                </div>
                            </div>
                            <div class="w3-col s3 column">
                                <a href="#ex1" rel="modal:open">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                         style="width:100%" alt="Snow" onclick="myFunction(this);">
                                </a>
                                <div id="ex1" class="modal">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                         style="width:100%" alt="Snow" onclick="myFunction(this);">
                                    <a href="#" rel="modal:close"></a>
                                </div>
                            </div>
                            <div class="w3-col s3 column">
                                <a href="#ex1" rel="modal:open">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                         style="width:100%" alt="Snow" onclick="myFunction(this);">
                                </a>
                                <div id="ex1" class="modal">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                         style="width:100%" alt="Snow" onclick="myFunction(this);">
                                    <a href="#" rel="modal:close"></a>
                                </div>
                            </div>
                            <div class="w3-col s3 column">
                                <a href="#ex1" rel="modal:open">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                         style="width:100%" alt="Snow" onclick="myFunction(this);">
                                </a>
                                <div id="ex1" class="modal">
                                    <img class="demo"
                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                         style="width:100%" alt="Snow" onclick="myFunction(this);">
                                    <a href="#" rel="modal:close"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col m6">
                    <p style="font-size: 30px;color: grey">Cọ Rửa Bình</p>
                    <div class="icon-bar" style="color: #dfde33de">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="icon-bar" style="color: grey">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <br>
                    <p style="font-size: 25px;color: grey">75.000 Đồng</p>
                    <P>Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được,
                        thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân' một cách dễ dàng.
                        Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có
                        sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên
                        có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong
                        bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi
                        bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong
                        căn nhà của bạn
                    </P>
                    <form action="/action_page.php">
                        <p style="font-size: 25px;color: grey">Số Lượng :
                            <input type="number" name="quantity" min="1" max="5" value="1"
                                   style="width: 50px;font-size: 25px">
                        </p>
                        <button type="submit" name="add-to-cart"
                                class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                                style="border-radius: 25px">Thêm Vào Giỏ Hàng
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <h1 style="text-align: center">Chi Tiết Sản Phẩm</h1>
                <div class="w3-third w3-center">
                    <i class="fas fa-search-plus w3-padding-64"></i>
                </div>
                <h5 class="w3-padding-32">TẠI SAO NHỮNG CHI TIẾT CỦA SẢN PHẨM THÂN THIỆN ĐẾN MÔI TRƯỜNG LẠI QUAN TRỌNG
                    ĐỐI VỚI NGƯỜI SỬ DỤNG ĐẾN THẾ?</h5>
                <p>Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm
                    đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin
                    giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.&nbsp;</p>
                <p>&nbsp;</p>
                <p>Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa
                    Thiên Nhiên đều có thể ‘cân' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu
                    chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng
                    ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử
                    lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa
                    nào trong căn nhà của bạn.&nbsp;</p>
                <p>&nbsp;</p>
                <p>Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về
                    thông tin sản phẩm, cũng như cách sử dụng và bảo quản.&nbsp;</p>
                <p>&nbsp;</p>
                <p>Cọ Rửa Bình EcoCleaner</p>
                <p>Thông tin:&nbsp;</p>
                <ul>
                    <li><p>Thân gỗ sồi, cọ sợi Tampico.</p></li>
                </ul>
                <p style="font-size: 25px;color: red;text-decoration: red">HƯỚNG DẪN SỬ DỤNG:&nbsp;</p>
                <ul>
                    <li>
                        <p>Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào thân cọ.</p>
                    </li>
                    <li>
                        <p>Thích hợp để chà rửa bình và các loại chai lọ có đáy sâu.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content contentponly">
                <div class="w3-third w3-center">
                    <i class="fas fa-spa w3-padding-64 w3-margin-right"></i>
                </div>
                <div class="w3-twothird">
                    <h1>Cách Vệ Sinh Sản Phẩm</h1>
                </div>

                <h5 class="w3-padding-32">LÀM THẾ NÀO ĐỂ LÀM SẠCH LY CÀ PHÊ HAY TUMBLER BÌNH ĐỰNG NƯỚC BẰNG THÉP KHÔNG
                    GỈ?</h5>

                <p>&nbsp;</p>

                <p>Độ bền của ly cà phê reusable hay tumbler chai đựng nước uống bằng thép không gỉ từ lâu đã được công
                    nhận, giữ ấm thức uống trong khi vẫn giữ được hương vị như mới của chúng. Tuy nhiên, khi bạn sử dụng
                    loại ly hay bình đựng này nhiều lần trong một thời gian dài, cặn và mùi sẽ tích tụ bên trong. Bạn có
                    thể kết hợp sử dụng các dụng cụ vệ sinh không&nbsp; tốn kém lắm để làm sạch và khử mùi trong ly hay
                    tumbler đựng nước của bạn như sau nha.</p>

                <p>&nbsp;</p>

                <p style="font-size: 25px;color: red;text-decoration: red">CÁC BƯỚC VỆ SINH:</p>

                <p>Bước 1: Đổ 2 muỗng baking soda vào ly hay bình rỗng.</p>

                <p>Bước 2: Đổ 1/4 cốc giấm trắng hoặc giấm táo vào ly hay bình inox cũng được.</p>

                <p>Bước 3: Xem hai thành phần bọt khi kết hợp. Hỗn hợp này sẽ giúp khử mùi và khử trùng ly hay bình.</p>

                <p>Bước 4: Vặn chặt nắp ly hay bình và lắc trong 5 giây.</p>

                <p>Bước 5: Đổ hỗn hợp ra và rửa cốc bằng nước nóng.</p>

                <p>Bước 6: Lau bên trong ly hay bình bằng một miếng vải ướt, và rửa lại cốc bằng nước nóng. Nếu bên
                    trong ly hay bình sâu quá, bạn có thể dùng với cây rửa ly xơ mướp hay cọ rửa bình để có thể chạm các
                    khu vực đáy sâu trong ly hay bình.</p>

                <p>&nbsp;</p>

                <p>NẾU BẠN VẪN CÒN NGẠI TRONG VIỆC LÀM SẠCH, VỆ SINH CÁI LY, CÁI BÌNH, CÁI TUMBLER CÁ NHÂN CỦA BẠN THÌ
                    HÃY ĐỌC TIẾP PHẦN NÀY NHA.</p>

                <p>&nbsp;</p>

                <p style="font-size: 25px;color: red;text-decoration: red">BẠN CÓ BIẾT?</p>

                <p>Vi khuẩn thích trú ẩn trong bình nước, chai và cốc reusable của bạn. Ngay cả khi bạn nghĩ rằng đã làm
                    sạch chúng một cách triệt để, thì vẫn nên làm sạch sâu ít nhất một lần một tuần. Nếu không, bạn đang
                    tạo điều kiện cho vi khuẩn tích tụ trong bình nước yêu thích.</p>

                <p>&nbsp;</p>

                <p># Trung bình có khoảng 465 tế bào vi khuẩn trên 1mm vuông trong một chai nước sau một tuần không được
                    làm sạch.</p>

                <p># Một chai nước của vận động viên có khoảng 313.499 đơn vị hình thành khuẩn lạc trên mỗi cm
                    vuông.</p>

                <p># Hơn 60% vi trùng được tìm thấy trên chai nước có thể khiến bạn bị bệnh.</p>

                <p>Chai nước của bạn có thể chứa nhiều vi trùng hơn một bát thức ăn dành cho thú cưng.</p>

                <p>&nbsp;</p>

                <p>Bạn thường hay vệ sinh những cái ly, bình bằng thép không gỉ như thế nào? Ví như người chị của chúng
                    mình ở nhà lại hay dùng Chanh Tươi để vắt nước cốt chanh và vệ sinh bình inox và kết hợp với Nước
                    Kiềm Tẩy Rửa ở Lại Đây để đánh bật một số cặn bám cứng đầu - tuy nhiên nếu vệ sinh mỗi ngày hoặc
                    tráng nước ngay sau khi uống sẽ giúp giảm hiện tượng bám mùi, bám cặn này. Hãy chia sẻ bí kíp với
                    chúng mình nhé. Chúc bạn có được những thức uống ngon đựng trong những chiếc ly, bình yêu thương
                    ấy!</p>

                <p>&nbsp;</p>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container">
    <br>
    <br>
    <h2 class="h2" style="text-align: center">CÁC SẢN PHẨM KHÁC</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1"
                             src="https://i.pinimg.com/564x/96/aa/c7/96aac7f9358d1dd68f0814b93edc216b.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Túi Lưới Đi Chợ 100% Cotton</a></h3>
                    <div class="price">25,000 Đ
                        <span>17,000 Đ</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1"
                             src="https://i.pinimg.com/564x/13/d2/cb/13d2cb069106fbabd0f3fda0d219e93e.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Bàn Chải Tre Kiểu Nón Người Lớn</a></h3>
                    <div class="price">79,000 Đ
                        <span>75,000 Đ</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1"
                             src="https://i.pinimg.com/564x/f6/2b/1d/f62b1d689075947e277b87f4b4f8c824.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Ly thông minh xếp gọn - Silicon an toàn BPA-free & chuẩn FDA -
                            350ml</a></h3>
                    <div class="price">200,000 Đ
                        <span>160,000 Đ</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1"
                             src="https://i.pinimg.com/564x/4f/4c/7a/4f4c7a32dce52f118aafe432a049772c.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">REFILL Vụn xà bông</a></h3>
                    <div class="price">400 Đ/1 Miếng
                        <span>350 Đ/1 Miếng</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
<br>

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

    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false,
            hover: false,
            gutter: 0,
            belowOrigin: false,
            alignment: 'left',
            stopPropagation: false
        }
    );

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
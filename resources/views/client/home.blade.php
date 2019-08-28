<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>
    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../thumbnail/logo-short-cut.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/w3.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/homePages.css">

    <script src="../js/jquery-3.3.1.slim.min.js"></script>

    <script src="../js/ajaxlibspopper.js1.14.6umdpopper.min.js"></script>

    <script src="../js/bootstrap4.2.1jsbootstrap.min.js"></script>
</head>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Raleway", sans-serif
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

</style>
<body>
<!--Header-->

<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
            <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
            <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
            <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        </div>

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
           onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>


<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none"
     id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
        <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
        <p><a href="#about"
              class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn
                more and start today</a></p>
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

<div class="w3-container w3-light-white" style="padding:100px 16px">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <div data-aos="zoom-out-up"><h2>Chào mừng bạn đến với LaiDayStation</h2>
                <p>
                    Lai Day Station là nơi dành cho những ai quan tâm đến lối sống xanh, bền vững và thân thiện với môi
                    trường. Tại LaiDay, bạn sẽ cảm thấy hạnh phúc, tình yêu và lòng biết ơn đối với các sản phẩm do người
                    Việt Nam làm ra vì lợi ích của cộng đồng và cho lối sống đơn giản và lành mạnh.
                </p>
            </div>

            {{--            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>--}}
        </div>
        <div class="w3-col m6">
            <img class="w3-image w3-round-large"
                 src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/68506579_461342201388214_6595445951190532096_o.jpg?_nc_cat=102&_nc_eui2=AeHYmQYLVF7Fc4UlqFOZRwqaM_F2rbpH6QC1Ydmd5Xp_0tlANOsT1HMJCDXTzD2T3fJdadGYp4vRRQk_p3PRG28tGXlIHCbDoojiz3cI9eU9Yg&_nc_oc=AQm-Hv516S5oeN7CwPCbs-oAXQYQrtKlgI1MMeKvGk5HxdVfLGrPh3v8VP1_qgIEGXc&_nc_ht=scontent.fhan2-2.fna&oh=8a6fd904316e6b4171115637b20d8548&oe=5E12076E"
                 alt="Buildings" width="700" height="394">
        </div>
    </div>
</div>

<div class="w3-container" style="padding:70px 16px;background-color: black;color: white" id="about">
    <h3 class="w3-center">About</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
        <div class="w3-quarter">
            <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
            <p class="w3-large">Responsive</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Passion</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Design</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Support</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
    </div>
</div>
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <h1>Best Seller</h1>
        <div class="w3-quarter">
            <img src="{{ asset('img/home-care/co-rua-binh.webp') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Cọ Rửa Bình</h5>
            <h6 class="w3-opacity">99.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/home-care/hop-khan-giay-go.webp') }}" alt="Steak" style="width:100%">
            <h5 style="height: 70px">Hộp Khăn Giấy Gỗ</h5>
            <h6 class="w3-opacity">199.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/home-care/dua-go-trac.webp') }}"
                 alt="" style="width:100%">
            <h5 style="height: 70px">Đũa Gỗ Trắc</h5>
            <h6 class="w3-opacity">49.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/home-care/xit-khu-mui.webp') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Xịt Khử Mùi</h5>
            <h6 class="w3-opacity">429.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
    </div>
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <h1>All Products</h1>
        <div class="w3-quarter">
            <img src="{{ asset('img/home-care/ban-chai-nguoi-lon.webp') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Bàn chải tre người lớn</h5>
            <h6 class="w3-opacity">79.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/new-image/ly-thong-minh-xep-gon.jpg') }}" alt="Steak" style="width:100%">
            <h5 style="height: 70px">Ly thông minh xếp gọn</h5>
            <h6 class="w3-opacity">139.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/new-image/tui-vai-da-nang.webp.jpg') }}"
                 alt="" style="width:100%">
            <h5 style="height: 70px">Túi vải đa năng</h5>
            <h6 class="w3-opacity">49.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet.webp') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Bình nước giữ nhiệt nắp gỗ</h5>
            <h6 class="w3-opacity">429.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
    </div>

    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <img src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet-cau-vong.webp') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Bình nước giữ nhiệt cầu vồng</h5>
            <h6 class="w3-opacity">429.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/new-image/gel-tay-da-chet-te-bao.jpg') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Gel tẩy tế bào chết</h5>
            <h6 class="w3-opacity">219.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/new-image/khau-trang-loc-bui.jpg') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Khẩu trang lọc bụi</h5>
            <h6 class="w3-opacity">50.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
        <div class="w3-quarter">
            <img src="{{ asset('img/personal-care/ong-hut-thuy-tinh.webp') }}" alt="" style="width:100%">
            <h5 style="height: 70px">Ống hút thuỷ tinh</h5>
            <h6 class="w3-opacity">49.000₫</h6>

            <button class="w3-button w3-block w3-black w3-margin-bottom">Sản phẩm chi tiết</button>
        </div>
    </div>
</div>

<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
</div>


<div class="w3-row-padding w3-text-white w3-large w3-padding-32">
    <h2 class="w3-center" style="color:#000;">Our Blog</h2>
    <p class="w3-center w3-large" style="color: black">Key features of our company</p>
    <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
            {{--            <img src="img/saigon01.jpg" alt="Cinque Terre" style="width:100%">--}}
            <img style="width:100%"
                 src="https://scontent.cdninstagram.com/vp/29dd4dc145479b63b8985aa509d640d3/5DFF1BDB/t51.2885-15/sh0.08/e35/s640x640/67739269_162577554923148_6121316968252433117_n.jpg?_nc_ht=scontent.cdninstagram.com">
            <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">
                Đơn giản nhưng thực dụng và cực bền, đây có lẽ là tính từ miêu tả rõ nhất dành cho...
            </span>
        </div>
    </div>
    <div class="w3-half">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
                    {{--                    <img src="img/saigon02.jpg" alt="New York" style="width:100%">--}}
                    <img style="width:100%"
                         src="https://scontent.cdninstagram.com/vp/bc3754fa0d65b257391c9e06f3f92a65/5E051436/t51.2885-15/e15/s640x640/68951904_535555540549692_8418920016606574286_n.jpg?_nc_ht=scontent.cdninstagram.com">
                    <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">BẠN CÓ BIẾT?
                Campuchia sẽ gửi trả lại 1,600 tấn rác nhựa tìm thấy trong các containers nhập khẩu từ Mỹ và ...
                    </span>
                </div>
            </div>
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
{{--                    <img src="img/saigon03.jpg" alt="San Francisco" style="width:100%">--}}
                    <img style="width:100%"
                         src="https://scontent.cdninstagram.com/vp/54e66cd8a65d932d348341ff5851fd87/5E013DD7/t51.2885-15/sh0.08/e35/s640x640/67307647_338887943659531_4099783374168449683_n.jpg?_nc_ht=scontent.cdninstagram.com">
                    <span class="w3-display-bottomleft w3-padding " style="color: black">
BẠN ĐANG TÌM GIẢI PHÁP CHO VIỆC SÚC MIỆNG SAO CHO "XANH" HƠN?
SEEKING FOR A GREENER SOLUTION FOR YOUR MOUTH-WASHING?

Bột súc miệng thảo mộc 100% organic từ tinh dầu bạc hà, bột quế, đá muối hồng Himalaya, bột vỏ cam khô và trà xanh.
                    </span>
                </div>
            </div>
        </div>
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
{{--                    <img src="img/saigon04.jpg" alt="Pisa" style="width:100%">--}}
                    <img style="width:100%" src="https://scontent.cdninstagram.com/vp/2bd171501f20689bc46f711229f535c0/5E158F79/t51.2885-15/e15/s640x640/69223974_148767146222835_6222199774537592212_n.jpg?_nc_ht=scontent.cdninstagram.com">
                    <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">BẠN CÓ BIẾT?
                        Đảo Henderson tại Thái Bình Dương, Di Sản Thế Giới do UNESCO trao tặng ...
                    </span>
                </div>
            </div>
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
{{--                    <img src="img/saigon05.jpg" alt="Paris" style="width:100%">--}}
                    <img style="width:100%" src="https://scontent.cdninstagram.com/vp/987291428426151e3acffe90facc87f5/5E0998D3/t51.2885-15/sh0.08/e35/p640x640/69833198_421626735143058_2646100798978465469_n.jpg?_nc_ht=scontent.cdninstagram.com">
                    <span class="w3-display-bottomleft w3-padding" style="color: black">“Cái răng cái tóc là góc con người", một mái tóc đẹp, chắc khoẻ, không đòi hỏi cầu kì trong chăm sóc và không bị phụ thuộc hoá chất có lẽ là ước muốn của nhiều người,...
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3-container" style="padding:100px 16px;color: white">
    <div class="w3-row-padding">
        <div class="w3-col m5" style="color:#000;">
            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                <div class="w3-content" style="max-width:600px">
                    <h4 class="w3-center"><b>Contact Me</b></h4>
                    <p>Do you want me to photograph you? Fill out the form and fill me in with the details :) I love
                        meeting new people!</p>
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
                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send Message</button>
                    </form>
                </div>
            </div>
            <!--            <h2>Welcome to Logo</h2>-->
            <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et-->
            <!--                dolore.</p>-->
            <!--            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>-->
        </div>
        <div class="w3-col m7">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-c2a3f8c5-10d9-4674-8845-11d66a175650"></div>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
                <div class="footer-logo">
                    <a href="#" style="color:#999999 "><img src="" alt="Logo" class="img-responsive"></a>
                </div>
                <p>Chung tay bảo vệ môi trường <br class="hidden-xs">Join hands to protect the environment</p>
                <ul class="contact-list list-unstyled">
                    <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> So 8 Ton Thuat Thuyet, My Dinh, Ha Noi.</li>
                    <li><a href="mailto:anhntth1807026@fpt.edu.vn" style="color:#999999 "><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span> TreeHugger@mail.com</a></li>
                    <li><a href="tel:+84 94 585 2000" style="color:#999999 "><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> +84 94 585 2000 </a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>POPULAR TAGS</h3>
                    <p>
                        <span class="w3-tag w3-black w3-margin-bottom">Bottle</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Tote</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Straws</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mask</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Box</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Gel</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">mask</span>
                    </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h3>SUBSCRIBE</h3>
                <div class="subscribe">
                    <p>Đăng kí theo dõi để nhận những thông tin mới nhất về chúng mình<br class="hidden-xs"></p>
                    <form class="subscribe-form" action="#">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Your Gmail" aria-label="Gmail" aria-describedby="addon-wrapping">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping"><i class="far fa-paper-plane"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    // Modal Image Gallery
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
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>

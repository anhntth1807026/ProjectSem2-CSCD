@extends('client.layout')

@section('content')
    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            /*font-family: 'Oxygen', Arial, Helvetica, 'Nimbus Sans L', sans-serif;*/
            font-family: 'sofia_proregular',sans-serif;
            line-height: 28px;
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

        / Full height image header /
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
        / padding-top: 32px!important; /
        padding-bottom: 32px !important;
        }


        element.style {
        }

        .w3-padding-32 {
        / padding-top: 32px!important; /
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
    <div>
        <img class="mySlides" src="https://www.gunite.co.uk/wp-content/uploads/2017/09/Policy-and-Procedures-1140x427.jpg" style="width:70%; margin: auto; display: block;">
    </div>

    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <h3 style="text-align: center">CHÍNH SÁCH VẬN CHUYỂN, GIAO NHẬN</h3>
            <h4 style="text-align: center;margin: 40px 0 40px 0;opacity: 0.75">KHÀNG HÀNG "HƯỞNG LỢI"</h4>
            <div class="content">
                <p>Lại Đây Refill Station giao hàng thanh toán tận nơi trên toàn quốc thông qua các đối tác giao nhận uy
                    tín
                    như Giao Hàng Nhanh, Ahamove, Giao Hàng Tiết Kiệm. Thời gian và phí giao hàng tùy thuộc vào từng khu
                    vực
                    khác nhau. Thông tin chi phí vận chuyển và thời gian giao hàng đến tại nơi cho khách hàng sẽ được
                    Lại
                    Đây Refill thông báo cho khách hàng xác nhận trước khi chuyển hàng.
                </p>
            </div>

            <div class="content1 w3-padding-32">
                <p>Lại Đây Refill không nhận giao hàng các đơn hàng có giá trị dưới 99.000đ</p>
                <p>Thời gian giao hàng tính từ lúc khách đặt hàng và thanh toán thành công.</p>
                <p>Đơn đặt hàng từ 8h30 – 17h00 thì chúng tôi sẽ liên hệ ngay trong ngày.</p>
                <p>Đơn hàng phát sinh sau 17h được tính là đơn hàng đặt vào 10h sáng hôm sau.</p>
                <p>Đơn đặt hàng sau 17h00 thứ 7 và Chủ Nhật thì chúng tôi sẽ liên hệ vào sáng thứ 2 tuần sau.</p>
            </div>

            <div class="content1 w3-padding-32">
                <p>Về thời gian giao hàng, Lại Đây cùng các đối tác giao nhận sắp xếp lịch giao hàng như sau:</p>
                <ul style="margin-left: 20px">
                    <li><p>- Giao hàng trong ngày hoặc từ 1 – 2 ngày cho khách hàng có địa chỉ ở Tp.HCM.</p></li>
                    <li><p>- Giao hàng từ 3 – 5 ngày cho khách hàng có địa chỉ ở các tỉnh thành phố khác (trừ thời gian
                            cao
                            điểm như: lễ, tết ...)</p></li>
                </ul>
                <p>Lại Đây Refill không cam kết 100% đơn hàng sẽ được giao trong khoảng thời gian nêu trên. Một số
                    trường
                    hợp thời gian có thể bị kéo dài, Lại Đây Refill sẽ chủ động thông báo trước cho khách hàng.</p>
            </div>

            <div class="content1 w3-padding-32">
                <p>Bởi việc vận chuyển hàng hóa do các đơn vị cung cấp dịch vụ vận chuyển thực hiện nên chúng tôi không
                    bảo
                    đảm chắc chắn và không chịu trách nhiệm về bất kỳ tổn thất, chi phí thiệt hại, hoặc bất cứ chi phí
                    phát
                    sinh nào khác do việc giao hàng chậm trễ gây ra.</p>
            </div>

            <div class="content1 w3-padding-32">
                <p>Để kiểm tra lộ trình đơn hàng của mình, khách hàng vui lòng cung cấp cho Lại Đây Refill chính xác số
                    điện
                    thoại đã đặt hàng.</p>
            </div>

            <div class="content1 w3-padding-32">
                <p>Sau khi nhận hàng và thanh toán, khách hàng vui lòng kiểm tra ngay, đồng thời giữ lại bao bì đóng gói
                    hay
                    thông tin đính kèm để Lại Đây Refill có thể xử lý chính xác và kịp thời nếu đơn hàng có sự cố.</p>
            </div>

            <div class="content1 w3-padding-32">
                <p>Trường hợp không thể giao hàng theo thời gian đã định, Lại Đây Refill sẽ thông báo cho khách hàng về
                    sự
                    chậm trễ này trong thời gian sớm nhất.</p>
                <p>Trường hợp giao hàng chậm, Lại Đây Refill chấp nhận vô điều kiện về việc hủy đơn hàng của khách
                    hàng.</p>
            </div>

            <h4>CÂU HỎI THƯỜNG GẶP</h4>

            <div class="content1 w3-padding-32">
                <h5 style="color: red">Tôi có thể yêu cầu giao hàng vào giờ nhất định được không?</h5>
                <p>Hiện tại các đối tác giao nhận của Lại Đây chỉ hỗ trợ việc chọn NGÀY giao hàng và chưa thể hỗ trợ quý
                    khách chọn GIỜ giao hàng. Trước khi giao đơn vị giao nhận sẽ báo giờ cụ thể có thể tới giao để bạn
                    tiện
                    sắp xếp nhận hàng. Lại Đây đang cố gắng cải thiện vấn đề này để mang lại cho quý khách trải nghiệm
                    mua
                    sắm tốt hơn.</p>
            </div>

            <div class="content1 w3-padding-32">
                <h5 style="color: red">Tôi đang rất cần sản phẩm, Lại Đây có thể giao gấp cho tôi được không?</h5>
                <p>Nếu bạn ở khu vực Tp.HCM, vui lòng liên hệ số 028 6270 2141 để được hỗ trợ hết mức. Lại Đây sẽ kiểm
                    tra
                    và báo lại bạn thời gian có thể giao sớm nhất và mức phí phát sinh thêm (tùy thuộc vị trí của bạn).
                    Trong một số trường hợp thuận lợi, bạn có thể nhận hàng sau 60 phút kể từ lúc đặt hàng.</p>
                <p>Nếu bạn ở các tỉnh khác, hiện tại thời gian giao hàng của Lại Đây nêu trên đã là nhanh nhất có thể.
                    Bạn
                    không thể yêu cầu giao nhanh hơn.</p>
            </div>

            <div class="content1 w3-padding-32">
                <h5 style="color: red">Sau bao lâu tôi sẽ nhận được hàng?</h5>
                <p>Thời gian bạn nhận được hàng tùy thuộc vào địa chỉ nhận hàng của quý khách.</p>
                <ul>
                    <li><p>- Khu vực Thành phố Hồ Chí Minh: Quý khách có thể nhận hàng trong vòng 1 ngày đối với các
                            quận nội-ngoại thành và trong vòng 2 ngày đối với các huyện (tính từ thời điểm hoàn tất xác
                            nhận đơn hàng).</p>
                    </li>
                    <li><p>- Khu vực Đà Nẵng, Hà Nội và các tỉnh/thành từ Bình Định trở vào: Quý khách nhận hàng trong
                            vòng 2 đến 3 ngày (tính từ thời điểm hoàn tất xác nhận đơn hàng).</p></li>
                    <li><p>- Các tỉnh/thành từ Quảng Ngãi trở ra: Quý khách nhận hàng trong vòng 3 đến 5 ngày (tính từ
                            thời điểm hoàn tất xác nhận đơn hàng).</p></li>
                </ul>
                <p>Trước khi giao hàng, đơn vị vận chuyển sẽ liên hệ với quý khách qua điện thoại để hẹn chính xác ngày
                    và giờ giao hàng. Quý khách lưu ý cung cấp số điện thoại đúng để đối tác giao nhận có thể liện hệ
                    thuận tiện với quý khách.</p>
                <p>Lại Đây Refill hay đối tác giao nhận sẽ không chịu trách nhiệm trong trường hợp địa chỉ giao hàng,
                    điện thoại người nhận hàng không chính xác hay mất liên lạc.</p>
            </div>
        </div>
    </div>

    {{--<footer id="footer">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">--}}
    {{--                <div class="footer-logo">--}}
    {{--                    <a href="#" style="color:#999999 "><img src="" alt="Tree Hugger" class="img-responsive"></a>--}}
    {{--                </div>--}}
    {{--                <p>Chung tay bảo vệ môi trường <br class="hidden-xs">Join hands to protect the environment</p>--}}
    {{--                <ul class="contact-list list-unstyled">--}}
    {{--                    <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> So 8 Ton Thuat--}}
    {{--                        Thuyet, My Dinh, Ha Noi.--}}
    {{--                    </li>--}}
    {{--                    <li><a href="mailto:anhntth1807026@fpt.edu.vn" style="color:#999999 "><span class="icon"><i--}}
    {{--                                        class="fa fa-envelope-o" aria-hidden="true"></i></span> treehugger@mail.com</a>--}}
    {{--                    </li>--}}
    {{--                    <li><a href="tel:+84 94 585 2000" style="color:#999999 "><span class="icon"><i class="fa fa-phone"--}}
    {{--                                                                                                   aria-hidden="true"></i></span>--}}
    {{--                            +84 94 585 2000 </a></li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}

    {{--            <div class="col-xs-12 col-sm-6 col-md-4">--}}
    {{--                <h3>POPULAR TAGS</h3>--}}
    {{--                <p>--}}
    {{--                    <span class="w3-tag w3-black w3-margin-bottom">Bottle</span> <span--}}
    {{--                            class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Tote</span> <span--}}
    {{--                            class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Straws</span>--}}
    {{--                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mask</span> <span--}}
    {{--                            class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Box</span> <span--}}
    {{--                            class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Gel</span>--}}
    {{--                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">mask</span>--}}
    {{--                </p>--}}
    {{--            </div>--}}

    {{--            <div class="col-xs-12 col-sm-6 col-md-4">--}}
    {{--                <h3>SUBSCRIBE</h3>--}}
    {{--                <div class="subscribe">--}}
    {{--                    <p>Đăng kí theo dõi để nhận những thông tin mới nhất về chúng mình<br class="hidden-xs"></p>--}}
    {{--                    <form class="subscribe-form" action="#">--}}
    {{--                        <div class="input-group flex-nowrap">--}}
    {{--                            <input type="text" class="form-control" placeholder="Your Gmail" aria-label="Gmail"--}}
    {{--                                   aria-describedby="addon-wrapping">--}}
    {{--                            <span style="cursor: pointer; position: absolute; right: 2px; top: 14px; FONT-SIZE: 20px;"--}}
    {{--                                  id="addon-wrapping"><i class="far fa-paper-plane"></i></span>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</footer>--}}

@endsection

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

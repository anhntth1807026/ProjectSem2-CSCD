@extends('client.layout')

@section('content')
    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            /*!*font-family: 'Oxygen', Arial, Helvetica, 'Nimbus Sans L', sans-serif;*!*/
            /*font-family: 'sofia_proregular',sans-serif;*/
            /*line-height: 28px;*/
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

        .w3-bar .w3-button {
            padding: 16px;
        }

        .w3-padding-32 {
            padding-bottom: 32px !important;
        }

        .w3-padding-32 {
            padding-bottom: 32px !important;
        }

        .w3-padding-large {
            padding: 0px 24px !important;
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
    </style>
    </head>
    <body>
    <div class="container">
        <div>
            <img class="mySlides" src="https://www.gunite.co.uk/wp-content/uploads/2017/09/Policy-and-Procedures-1140x427.jpg" style="width:70%; margin: auto; display: block;">
        </div>
        <br>

        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <h3 style="text-align: center">CHÍNH SÁCH BẢO MẬT THANH TOÁN</h3>
                <h4 style="text-align: center;margin: 40px 0 40px 0;opacity: 0.75">KHÀNG HÀNG "ẨN DANH"</h4>
                <div class="content1">
                    <h5>Cam kết bảo mật</h5>
                    <p>Hệ thống thanh toán thẻ được cung cấp bởi các đối tác cổng thanh toán (“Đối Tác Cổng Thanh Toán”) đã
                        được
                        cấp phép hoạt động hợp pháp tại Việt Nam. Theo đó, các tiêu chuẩn bảo mật thanh toán thẻ tại
                        www.laidayrefill.com đảm bảo tuân thủ theo các tiêu chuẩn bảo mật ngành.
                    </p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5>Quy định bảo mật</h5>
                    <p>Chính sách giao dịch thanh toán bằng thẻ quốc tế và thẻ nội địa (internet banking) đảm bảo tuân thủ
                        các tiêu chuẩn bảo mật của các Đối Tác Cổng Thanh Toán gồm:</p>
                    <ul>
                        <li><p>- Thông tin tài chính của Khách hàng sẽ được bảo vệ trong suốt quá trình giao dịch bằng giao
                                thức SSL (Secure Sockets Layer).</p></li>
                        <li><p>- Chứng nhận tiêu chuẩn bảo mật dữ liệu thông tin thanh toán (PCI DSS) do Trustwave cung
                                cấp.</p></li>
                        <li><p>- Mật khẩu sử dụng một lần (OTP) được gửi qua SMS để đảm bảo việc truy cập tài khoản được xác
                                thực.</p></li>
                        <li><p>- Tiêu chuẩn mã hóa MD5 128 bit.</p></li>
                        <li><p>- Các nguyên tắc và quy định bảo mật thông tin trong ngành tài chính ngân hàng theo quy định
                                của Ngân hàng nhà nước Việt Nam.</p></li>
                    </ul>
                    <p>Chính sách bảo mật giao dịch trong thanh toán của www.laidayrefill.com áp dụng với Khách hàng:</p>
                    <ul>
                        <li><p>- Lại Đây Refill cung cấp tiện ích lưu giữ thông tin thẻ để sử dụng cho các lần thanh toán
                                sau trên www.laidayrefill.com với nguyên tắc Lại Đây Refill chỉ lưu chuỗi đã được mã hóa bởi
                                Đối Tác Cổng Thanh Toán cung cấp cho Tiki, vì vậy Khách hàng lựa chọn sử dụng tiện ích lưu
                                giữ thông tin thẻ thì việc bảo mật thông tin thẻ thanh toán Khách hàng được thực hiện bởi
                                Đối Tác Cổng Thanh Toán đã được cấp phép.</p></li>
                        <li><p>- Đối với thẻ quốc tế: thông tin thẻ thanh toán của Khách hàng mà có khả năng sử dụng để xác
                                lập giao dịch không được lưu trên hệ thống của www.laidayrefill.com, Đối Tác Cổng Thanh Toán
                                sẽ lưu giữ và bảo mật theo tiêu chuẩn quốc tế PCI DSS.</p></li>
                        <li><p>- Đối với thẻ nội địa (internet banking), Lại Đây Refill chỉ lưu trữ mã đơn hàng, mã giao
                                dịch và tên ngân hàng.</p></li>
                    </ul>
                    <p>Lại Đây Refill cam kết đảm bảo thực hiện nghiêm túc các biện pháp bảo mật cần thiết cho mọi hoạt động
                        thanh toán thực hiện trên www.laidayrefill.com</p>
                </div>
            </div>
        </div>
    </div>

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

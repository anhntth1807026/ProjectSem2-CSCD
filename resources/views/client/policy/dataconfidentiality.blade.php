@extends('client.layout')

@section('content')
    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            /*font-family: 'Oxygen', Arial, Helvetica, 'Nimbus Sans L', sans-serif;*/
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
            /*font-family: "Segoe UI", Arial, sans-serif;*/
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

    <div class="container">

        <div>
            <img class="mySlides" src="https://www.gunite.co.uk/wp-content/uploads/2017/09/Policy-and-Procedures-1140x427.jpg" style="width:70%; margin: auto; display: block;">
        </div>
        <br>

        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <h3 style="text-align: center">CHÍNH SÁCH BẢO MẬT THÔNG TIN</h3>
                <h4 style="text-align: center;margin: 40px 0 40px 0;opacity: 0.75">KHÀNG HÀNG "CÓ QUYỀN"</h4>
                <div class="content1">
                    <h5 style="text-decoration: underline">Mục đích và phạm vi thu thập</h5>
                    <p>Việc thu thập dữ liệu chủ yếu trên website của Lại Đây Refill
                        bao gồm: họ tên, email, điện thoại, địa chỉ khách hàng trong mục
                        liên hệ. Đây là các thông tin mà Lại Đây Refill cần khách hàng
                        cung cấp bắt buộc khi gửi thông tin nhờ tư vấn hay muốn mua sản
                        phẩm và để Lại Đây Refill liên hệ xác nhận lại với khách hàng trên
                        website nhằm đảm bảo quyền lợi cho người tiêu dùng.
                        Khách hàng sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động
                        sử dụng dịch vụ dưới thông tin mà mình cung cấp và hộp thư điện tử
                        của mình. Ngoài ra, khách hàng có trách nhiệm thông báo kịp thời cho
                        webiste của Lại Đây Refill về những hành vi sử dụng trái phép, lạm dụng,
                        vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có
                        biện pháp giải quyết phù hợp.
                    </p>
                </div>
                <div class="content1 w3-padding-32">
                    <h5 style="text-decoration: underline">Phạm vi sử dụng thông tin</h5>
                    <p>Lại Đây Refill sử dụng thông tin khách hàng cung cấp để:</p>
                    <ul>
                        <li><p>- Liên hệ xác nhận đơn hàng và giao hàng cho khách hàng khi nhận được yêu cầu từ khách hàng;</p>
                        </li>
                        <li><p>- Cung cấp thông tin về sản phẩm đến khách hàng nếu có yêu cầu từ khách hàng;</p></li>
                        <li><p>- Gửi email tiếp thị, khuyến mại về hàng hóa do chúng tôi bán;</p></li>
                        <li><p>- Gửi các thông báo về các hoạt động của website công ty;</p></li>
                        <li><p>- Liên lạc và giải quyết với người dùng trong những trường hợp đặc biệt;</p></li>
                        <li><p>- Không sử dụng thông tin cá nhân của người dùng ngoài mục đích xác nhận và liên hệ có liên quan
                                đến giao dịch tại công ty;</p></li>
                        <li><p>- Khi có yêu cầu của cơ quan tư pháp bao gồm: Viện kiểm sát, tòa án, cơ quan công an điều tra
                                liên quan đến hành vi vi phạm pháp luật nào đó của khách hàng.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="text-decoration: underline">Thời gian lưu trữ thông tin</h5>
                    <p>Dữ liệu cá nhân của khách hàng sẽ được lưu trữ cho đến khi có yêu cầu ban quản trị hủy bỏ. Còn lại trong
                        mọi trường hợp thông tin cá nhân khách hàng sẽ được bảo mật trên máy chủ của công ty.</p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="text-decoration: underline">Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</h5>
                    <p>LẠI ĐÂY REFILL STATION</p>
                    <p>8 Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội, Việt Nam</p>
                    <p>0945852000</p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="text-decoration: underline">Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá
                        nhân của mình</h5>
                    <p>Khách hàng có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình bằng cách
                        liên hệ với ban quản trị website của Lại Đây Refill thực hiện việc này. </p>
                    <p> hàng có quyền gửi khiếu nại về việc bị lộ thông tin cá nhân đến Ban quản trị của website của công ty.
                        Khi tiếp nhận những phản hồi này, Lại Đây Refill sẽ xác nhận lại thông tin, trường hợp đúng như phản ánh
                        của khách hàng tùy theo mức độ, Lại Đây Refill sẽ có những biện pháp xử lý kịp thời.</p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="text-decoration: underline">Cam kết bảo mật thông tin cá nhân khách hàng</h5>
                    <p>Thông tin cá nhân của khách hàng trên Lại Đây Refill được Lại Đây Refill cam kết bảo mật tuyệt đối theo
                        chính sách bảo vệ thông tin cá nhân của công ty. Việc thu thập và sử dụng thông tin của mỗi khách hàng
                        chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.
                    <p>Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của khách
                        hàng khi không có sự cho phép đồng ý từ khách hàng.</p>
                    <p>Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân khách hàng,
                        Lại Đây Refill sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và
                        thông báo cho khách hàng được biết.</p>
                    <p>Ban quản lý Lại Đây Refill yêu cầu các cá nhân khi đăng ký/mua hàng phải cung cấp đầy đủ thông tin cá
                        nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, điện thoại,…., và chịu trách nhiệm về tính
                        pháp lý của những thông tin trên. Ban quản lý Lại Đây Refill không chịu trách nhiệm cũng như không giải
                        quyết mọi khiếu nại có liên quan đến quyền lợi của khách hàng đó nếu xét thấy tất cả thông tin cá nhân
                        của khách hàng đó cung cấp khi đăng ký ban đầu là không chính xác.</p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="text-decoration: underline">Bảo mật thông tin khách hàng</h5>
                    <p>Bảo mật thông tin Khách hàng là một trong những ưu tiên nhằm tạo điều kiện mua hàng trực tuyến tốt nhất
                        cho bạn tại www.laidayrefil.com. Chúng tôi hiểu sử dụng hợp lý và bảo mật thông tin sẽ thể hiện sự quan
                        tâm của Lại Đây Refill dành cho Khách hàng. Vui lòng đọc các chính sách bảo mật dưới đây để hiểu hơn
                        những cam kết mà Lại Đây Refill thực hiện:</p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">a. Thu thập thông tin cá nhân:</h5>
                    <ul>
                        <li><p>- Các thông tin thu thập thông qua website www.laidayrefil.com sẽ giúp chúng tôi:</p>
                            <ul style="margin-left: 20px">
                                <li><p>- Hỗ trợ khách hàng khi mua sản phẩm</p></li>
                                <li><p>- Giải đáp thắc mắc khách hàng</p></li>
                                <li><p>- Cung cấp cho bạn thông tin mới nhất trên Website của chúng tôi</p></li>
                                <li><p>- Xem xét và nâng cấp nội dung và giao diện của Website</p></li>
                                <li><p>- Thực hiện các bản khảo sát khách hàng</p></li>
                                <li><p>- Thực hiện các hoạt động quảng bá liên quan đến các sản phẩm và dịch vụ của
                                        www.laidayrefil.com</p></li>
                            </ul>
                        </li>
                        <li><p>- Để truy cập và sử dụng một số dịch vụ, sản phẩm tại www.laidayrefil.com, quý khách có thể sẽ
                                được
                                yêu cầu đăng ký với chúng tôi thông tin cá nhân (Email, Họ tên, Số ĐT liên lạc, Địa chỉ…). Mọi
                                thông tin khai báo phải đảm bảo tính chính xác và hợp pháp. Lại Đây Refill không chịu mọi trách
                                nhiệm liên quan đến pháp luật của thông tin khai báo.</p></li>
                        <li><p>- Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang quý khách xem,
                                số
                                links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến
                                www.laidayrefil.com Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) quý khách
                                sử dụng mỗi khi truy cập vào website www.laidayrefil.com, bao gồm: địa chỉ IP, loại Browser,
                                ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">b. Sử dụng thông tin cá nhân:</h5>
                    <ul>
                        <li><p>- Lại Đây Refill thu thập và sử dụng thông tin cá nhân quý khách với mục đích phù hợp và hoàn
                                toàn tuân thủ nội dung của “Chính sách bảo mật” này.</p>
                        </li>
                        <li><p>- Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới
                                các hình thức như: gởi thư ngỏ, đơn đặt hàng, thư cảm ơn, thông tin về kỹ thuật và bảo mật, quý
                                khách có thể nhận được thư định kỳ cung cấp thông tin sản phẩm, dịch vụ mới, thông tin về các sự
                                kiện sắp tới hoặc thông tin tuyển dụng nếu quý khách đăng kí nhận email thông báo.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">c. Chia sẻ thông tin cá nhân:</h5>
                    <ul>
                        <li><p>- Ngoại trừ các trường hợp về Sử dụng thông tin cá nhân như đã nêu trong chính sách này, chúng
                                tôi cam kết sẽ không tiết lộ thông tin cá nhân bạn ra ngoài.</p>
                        </li>
                        <li><p>- Trong một số trường hợp, chúng tôi có thể thuê một đơn vị độc lập để tiến hành các dự án nghiên
                                cứu thị trường và khi đó thông tin của bạn sẽ được cung cấp cho đơn vị này để tiến hành dự án.
                                Bên thứ ba này sẽ bị ràng buộc bởi một thỏa thuận về bảo mật mà theo đó họ chỉ được phép sử dụng
                                những thông tin được cung cấp cho mục đích hoàn thành dự án.</p></li>
                        <li><p>- Chúng tôi có thể tiết lộ hoặc cung cấp thông tin cá nhân của bạn trong các trường hợp thật sự
                                cần thiết như sau: (a) khi có yêu cầu của các cơ quan pháp luật; (b) trong trường hợp mà chúng
                                tôi tin rằng điều đó sẽ giúp chúng tôi bảo vệ quyền lợi chính đáng của mình trước pháp luật; (c)
                                tình huống khẩn cấp và cần thiết để bảo vệ quyền an toàn cá nhân của các thành viên Lại Đây
                                Refill khác.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">d. Truy xuất thông tin cá nhân</h5>
                    <p>Bất cứ thời điểm nào quý khách cũng có thể truy cập và chỉnh sửa những thông tin cá nhân của mình theo
                        các liên kết (website’s links) thích hợp mà chúng tôi cung cấp.</p>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">e. Bảo mật thông tin cá nhân:</h5>
                    <ul>
                        <li><p>- Khi bạn gửi thông tin cá nhân của bạn cho chúng tôi, bạn đã đồng ý với các điều khoản mà chúng
                                tôi đã nêu ở trên, Lại Đây Refill cam kết bảo mật thông tin cá nhân của quý khách bằng mọi cách
                                thức có thể. Chúng tôi sẽ sử dụng nhiều công nghệ bảo mật thông tin khác nhau như: chuẩn quốc tế
                                PCI, SSL,… nhằm bảo vệ thông tin này không bị truy lục, sử dụng hoặc tiết lộ ngoài ý muốn.</p>
                        </li>
                        <li><p>- Tuy nhiên do hạn chế về mặt kỹ thuật, không một dữ liệu nào có thể được truyền trên đường
                                truyền
                                internet mà có thể được bảo mật 100%. Do vậy, chúng tôi không thể đưa ra một cam kết chắc chắn
                                rằng thông tin quý khách cung cấp cho chúng tôi sẽ được bảo mật một cách tuyệt đối an toàn, và
                                chúng tôi không thể chịu trách nhiệm trong trường hợp có sự truy cập trái phép thông tin cá nhân
                                của quý khách như các trường hợp quý khách tự ý chia sẻ thông tin với người khác… Nếu quý khách
                                không đồng ý với các điều khoản như đã mô tả ở trên, Chúng tôi khuyên quý khách không nên gửi
                                thông tin đến cho chúng tôi.</p></li>
                        <li><p>- Vì vậy, Lại Đây Refill cũng khuyến cáo quý khách nên bảo mật các thông tin liên quan đến mật
                                khẩu truy xuất của quý khách và không nên chia sẻ với bất kỳ người nào khác.</p></li>
                        <li><p>- Nếu sử dụng máy tính chung nhiều người, quý khách nên đăng xuất, hoặc thoát hết tất cả cửa sổ
                                Website đang mở.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">f. Sử dụng “Cookie”:</h5>
                    <ul>
                        <li><p>- Lại Đây Refill dùng “Cookie” để giúp cá nhân hóa và nâng cao tối đa hiệu quả sử dụng thời gian
                                trực tuyến của quý khách.</p>
                        </li>
                        <li><p>- Một cookie là một file văn bản được đặt trên đĩa cứng của bạn bởi một máy chủ của trang web.
                                Cookie không được dùng để chạy chương trình hay đưa virus vào máy tính của quý khách. Cookie
                                được chỉ định vào máy tính của quý khách và chỉ có thể được đọc bởi một máy chủ trang web trên
                                miền được đưa ra cookie cho quý khách.</p></li>
                        <li><p>- Một trong những mục đích của Cookie là cung cấp những tiện ích để tiết kiệm thời gian của quý
                                khách khi truy cập tại website Lại Đây Refill hoặc viếng thăm website Lại Đây Refill lần nữa mà
                                không cần đăng ký lại thông tin sẵn có.</p></li>
                        <li><p>- Quý khách có thể chấp nhận hoặc từ chối dùng cookie. Hầu hết những Browser tự động chấp nhận
                                cookie, nhưng quý khách có thể thay đổi những cài đặt để từ chối tất cả những cookie nếu quý
                                khách thích. Tuy nhiên, nếu quý khách chọn từ chối cookie, điều đó có thể gây cản trở và ảnh
                                hưởng không tốt đến một số dịch vụ và tính năng phụ thuộc vào cookie tại website YouSport.vn</p>
                        </li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">g. Quy định về “Spam”:</h5>
                    <ul>
                        <li><p>- Lại Đây Refill thực sự quan ngại đến vấn nạn Spam (thư rác), các Email giả mạo danh tín chúng
                                tôi gởi đi. Do đó, Lại Đây Refill khẳng định chỉ gởi Email đến quý khách khi và chỉ khi quý
                                khách có đăng ký hoặc sử dụng dịch vụ từ hệ thống của chúng tôi.</p>
                        </li>
                        <li><p>- Lại Đây Refill cam kết không bán, thuê lại hoặc cho thuê email của quý khách từ bên thứ ba. Nếu
                                quý khách vô tình nhận được Email không theo yêu cầu từ hệ thống chúng tôi do một nguyên nhân
                                ngoài ý muốn, xin vui lòng nhấn vào link từ chối nhận Email này kèm theo, hoặc thông báo trực
                                tiếp đến ban quản trị Website.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">h. Thay đổi về chính sách:</h5>
                    <ul>
                        <li><p>- Chúng tôi hoàn toàn có thể thay đổi nội dung trong trang này mà không cần phải thông báo trước,
                                để phù hợp với các nhu cầu của Lại Đây Refill cũng như nhu cầu và sự phản hồi từ khách hàng nếu
                                có. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian “Cập nhật lần
                                cuối” bên dưới.</p>
                        </li>
                        <li><p>- Nội dung “Chính sách bảo mật” này chỉ áp dụng tại www.laidayrefil.com, không bao gồm hoặc liên
                                quan đến các bên thứ ba đặt quảng cáo hay có links tại www.laidayrefil.com.Chúng tôi khuyến
                                khích bạn đọc kỹ chính sách An toàn và Bảo mật của các trang web của bên thứ ba trước khi cung
                                cấp thông tin cá nhân cho các trang web đó. Chúng tôi không chịu trách nhiệm dưới bất kỳ hình
                                thức nào về nội dung và tính pháp lý của trang web thuộc bên thứ ba.</p></li>
                        <li><p>- Vì vậy, bạn đã đồng ý rằng, khi bạn sử dụng website của chúng tôi sau khi chỉnh sửa nghĩa là
                                bạn đã thừa nhận, đồng ý tuân thủ cũng như tin tưởng vào sự chỉnh sửa này. Do đó, chúng tôi đề
                                nghị bạn nên xem trước nội dung trang này trước khi truy cập các nội dung khác trên website cũng
                                như bạn nên đọc và tham khảo kỹ nội dung “Chính sách bảo mật” của từng website mà bạn đang truy
                                cập.</p></li>
                    </ul>
                </div>

                <div class="content1 w3-padding-32">
                    <h5 style="color: red">i. Thông tin liên hệ: </h5>
                    <p> Chúng tôi luôn hoan nghênh các ý kiến đóng góp, liên hệ và phản hồi thông tin từ bạn về “Chính sách bảo
                        mật” này. Nếu bạn có những thắc mắc liên quan xin vui lòng liên hệ theo địa chỉ Email:
                        info@laidayrefill.com</p>
                </div>
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

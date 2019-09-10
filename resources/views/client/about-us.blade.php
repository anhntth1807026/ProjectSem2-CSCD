@extends('client.layout')
@section('content')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin" />
    <style>
        .middle_inner {
            background-color: #ffffff;
        }
        body, h1, h2, h3, h4, h5, h6, p {
            /*font-family: "Raleway", sans-serif*/
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body .headline {
            background-color: transparent;
        }

        .headline_outer {
            border-bottom-width: 1px;

        }

        .headline_outer .headline_color {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }

        .headline_outer .headline_inner {
            padding: 50px 20px;
            position: relative;
            z-index: 1;
        }

        .headline_outer .headline_inner .headline_aligner {
            display: inline-block;
            vertical-align: middle;
        }

        .headline_outer .headline_inner .headline_text {
            display: inline-block;
            vertical-align: middle;
            position: relative;
        }

        .headline_outer .headline_inner .headline_text:before {
            width: 1em;
            height: 1em;
            margin: auto !important;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .headline_outer .headline_inner .headline_text h1 {
            margin: 0;
            padding-top: 50px;
        }

        .headline_outer .headline_inner .headline_text h5 {
            margin: -5px 0 0;
        }

        .headline_outer .headline_inner.align_left {
            text-align: left;
        }

        .headline_outer .headline_inner.align_left .headline_text {
            text-align: left;
        }

        .headline_outer .headline_inner.align_left .headline_text:before {
            right: auto;
        }

        .headline_outer .headline_inner.align_right {
            text-align: right;
        }

        .headline_outer .headline_inner.align_right .headline_text {
            text-align: right;
        }

        .headline_outer .headline_inner.align_right .headline_text:before {
            left: auto;
        }

        .headline_outer .headline_inner.align_center {
            text-align: center;
        }

        .headline_outer .headline_inner.align_center .headline_text {
            text-align: center;
        }

        .headline_outer .headline_inner.align_center .headline_text:before {
            bottom: auto;
        }
    </style>

    <style type="text/css">.headline_outer {
            background-image: url(https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/bg-prlx-big-11.jpg);
            background-repeat: repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .headline_color {
            background-color: #000000;
            opacity: 0;
        }

        .headline_aligner {
            min-height: 150px;
        }
    </style>
    <div class="headline cmsms_color_scheme_first">
        <div class="headline_outer">
            <div class="headline_color"></div>
            <div class="headline_inner align_center">
                <div class="headline_aligner"></div>
                <div class="headline_text headline_subtitle"><h1 class="entry-title">About Us</h1><h5>Meet Our Team</h5>
                </div>
            </div>
        </div>
        <div class="w3-container w3-light-white" style="padding:100px 16px">
            <div class="w3-row-padding">
                <div class="w3-col m6">
                    <div data-aos="zoom-out-up" data-aos-duration="1500"><h2>Chào mừng bạn đến với TreeHugger</h2>
                        <p>
                            Tree Hugger là nơi dành cho những ai quan tâm đến lối sống xanh, bền vững và
                            thân thiện với môi
                            trường. Tại Tree Hugger, bạn sẽ cảm thấy hạnh phúc, tình yêu và lòng biết ơn đối với các
                            sản phẩm do
                            người
                            Việt Nam làm ra vì lợi ích của cộng đồng và cho lối sống đơn giản và lành mạnh.
                        </p>
                    </div>
                </div>
                <div class="w3-col m6" data-aos="zoom-out-left" data-aos-duration="1500">
                    <img class="w3-image w3-round-large"
                         src="{{ asset('/img/slide-pics/slide2.jpg') }}"
                         alt="Buildings" width="700" height="394">
                </div>
            </div>
        </div>


        <div class="container" style="padding-top: 50px; ">

            <div class="row"  data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Bạn có biết<span class="text-muted"> ở Việt Nam.</span></h2>
                    <p class="lead">Số lượng các gói nhựa gửi đến bãi rác mỗi tuần có ở mức đáng báo động? Với thói quen
                        chỉ sử dụng một lần nói chung và các sản phẩm khó phân hủy nói riêng, chúng ta đang lãng phí
                        5.714.578 kg EACH nhựa mỗi ngày. Trong khi 9% nhựa trên thế giới được tái chế, 12% đã bị đốt
                        cháy và 79% còn lại cuối cùng nằm ở các bãi rác hoặc môi trường. Đặc biệt, Việt Nam được xếp
                        hạng 5 quốc gia hàng đầu thế giới phát thải nhựa ra đại dương so với các quốc gia khác.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/recycling-img1.jpg" alt="" style="width: 100%; height: 400px;  margin-top: 40px">
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette" data-aos="fade-left"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine" >
                <div class="col-md-7 order-md-2" >
                    <h2 class="featurette-heading">Vậy nên <span class="text-muted">chúng tôi</span></h2>
                    <p class="lead">Tree Hugger được thành lập như một sáng kiến ​​nhằm giảm lượng bao bì nhựa sử dụng
                        một lần hoặc các sản phẩm khó phân hủy, bao gồm các sản phẩm gia dụng thông thường, cho cả người
                        lớn và trẻ em, hoặc mang đi. Chúng tôi cũng chú ý đến các thành phần trong mỗi sản phẩm. Tại
                        Tree Hugger, chúng tôi luôn cung cấp thông tin chi tiết về sản phẩm để nạp và mua. Tính minh
                        bạch của chúng tôi giúp người tiêu dùng dễ dàng kiểm tra nguồn và chất lượng sản phẩm của chúng
                        tôi bất cứ lúc nào. Chúng tôi luôn ưu tiên sử dụng các thành phần tự nhiên trong quá trình sản
                        xuất.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://scontent-dfw5-2.cdninstagram.com/vp/fc991b4f931e184ca0dab4eb7371ae7f/5DD59B14/t51.2885-15/fr/e15/s1080x1080/67102972_151871505877413_5256145570726894406_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com&dl=1" alt="" style="width: 100%; height: 400px; margin-top: 40px">
                </div>
            </div>
            <hr class="featurette-divider">
        </div>

            {{--    Tiêu chí của chúng tôi--}}
            <div class="w3-container" style="padding:70px 16px; background-color: #84b466; color: #0c0c0c" id="about">
                <h3 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Tiêu Chí Của Chúng Tôi</h3>
                <p class="w3-center w3-large" data-aos="fade-left" data-aos-duration="1500">Thiên Nhiên Là Chìa Khóa Của Tương
                    Lai</p>
                <div class="w3-row-padding w3-center" data-aos="fade-up" data-aos-duration="2000" style="margin-top:64px">
                    <div class="w3-quarter">
                        <img src="{{ asset('/img/new-image/icon-1.webp') }}" alt="" title="Hãy chuẩn bị thật kĩ nhé!">
                        <p class="w3-large">Byo</p>
                        <p>Mang theo nhiều chai, lọ nhất có thể.

                            Rửa sạch và để khô, bóc sạch những nhãn dán nếu vẫn còn.

                            Nếu không có hoặc quên mang hộp đựng của mình, hãy hỏi và mượn từ phía ban tổ chức địa phương.</p>
                    </div>
                    <div class="w3-quarter">
                        <img src="{{ asset('/img/new-image/icon-2.webp') }}" alt=""
                             title="Đừng quên dán nhãn để đánh dấu hộp của bạn.">
                        <p class="w3-large">Stick</p>
                        <p>Dán nhãn vào hộp đựng đồ của bạn, hãy cân nhắc về việc đó.</p>
                    </div>
                    <div class="w3-quarter">
                        <img src="{{ asset('/img/new-image/icon-3.webp') }}" alt=""
                             title="Cân để biết trọng lượng của những điều tuyệt vời mà bạn mang tới.">
                        <p class="w3-large">Tare&Write</p>
                        <p>Cân hộp của bạn tại quầy.

                            Viết số cân nặng vào nhãn.
                        </p>
                    </div>
                    <div class="w3-quarter">
                        <img src="{{ asset('/img/new-image/icon-4.webp') }}" alt=""
                             title="Đừng bỏ lỡ bước cuối cùng của chương trình nhé!">
                        <p class="w3-large">REFILL</p>
                        <p>Cho những sản phẩm bảo vệ môi trường bạn thích vào hộp.

                            Một hộp chỉ được có một loại sản phẩm.

                            Hãy tính đến việc sẽ có vài sản phẩm cần thời gian để chứa đầy thùng.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Team Section -->
            <div class="w3-container" data-aos="zoom-in" style="padding:128px 16px" id="team">
                <h3 class="w3-center">THE TEAM</h3>
                <p class="w3-center w3-large">The ones who runs this company</p>
                <div class="w3-content">
                    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_oc=AQkP1JCzo82yTeSe9EUVQP0YJP5QvHnmaDpTbWRXAHE-w1FTTRDrHruiShR2gi-Pi-0&_nc_ht=scontent.fhan1-1.fna&oh=2492b41033f45aebeac91c33fad3dae7&oe=5E0F0E5B"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Nguyen Tuan Anh</h4>
                                    <p class="w3-opacity">CEO & Founder</p>
                                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                        elementum.</p>
                                    <p>
                                        <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                            Contact
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_oc=AQkP1JCzo82yTeSe9EUVQP0YJP5QvHnmaDpTbWRXAHE-w1FTTRDrHruiShR2gi-Pi-0&_nc_ht=scontent.fhan1-1.fna&oh=2492b41033f45aebeac91c33fad3dae7&oe=5E0F0E5B"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Nguyen Tuan Anh</h4>
                                    <p class="w3-opacity">CEO & Founder</p>
                                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                        elementum.</p>
                                    <p>
                                        <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                            Contact
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_oc=AQkP1JCzo82yTeSe9EUVQP0YJP5QvHnmaDpTbWRXAHE-w1FTTRDrHruiShR2gi-Pi-0&_nc_ht=scontent.fhan1-1.fna&oh=2492b41033f45aebeac91c33fad3dae7&oe=5E0F0E5B"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Nguyen Tuan Anh</h4>
                                    <p class="w3-opacity">CEO & Founder</p>
                                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                        elementum.</p>
                                    <p>
                                        <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                            Contact
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_oc=AQkP1JCzo82yTeSe9EUVQP0YJP5QvHnmaDpTbWRXAHE-w1FTTRDrHruiShR2gi-Pi-0&_nc_ht=scontent.fhan1-1.fna&oh=2492b41033f45aebeac91c33fad3dae7&oe=5E0F0E5B"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Nguyen Tuan Anh</h4>
                                    <p class="w3-opacity">CEO & Founder</p>
                                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                        elementum.</p>
                                    <p>
                                        <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                            Contact
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_oc=AQkP1JCzo82yTeSe9EUVQP0YJP5QvHnmaDpTbWRXAHE-w1FTTRDrHruiShR2gi-Pi-0&_nc_ht=scontent.fhan1-1.fna&oh=2492b41033f45aebeac91c33fad3dae7&oe=5E0F0E5B"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Nguyen Tuan Anh</h4>
                                    <p class="w3-opacity">CEO & Founder</p>
                                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                        elementum.</p>
                                    <p>
                                        <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                            Contact
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_oc=AQkP1JCzo82yTeSe9EUVQP0YJP5QvHnmaDpTbWRXAHE-w1FTTRDrHruiShR2gi-Pi-0&_nc_ht=scontent.fhan1-1.fna&oh=2492b41033f45aebeac91c33fad3dae7&oe=5E0F0E5B"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Nguyen Tuan Anh</h4>
                                    <p class="w3-opacity">CEO & Founder</p>
                                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                        elementum.</p>
                                    <p>
                                        <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                            Contact
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

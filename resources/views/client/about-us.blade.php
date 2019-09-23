@extends('client.layout')
@section('content')

    @push('styles')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            * {
                box-sizing: border-box;
            }

            .team-member {
                margin-bottom: 100px;
            }

            .team-member .the-members1 .member {
                border: 1px solid white;
                border-radius: 4px;
            }

            .team-member .the-members1 .member .team-img {
                position: relative;
            }

            .team-member .the-members1 .member .team-img img {
                width: 345px;
                height: 430px;
                display: block;
                transition: .5s ease;
                backface-visibility: hidden;
            }

            .team-member .the-members2 .member {
                border: 1px solid white;
                border-radius: 4px;
                margin-top: 20px;
            }

            .team-member .the-members2 .member .team-img1 {
                position: relative;
                margin-left: 175px;
            }

            .team-member .the-members2 .member .team-img2 {
                position: relative;
                margin-right: 175px;
            }

            .team-member .the-members2 .member .team-img1 img {
                width: 345px;
                height: 430px;
            }

            .team-member .the-members2 .member .team-img2 img {
                width: 345px;
                height: 430px;
            }

            .member:hover .image {
                opacity: 0.3;
            }

            .member:hover .middle {
                opacity: 1;
            }

            .text {
                color: black;
                font-size: 20px;
            }

            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }

        </style>
    @endpush
    <div class="headline cmsms_color_scheme_first">
        {{--        Meet our team--}}
        <div class="headline_outer">
            <div class="headline_color"></div>
            <div class="headline_inner align_center">
                {{--                <div class="headline_aligner"></div>--}}
                <div class="headline_text headline_subtitle"><h1 class="entry-title">Meet Our Team</h1>
                </div>
            </div>
        </div>

        {{--        Chào mừng bạn đến với Tree Hugger--}}
        <div class="w3-container w3-light-white" style="padding:100px 16px">
            <div class="w3-row-padding container-fluid">
                <div class="w3-col m6">
                    <div data-aos="zoom-out-up" data-aos-duration="1500"><h2>Chào mừng bạn đến với TreeHugger</h2>
                        <p>
                            Tree Hugger là nơi dành cho những ai quan tâm đến lối sống xanh, bền vững và
                            thân thiện với môi trường. Tại Tree Hugger, bạn sẽ cảm thấy hạnh phúc, tình yêu và lòng biết
                            ơn đối với các sản phẩm do người Việt Nam làm ra vì lợi ích của cộng đồng và cho lối sống
                            đơn giản và lành mạnh.
                        </p>
                    </div>
                </div>
                <div class="w3-col m6" data-aos="zoom-out-left" data-aos-duration="1500">
                    <img class="w3-image w3-round-large"
                         src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/66643085_439790913543343_5518956645201215488_o.jpg?_nc_cat=109&_nc_oc=AQkZp2V9QN76JoQvi1XSn-8jgKIW0TAzSySRMP5QG5wXgtC0UYsGjU_69cbc1qdr8r8&_nc_ht=scontent.fhan2-3.fna&oh=b3b901f4f85642006d2055d3116bd4ca&oe=5DEF7820"
                         alt="Buildings" width="700" height="394">
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 50px">

            {{--            Bạn có biết ở Việt Nam--}}
            <div class="row" data-aos="fade-right" style="margin-bottom: 100px"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Bạn có biết<span class="text-muted"> ở Việt Nam</span></h2>
                    <p class="lead">Số lượng các gói nhựa gửi đến bãi rác mỗi tuần có ở mức đáng báo động? Với thói quen
                        chỉ sử dụng một lần nói chung và các sản phẩm khó phân hủy nói riêng, chúng ta đang lãng phí
                        5.714.578 kg EACH nhựa mỗi ngày. Trong khi 9% nhựa trên thế giới được tái chế, 12% đã bị đốt
                        cháy và 79% còn lại cuối cùng nằm ở các bãi rác hoặc môi trường. Đặc biệt, Việt Nam được xếp
                        hạng 5 quốc gia hàng đầu thế giới phát thải nhựa ra đại dương so với các quốc gia khác.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/recycling-img1.jpg" alt=""
                         style="width: 100%; height: 400px;  margin-top: 40px">
                </div>
            </div>

            {{--            Vậy nên chúng tôi--}}
            <div class="row featurette" data-aos="fade-left" style="margin-bottom: 100px"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="col-md-5 order-md-1">
                    <img
                        src="https://scontent-dfw5-2.cdninstagram.com/vp/fc991b4f931e184ca0dab4eb7371ae7f/5DD59B14/t51.2885-15/fr/e15/s1080x1080/67102972_151871505877413_5256145570726894406_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com&dl=1"
                        alt="" style="width: 100%; height: 400px; margin-top: 40px">
                </div>
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Vậy nên <span class="text-muted">chúng tôi</span></h2>
                    <p class="lead">Tree Hugger được thành lập như một sáng kiến ​​nhằm giảm lượng bao bì nhựa sử dụng
                        một lần hoặc các sản phẩm khó phân hủy, bao gồm các sản phẩm gia dụng thông thường, cho cả người
                        lớn và trẻ em, hoặc mang đi. Chúng tôi cũng chú ý đến các thành phần trong mỗi sản phẩm. Tại
                        Tree Hugger, chúng tôi luôn cung cấp thông tin chi tiết về sản phẩm để nạp và mua. Tính minh
                        bạch của chúng tôi giúp người tiêu dùng dễ dàng kiểm tra nguồn và chất lượng sản phẩm của chúng
                        tôi bất cứ lúc nào. Chúng tôi luôn ưu tiên sử dụng các thành phần tự nhiên trong quá trình sản
                        xuất.
                    </p>
                </div>
            </div>
        </div>

        {{--    Tiêu chí của chúng tôi--}}
        <div class="w3-container" style="padding:70px 16px; background-color: #84b466; color: #0c0c0c" id="about">
            <h3 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Tiêu Chí Của Chúng Tôi</h3>
            <p class="w3-center w3-large" data-aos="fade-left" data-aos-duration="1500">Thiên Nhiên Là Chìa Khóa Của
                Tương
                Lai</p>
            <div class="w3-row-padding w3-center" data-aos="fade-up" data-aos-duration="2000" style="margin-top:64px">
                <div class="w3-quarter">
                    <img src="{{ asset('/img/new-image/icon-1.webp') }}" alt="" title="Hãy chuẩn bị thật kĩ nhé!">
                    <p class="w3-large">Byo</p>
                    <p>Mang theo nhiều chai, lọ nhất có thể.
                        Rửa sạch và để khô, bóc sạch những nhãn dán nếu vẫn còn.
                        Nếu không có hoặc quên mang hộp đựng của mình, hãy hỏi và mượn từ phía ban tổ chức địa
                        phương.</p>
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
        <div class="container w3-padding-32 w3-center">
            <h3>CHÚNG TÔI, NHỮNG NGƯỜI TRUYỀN CẢM HỨNG</h3><br>
            <p style="font-size: 24px">Lan Toả Lối Sống Xanh Đến Mọi Người</p>
            <br>
        </div>

        <div class="container team-member">
            <div class="row the-members1">
                <div class=" col-4 member">
                    <div class="team-img">
                        <img class="image"
                            src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/39993390_2088861198045508_8766214201745080320_n.jpg?_nc_cat=111&_nc_eui2=AeFHpV5d-VC0Q2QNy6jq25sWATRhKIsUwDpusbwIwMu1MpZPFGOJThz2G3tO4qfX9PjbE_BOlPHHlo3drJxLBvaP8AVhb7tEGjzawiFFrCB5ZQ&_nc_oc=AQmj5SA9zDXaofciBa0EeyA51N7bsNUiMBDw-8E1lCYqWHuzDRPEXm1FxFW3Y9uSjBs&_nc_ht=scontent.fhan2-2.fna&oh=ad320a2c33ab70651c1b2f54b3973663&oe=5E369B5B"
                            alt="">
                        <div class="middle">
                            <div class="text"><b>Nguyễn Tuấn Anh</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 member">
                    <div class="team-img">
                        <img class="image"
                            src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/69736141_896844337362540_4040873182477942784_n.jpg?_nc_cat=102&_nc_eui2=AeGGnV9tU8GRFd9V5TXwFDd5S9ixHrisVVSm46-2vN6kd-yxrOD4JsV1DsiyWZocWEmJutamxGOqDU6ieiXM-cVREOO3P-PBdELeKWTsazXgYw&_nc_oc=AQlid0qXfvLYCUeAaVT3WRE6dRnxjfVEr0VSdZ0Af5VKippeiRLK6kVXSje3LyQ37A8&_nc_ht=scontent.fhan2-1.fna&oh=5d54a8ff8644c43ac10853d5f2faa5df&oe=5DFC6620"
                            alt="">
                        <div class="middle">
                            <div class="text"><b>Phạm Thanh Hoa</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 member">
                    <div class="team-img">
                        <img class="image"
                             src="https://avatar.skype.com/v1/avatars/live:d6f050b5fb624391/public?returnDefaultImage=false&size=l"
                             alt="">
                        <div class="middle">
                            <div class="text"><b>Hoàng Tất Thành</b></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row the-members2">
                <div class="col-6 member">
                    <div class="team-img1">
                        <img class="image"
                            src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-1/p320x320/62186823_2291058607774737_1983036222183833600_n.jpg?_nc_cat=104&_nc_eui2=AeFD7lsZkq4D6HtpbtQfwZ7XC30EcRJM_DuE6unR1B_EsnNpYrFU4m6tDtjGR2ttUSlalQWffsXRc-H4mRNLcuvGZN-vQ5uSXPa4oJb1z2FcBA&_nc_oc=AQlr57-zMABIrZzFDnqPlH-IceKI95TGmnOF0sMXBGlEEHHBR5Y6lG4eZ3Ed4PXK0KQ&_nc_ht=scontent.fhan2-4.fna&oh=4b067344207490260c7098102932b0d0&oe=5E072892"
                            alt="">
                        <div class="middle">
                            <div class="text"><b>Lương Xuân Bách</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 member">
                    <div class="team-img2">
                        <img class="image"
                            src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/67877360_1229685677214840_6769455765208956928_n.jpg?_nc_cat=100&_nc_eui2=AeH_doe8QJGm3KQafeqHz_KMIe74195_ZhpIrImJO0QvlkH-F10vMysd1E6GzbKo8uOJ_Wons17MSX_8A8sJ_-pRZloZrQbqt04TapF1l-ovQA&_nc_oc=AQnEk16UYqv9kEdWQmS4vT3lqUVFU5jaYotZ_IQj21N8SPOOQL3w4Se1gk_cpm5L9Gg&_nc_ht=scontent.fhan2-4.fna&oh=2b8e02535c58221dbda4010e189b0e3e&oe=5DF9C1BD"
                            alt="">
                        <div class="middle">
                            <div class="text"><b>Đặng Tiểu Bình</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @endpush
@endsection

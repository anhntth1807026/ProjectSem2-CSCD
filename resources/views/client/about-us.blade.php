@extends('client.layout')
@section('content')

    <div class="headline cmsms_color_scheme_first">
        <div class="headline_outer">
            <div class="headline_color"></div>
            <div class="headline_inner align_center">
{{--                <div class="headline_aligner"></div>--}}
                <div class="headline_text headline_subtitle"><h1 class="entry-title">Meet Our Team</h1>
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
            <!-- Team Section -->
            <div class="w3-container" data-aos="zoom-in" style="padding:128px 16px" id="team">
                <h3 class="w3-center">THE TEAM</h3>
                <p class="w3-center w3-large">The ones who runs this company</p>
                <div class="w3-content">
                    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
                        <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                            <div class="w3-card-4">
                                <img src="https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/59393004_814110815635893_4746973704385200128_n.jpg?_nc_cat=105&_nc_oc=AQmP4fY24pwsO1soZCi8IeWXpLVkzimpnsemHDX_yYK-synJ2LFzfvpRHcZraJl3gMY&_nc_ht=scontent.fhan1-1.fna&oh=0766b372ba6c4430ab4012dfe656b9f2&oe=5DCA7B98"
                                     alt="John" style="width:100%">
                                <div class="w3-container">
                                    <h4>Pham Thanh Hoa</h4>
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

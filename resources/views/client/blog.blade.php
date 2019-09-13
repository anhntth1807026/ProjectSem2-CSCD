@extends('client.layout')
@section('content')
    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
        }

        @media only screen and (min-width: 600px) {
            .videoblogmain {
                margin-right: 200px;
                margin-left: 200px;
            }
        }

        @media only screen and (min-width: 1500px) {
            .videoblogmain {
                margin-left: 200px;
                margin-right: 200px;
            }
        }

        #myVideo {
            width: 100%;
            height: 100%;
        }
    </style>

    <header class=" w3-display-container w3-grayscale-min" id="home" style="margin-top:57px">
        <div class=" w3-section" style="">
            <img class="mySlides" src="{{ asset('img/slide-pics/bg1.jpg') }}" style="width:100%">
            <img class="mySlides" src="{{ asset('img/slide-pics/bg2.jpg') }}" style="width:100%">
            <img class="mySlides" src="{{ asset('img/slide-pics/bg3.jpg') }}" style="width:100%">
        </div>
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small" data-aos="zoom-in"
                  data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới.</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium" data-aos="zoom-in" data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới</span><br>
            <span class="w3-large" data-aos="zoom-in" data-aos-duration="3000">Ngưng Sử Dụng Đồ Dùng Làm Từ Nhựa Và Các Sản Phẩm Gây Hại Cho Môi Trường.</span>
            <p><a href="#about"
                  class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"
                  data-aos="zoom-in" data-aos-duration="3000" style="text-decoration: none;" title="Bắt đầu tìm hiểu">Tìm
                    Hiểu Nhiều Hơn Và Bắt Đầu Từ Hôm Nay</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity" title="Facebook"></i>
            <i class="fa fa-instagram w3-hover-opacity" title="Instagram"></i>
            <i class="fa fa-snapchat w3-hover-opacity" title="Snapchat"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity" title="Pinterest"></i>
            <i class="fa fa-twitter w3-hover-opacity" title="Twitter"></i>
            <i class="fa fa-linkedin w3-hover-opacity" title="Linkedin"></i>
        </div>
    </header>

    <br>
    <br>
    <br>

    <div class="videoblogmain">
        <h4 style="text-align: center">CHÚNG TA CÙNG TÌM HIỂU THỰC TRẠNG CỦA TRÁI ĐẤT HIỆN NAY</h4>
        <br>
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('video/Thực trạng môi trường.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
            <div class="w3-quarter">
                <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/01-2-o1.jpg" alt="Sandwich"
                     style="width:100%">
            </div>
            <div class="w3-quarter">
                <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/02-2-o.jpg" alt="Steak"
                     style="width:100%">
            </div>
            <div class="w3-quarter">
                <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/03-2-o.jpg" alt="Cherries"
                     style="width:100%">
            </div>
            <div class="w3-quarter">
                <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/04-2-o1.jpg" alt="Pasta and Wine"
                     style="width:100%">
            </div>
        </div>

        <br>

        <h1 style="text-align: center;font-size: 40px;margin-top: 50px">Every day 8,000 beavers perished</h1>

        <br>

        <div class="w3-row">
            <div class="w3-quarter" style="text-align: center">
            <span style="font-size: 64px;color: grey">
                <i class="far fa-thumbs-up"></i>
            </span>
                <span>
                <span style="margin-left: -12px;font-size: 60px">
                  3600
                </span>
            </span>
                <p style="margin-left: 68px;color: grey">Beavers Saved</p>
            </div>

            <div class="w3-quarter" style="text-align: center">
            <span style="font-size: 64px;color: grey">
               <i class="fas fa-hand-holding-usd"></i>
            </span>
                <span>
                <span style="margin-left: -12px;font-size: 60px">
                  $12000
                </span>
            </span>
                <p style="margin-left: 68px;color: grey">Funds Collected</p>
            </div>

            <div class="w3-quarter" style="text-align: center">
            <span style="font-size: 64px;color: grey">
                <i class="fas fa-fingerprint"></i>
            </span>
                <span>
                <span style="margin-left: -12px;font-size: 60px">
                    680
                </span>
            </span>
                <p style="margin-left: 68px;color: grey">Volunteer</p>
            </div>

            <div class="w3-quarter" style="text-align: center">
            <span style="font-size: 64px;color: grey">
                <i class="fas fa-hand-holding-heart"></i>
            </span>
                <span>
                <span style="margin-left: -12px;font-size: 60px">
                  460
                </span>
            </span>
                <p style="margin-left: 68px;color: grey">Days of Help</p>
            </div>
        </div>
        <br>

        <p style="text-align:center">Thật không may, sinh thái, và luôn luôn được khấu trừ. <br>
            Cũng giống như các thành viên của một chuyến đi</p>

        <br>
    </div>
    <div class="w3-container">
        <h1 style="text-align: center">BÀI VIẾT MỚI NHẤT</h1>
        <div class="w3-row" style="margin-top: 50px">
            <div class="w3-col l8 s12">

                {{--                BLOG 1 --}}
                <div class="w3-margin w3-white">
                    <img src="https://www.ivyboarding.com/w3template/w3images/bridge.jpg" alt="Nature"
                         style="width:100%">
                    <div class="w3-container">
                        <h3><b>VẬY LÀM SAO ĐỂ BẮT ĐẦU MỘT LỐI SỐNG XANH?</b></h3>
                        <h5>Đây có lẽ một trong những câu hỏi mà mọi người đang đặt ra, nhưng bạn có biết chúng ta đều
                            phải mất 21 ngày để thay đổi một thói quen mới?</h5>
                        <span class="w3-opacity">10-9-2019 </span>
                    </div>

                    <div class="w3-container">
                        <p>“Change the way you look at things and the things you look at change” - Wayne Dyer </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p>
                                    <button class="w3-button w3-padding-large w3-white w3-border"><b>XEM THÊM »</b>
                                    </button>
                                </p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>BÌNH LUẬN  </b> <span
                                                class="w3-tag">0</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                {{--                BLOG 2--}}
                <div class="w3-margin w3-white">
                    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" alt="Norway" style="width:100%">
                    <div class="w3-container">
                        <h3><b>BẠN CÓ BIẾT SỰ KHÁC NHAU GIỮA CÁC KHÁI NIỆM ?</b></h3>
                        <h5>“GREEN”, “SUSTAINABLE”, “ECO-FRIENDLY”,
                            “ETHICAL”, “FAIRTRADE”, “CLEAN”, “ORGANIC”, “NON-TOXIC”, VÀ “CONSCIOUS”.</h5>
                        <span class="w3-opacity" style="font-size: 20px">9-9-2019</span>
                    </div>

                    <div class="w3-container">
                        <p>Nếu dùng những từ này một cách bất cẩn, đặc biệt là bộ phận marketing, sẽ dễ gây bối rối,
                            hiểu sai, hiểu lệch do các từ này dường như đồng nghĩa, hay gần nghĩa., </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p>
                                    <button class="w3-button w3-padding-large w3-white w3-border"><b>XEM THÊM »</b>
                                    </button>
                                </p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>BÌNH LUẬN  </b> <span
                                                class="w3-badge">3</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

{{--                BLOG 3  --}}
                <div class="w3-margin w3-white">
                    <img src="https://www.ivyboarding.com/w3template/w3images/bridge.jpg" alt="Nature"
                         style="width:100%">
                    <div class="w3-container">
                        <h3><b>THỰC TRẠNG Ô NHIỄM MÔI TRƯỜNG Ở VIỆT NAM.</b></h3>
                        <h5>CÁC GIẢI PHÁP KHẮC PHỤC</h5>
                        <span class="w3-opacity">7-9-2019 </span>
                    </div>

                    <div class="w3-container">
                        <p>Hiện nay, vấn đề ô nhiễm môi trường đang là chủ đề nóng trên các mặt báo và nhận được rất
                            nhiều sự quan tâm của người dân. Trong đó, đặc biệt là vấn đề ô nhiễm nguồn nước ở Việt Nam
                            đã và đang ngày càng trở nên nghiêm trọng hơn. </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p>
                                    <button class="w3-button w3-padding-large w3-white w3-border"><b>XEM THÊM »</b>
                                    </button>
                                </p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>BÌNH LUẬN  </b> <span
                                                class="w3-tag">1</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w3-col l4">
                <div class="w3-margin w3-margin-top">
                    <img src="https://www.ivyboarding.com/w3template/w3images/avatar_g.jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>SỰ THẬT</b></h4>
                        <p>Các vấn đề môi trường lớn hiện tại bao gồm biến đổi khí hậu, ô nhiễm môi trường, suy thoái
                            môi trường, và cạn kiệt tài nguyên thiên nhiên. Các vận động hành lang về bảo tồn nhằm bảo
                            vệ loài nguy cấp và bảo vệ bất kỳ môi trường tự nhiên có hệ sinh thái có giá trị, vấn đề
                            thực phẩm biến đổi gen và ấm lên toàn cầu.</p>
                    </div>
                </div>
                <hr>

                <div class="w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Những Bài Viết Phổ Biến</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="https://i.pinimg.com/564x/ab/4d/f7/ab4df7baabff4536e7a80182c892e9a7.jpg" alt="Image" class="w3-left w3-margin-right"
                                 style="width:50px">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="https://i.pinimg.com/564x/7a/27/87/7a2787fd8642f06ae98a18f1bd7c6b2a.jpg" alt="Image" class="w3-left w3-margin-right"
                                 style="width:50px">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="https://i.pinimg.com/564x/64/5f/09/645f091ada7367e1d23214f14a693657.jpg" alt="Image" class="w3-left w3-margin-right"
                                 style="width:50px">
                            <span class="w3-large">Dorum</span><br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="https://i.pinimg.com/564x/1f/bd/84/1fbd84acdf05bf0d8d7bfea26eb9b7b2.jpg" alt="Image" class="w3-left w3-margin-right"
                                 style="width:50px">
                            <span class="w3-large">Mingsum</span><br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div>
                <hr>

                <div class="w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Thẻ Tên</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom"><a href="#" style="text-decoration: none">Travel</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">New York</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">London</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">IKEA</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">NORWAY</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">DIY</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Ideas</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Baby</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Family</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">News</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Clothing</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Shopping</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Sports</a></span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"
                                                                                            style="text-decoration: none">Games</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
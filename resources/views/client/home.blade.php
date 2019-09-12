@extends('client.layout')

@section('content')


    <div class=" w3-display-container w3-grayscale-min" id="home">
        <div>
            <img class="mySlides" src="{{ asset('img/slide-pics/bg1.jpg') }}" style="width:100%">
            <img class="mySlides" src="{{ asset('img/slide-pics/bg2.jpg') }}" style="width:100%">
            <img class="mySlides" src="{{ asset('img/slide-pics/bg3.jpg') }}" style="width:100%">
        </div>
        <div class="w3-display-left w3-text-white" style="padding:2rem">
            <span class="w3-jumbo w3-hide-small" data-aos="zoom-in"
                  data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới.</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium" data-aos="zoom-in" data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới</span><br>
            <span class="w3-large" data-aos="zoom-in" data-aos-duration="3000">Ngưng Sử Dụng Đồ Dùng Làm Từ Nhựa Và Các Sản Phẩm Gây Hại Cho Môi Trường.</span>
            <p><a href="#about"
                  class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"
                  data-aos="zoom-in" data-aos-duration="3000" style="text-decoration: none;" title="Bắt đầu tìm hiểu">Tìm
                    Hiểu Nhiều Hơn Và Bắt Đầu Từ Hôm Nay</a></p>
        </div>
        {{--        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">--}}
        {{--            <i class="fa fa-facebook-official w3-hover-opacity" title="Facebook"></i>--}}
        {{--            <i class="fa fa-instagram w3-hover-opacity" title="Instagram"></i>--}}
        {{--            <i class="fa fa-snapchat w3-hover-opacity" title="Snapchat"></i>--}}
        {{--            <i class="fa fa-pinterest-p w3-hover-opacity" title="Pinterest"></i>--}}
        {{--            <i class="fa fa-twitter w3-hover-opacity" title="Twitter"></i>--}}
        {{--            <i class="fa fa-linkedin w3-hover-opacity" title="Linkedin"></i>--}}
        {{--        </div>--}}
    </div>

    <div class="w3-container w3-light-white" style="padding:100px 16px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <div data-aos="zoom-out-up" data-aos-duration="1500"><h2>Chào mừng bạn đến với LaiDayStation</h2>
                    <p>
                        Lai Day Station là nơi dành cho những ai quan tâm đến lối sống xanh, bền vững và
                        thân thiện với môi
                        trường. Tại LaiDay, bạn sẽ cảm thấy hạnh phúc, tình yêu và lòng biết ơn đối với các
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


    {{--    Tiêu chí của chúng tôi--}}
    <div class="w3-container" style="padding:70px 16px; background-color: #84b466; color: #0c0c0c" id="about">
        <h3 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Tiêu Chí Của Chúng Tôi</h3>
        <p class="w3-center w3-large" data-aos="fade-left" data-aos-duration="1500">Thiên Nhiên Là Chìa Khóa Của Tương
            Lai</p>
        <div class="w3-row-padding w3-center" data-aos="fade-up" data-aos-duration="2000" style="margin-top:64px">
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-1.webp') }}" alt="" title="Hãy chuẩn bị thật kĩ nhé!">
                <p class="w3-large">Byo</p>
                <p>Mang thoe nhiều chai, ọ nhất có thể.

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

                    Hãy tính đến việc sẽ có vài sản phẩm cần thời gian để chúa đầy thùng.
                </p>
            </div>
        </div>
    </div>

    {{--    Bán chạy nhất--}}
    <div class="container">
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Bán Chạy Nhất</h1>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('img/home-care/co-rua-binh.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Cọ Rửa Bình</a></h5>
                        <h6>Đồ Dùng Gia Đình</h6>
                        <div class="price">99.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/home-care/hop-khan-giay-go.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Hộp Khăn Giấy Gỗ</a></h5>
                        <h6>Đồ Dùng Gia Đình</h6>
                        <div class="price">199.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/home-care/dua-go-trac.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Đũa Gỗ Trắc</a></h5>
                        <h6>Đồ Dùng Gia Đình</h6>
                        <div class="price">49.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/home-care/xit-khu-mui.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Xịt Khử Mùi</a></h5>
                        <h6>Đồ Dùng Gia Đình</h6>
                        <div class="price">429.000₫</div>
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
    <hr>

    {{--    Tất cả sản phẩm--}}
    <div class="container">
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Tất Cả Sản Phẩm</h1>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('img/home-care/ban-chai-nguoi-lon.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Bàn chải tre người lớn</a></h5>
                        <h6>Đồ Dùng Cá Nhân</h6>
                        <div class="price">79.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/new-image/ly-thong-minh-xep-gon.jpg') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Ly thông minh xếp gọn</a></h5>
                        <h6>Đồ Dùng Cá Nhân</h6>
                        <div class="price">139.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/new-image/tui-vai-da-nang.webp.jpg') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Túi vải đa năng</a></h5>
                        <h6>Đồ Dùng Gia Đình</h6>
                        <div class="price">49.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Bình nước giữ nhiệt nắp gỗ</a></h5>
                        <h6>Đồ Dùng Cá Nhân</h6>
                        <div class="price">429.000₫</div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('img/home-care/ban-chai-nguoi-lon.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Bàn chải tre người lớn</a></h5>
                        <h6>Đồ Dùng Cá Nhân</h6>
                        <div class="price">79.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/new-image/ly-thong-minh-xep-gon.jpg') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Ly thông minh xếp gọn</a></h5>
                        <h6>Đồ Dùng Cá Nhân</h6>
                        <div class="price">139.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/new-image/tui-vai-da-nang.webp.jpg') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Túi vải đa năng</a></h5>
                        <h6>Đồ Dùng Gia Đình</h6>
                        <div class="price">49.000₫</div>
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
                            <img class="pic-1" src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet.webp') }}"
                                 title="Bấm để xem hình ảnh chi tiết">
                        </a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="#">Bình nước giữ nhiệt nắp gỗ</a></h5>
                        <h6>Đồ Dùng Cá Nhân</h6>
                        <div class="price">429.000₫</div>
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

    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray">«</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray w3-gray">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray">»</a>
        </div>
    </div>

    <div class="w3-row-padding w3-text-white w3-large w3-padding-32">
        <h2 class="w3-center" data-aos="fade-up" data-aos-duration="3000" style="color:#000;">Bài Viết Mới</h2>
        <p class="w3-center w3-large" data-aos="fade-up" data-aos-duration="3000" style="color: black">Tìm Hiểu Nhiều
            Hơn Về
            Môi Trường</p>
        <div class="w3-half w3-margin-bottom" data-aos="fade-up" data-aos-duration="3000">
            <div class="w3-display-container">
                <img style="width:100%"
                     src="{{ asset('img/slide-pics/slidea.jpg') }}">
                <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">
                Đơn Giản
{{--                Đơn giản nhưng thực dụng và cực bền, đây có lẽ là tính từ miêu tả rõ nhất dành cho...--}}
            </span>
            </div>
        </div>
        <div class="w3-half" data-aos="fade-up" data-aos-duration="3000">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-display-container">
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/convi.png') }}">
                        <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">
                        Tiện Lợi
                    </span>
                    </div>
                </div>
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-display-container">
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/prat.jpg') }}">
                        <span class="w3-display-bottomleft w3-padding " style="color: black">
                        Thiết Thực
                    </span>
                    </div>
                </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-display-container">
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/reuse.jpg') }}">
                        <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">
                        Tái Chế
                    </span>
                    </div>
                </div>
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-display-container">
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/envi.jpg') }}">
                        <span class="w3-display-bottomleft w3-padding" style="color: black">
                        Thiên Nhiên
                    </span>
                    </div>
                </div>
            </div>
        </div>
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
                <p style="margin-top: -30px;margin-left: 68px;color: grey">Beavers Saved</p>
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
                <p style="margin-top: -30px;margin-left: 68px;color: grey">Funds Collected</p>
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
                <p style="margin-top: -30px;margin-left: 68px;color: grey">Volunteer</p>
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
                <p style="margin-top: -30px;margin-left: 68px;color: grey">Days of Help</p>
            </div>
        </div>
        <br>

        <p style="text-align:center">Thật không may, sinh thái, và luôn luôn được khấu trừ. <br>
            Cũng giống như các thành viên của một chuyến đi</p>

        <br>
    </div>

    <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
        <div class="w3-row-padding">
            <div class="w3-center w3-padding-64">
                <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16" style="font-size: 30px">Chính Sách Của Chúng Tôi</span>
            </div>

            <div class="w3-third w3-margin-bottom">
                <div class="w3-card-4">
                    <img src="https://i.pinimg.com/564x/89/3c/81/893c81cb7184f58e44e4a4bb273f4ca4.jpg" alt="John"
                         style="width:100%">
                    <div class="w3-container">
                        <h5>Bảo Mật Dữ Liệu</h5>
                        <p class="w3-opacity">Chính Sách Bảo Mật Thông Tin</p>
                        <p>Dữ liệu cá nhân của khách hàng sẽ được lưu trữ cho đến khi có yêu cầu ban quản trị hủy bỏ.
                            Trong mọi trường hợp thông tin cá nhân khách hàng sẽ được bảo mật.</p>
                        <p>
                            <button class="w3-button w3-light-grey w3-block">Chi Tiết</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="w3-third w3-margin-bottom">
                <div class="w3-card-4">
                    <img src="https://i.pinimg.com/564x/0f/da/ef/0fdaef1ac806274eb6bae8d68a4a91d7.jpg" alt="Mike"
                         style="width:100%">
                    <div class="w3-container">
                        <h5>Giao Hàng Vận Chuyển</h5>
                        <p class="w3-opacity">Chính Sách Giao Hàng</p>
                        <p>Lại Đây Refill Station giao hàng thanh toán tận nơi trên toàn quốc
                            thông qua các đối tác giao nhận uy tín như Giao Hàng Nhanh, Ahamove, Giao Hàng Tiết
                            Kiệm. </p>
                        <p>
                            <button class="w3-button w3-light-grey w3-block">Chi Tiết</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="w3-third w3-margin-bottom">
                <div class="w3-card-4">
                    <img src="https://i.pinimg.com/564x/c4/0e/06/c40e068e8d67e58df7773666d858f1e2.jpg" alt="Jane"
                         style="width:100%">
                    <div class="w3-container">
                        <h5>Bảo Mật Thanh Toán</h5>
                        <p class="w3-opacity">Chính Sách Bảo Mật Thanh Toán</p>
                        <p>Hệ thống thanh toán thẻ được cung cấp bởi các đối tác cổng thanh toán
                            (“Đối Tác Cổng Thanh Toán”) đã được cấp phép hoạt động hợp pháp tại Việt Nam.</p>
                        <p>
                            <button class="w3-button w3-light-grey w3-block">Chi Tiết</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

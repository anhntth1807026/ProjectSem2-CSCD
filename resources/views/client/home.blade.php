@extends('client.layout')

@section('content')


        <header class=" w3-display-container w3-grayscale-min" id="home">
            <div class=" w3-section" style="">
                <img class="mySlides" src="{{ asset('img/slide-pics/bg1.jpg') }}" style="width:100%">
                <img class="mySlides" src="{{ asset('img/slide-pics/bg2.jpg') }}" style="width:100%">
                <img class="mySlides" src="{{ asset('img/slide-pics/bg3.jpg') }}" style="width:100%">
            </div>
            <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small" data-aos="zoom-in"
                  data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới.</span><br>
                <span class="w3-xxlarge w3-hide-large w3-hide-medium"  data-aos="zoom-in" data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới</span><br>
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



{{--    <div class="w3-content w3-display-container">--}}
{{--        <img class="mySlides" src="" style="width:100%">--}}
{{--        <img class="mySlides" src="" style="width:100%">--}}
{{--        <img class="mySlides" src="" style="width:100%">--}}
{{--        <img class="mySlides" src="{{ asset('img/slide-pics/slidea.jpg') }}" style="width:100%">--}}

{{--        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>--}}
{{--        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>--}}
{{--    </div>--}}


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

    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Bán Chạy Nhất</h1>
        <div class="w3-row-padding w3-padding-16 w3-center" data-aos="fade-left" data-aos-duration="1500" id="food">
            {{--            @foreach($product as $products)--}}
            <div class="w3-quarter ">
{{--                    <img src="{{ asset('img/home-care/co-rua-binh.webp') }}" alt="">--}}
                <div class="card__collection clear-fix">
                    <div class="cards cards--two">
                        <img src="{{ asset('img/home-care/co-rua-binh.webp') }}" class="img-responsive" alt="Cards Image" style="width: 100%">
{{--                        <span class="cards--two__rect"></span>--}}
{{--                        <span class="cards--two__tri"></span>--}}

                        <ul class="cards__list">
                            <li class="btn-icon">
                                <a href=""><i class="fa fa-shopping-cart"></i></a>
                            </li >
                            <li class="btn-icon">
                                <i class="fa fa-eye"></i>
                            </li>
                        </ul>
                    </div>

                </div>
                                            <h5 style="height: 45px">Cọ Rửa Bình</h5>
                    {{--                        <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>--}}
                                            <h6 class="w3-opacity">99.000₫</h6>


                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
                {{--                --}}{{--                    <img src="{{ asset('img/home-care/co-rua-binh.webp') }}" alt="">--}}
                {{--                <div class="card__collection clear-fix">--}}
                {{--                    <div class="cards cards--two">--}}
                {{--                        <img src="{{ asset('img/home-care/co-rua-binh.webp') }}" class="img-responsive"--}}
                {{--                             alt="Cards Image" style="width: 100%">--}}
                {{--                        --}}{{--                        <span class="cards--two__rect"></span>--}}
                {{--                        --}}{{--                        <span class="cards--two__tri"></span>--}}

                {{--                        <ul class="cards__list">--}}
                {{--                            <li class="btn-icon">--}}
                {{--                                <a href=""><i class="fa fa-shopping-cart"></i></a>--}}
                {{--                                --}}{{--                                {{ route('add.shopping.cart', $products-> id) }}--}}
                {{--                            </li>--}}
                {{--                            <li class="btn-icon">--}}
                {{--                                <i class="fa fa-eye"></i>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}

                {{--                </div>--}}
                {{--                <h5 style="height: 45px">Cọ Rửa Bình</h5>--}}
                {{--                --}}{{--                        <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>--}}
                {{--                <h6 class="w3-opacity">99.000₫</h6>--}}

                {{--                --}}{{--                    <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết--}}
                {{--                --}}{{--                    </button>--}}
            </div>
            {{--            @endforeach--}}
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/hop-khan-giay-go.webp') }}" alt="Steak" style="width:100%"
                     title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Hộp Khăn Giấy Gỗ</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">199.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/dua-go-trac.webp') }}"
                     alt="" style="width:100%" title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Đũa Gỗ Trắc</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">49.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/xit-khu-mui.webp') }}" alt="" style="width:100%"
                     title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Xịt Khử Mùi</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">429.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
        </div>
    </div>


    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">All Products</h1>
        <div class="w3-row-padding w3-padding-16 w3-center" data-aos="fade-left" data-aos-duration="1500" id="food">
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/ban-chai-nguoi-lon.webp') }}" alt="" style="width:100%"
                     title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Bàn chải tre người lớn</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">79.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">

                <img src="{{ asset('img/new-image/ly-thong-minh-xep-gon.jpg') }}" alt="Steak" style="width:100%"
                     title="Bấm để xem hình ảnh chi tiết">

                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Ly thông minh xếp gọn</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity" style="size: 50px">139.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/new-image/tui-vai-da-nang.webp.jpg') }}"
                     alt="" style="width:100%" title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Túi vải đa năng</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">49.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet.webp') }}" alt=""
                     style="width:100%" title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Bình nước giữ nhiệt nắp gỗ</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">429.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>

        </div>

        <div class="w3-row-padding w3-padding-16 w3-center" data-aos="fade-left" data-aos-duration="1500">
            <div class="w3-quarter">
                <img src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet-cau-vong.webp') }}" alt=""
                     style="width:100%" title="Bấm để xem hình ảnh chi tiết">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Bình nước giữ nhiệt cầu vồng</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">429.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">


                <img src="{{ asset('img/new-image/gel-tay-da-chet-te-bao.jpg') }}" alt="" style="width:100%"
                     title="Bấm để xem hình ảnh chi tiết">

                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Gel tẩy tế bào chết</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">219.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/new-image/khau-trang-loc-bui.jpg') }}" alt="" style="width:100%"
                     title="Bấm để xem hình ảnh chi tiết">

                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Khẩu trang lọc bụi</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">50.000₫</h6>
                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/personal-care/ong-hut-thuy-tinh.webp') }}" alt=""
                     style="width:100%">
                <h5 style="height: 45px" title="Bấm để xem hình ảnh chi tiết">Ống hút thuỷ tinh</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">49.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                        title="Xem thông tin chi tiết của sản phẩm">Sản phẩm chi tiết
                </button>
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
                {{--            <img src="img/saigon01.jpg" alt="Cinque Terre" style="width:100%">--}}
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
                        {{--                    <img src="img/saigon02.jpg" alt="New York" style="width:100%">--}}
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/convi.png') }}">
                        <span class="w3-display-bottomleft w3-padding w3-white" style="color: black">
                        Tiện Lợi
{{--                        BẠN CÓ BIẾT?--}}
                            {{--                Campuchia sẽ gửi trả lại 1,600 tấn rác nhựa tìm thấy trong các containers nhập khẩu từ Mỹ và ...--}}
                    </span>
                    </div>
                </div>
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-display-container">
                        {{--                    <img src="img/saigon03.jpg" alt="San Francisco" style="width:100%">--}}
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/prat.jpg') }}">
                        <span class="w3-display-bottomleft w3-padding " style="color: black">
                        Thiết Thực
{{--BẠN ĐANG TÌM GIẢI PHÁP CHO VIỆC SÚC MIỆNG SAO CHO "XANH" HƠN?--}}
                            {{--SEEKING FOR A GREENER SOLUTION FOR YOUR MOUTH-WASHING?--}}

                            {{--Bột súc miệng thảo mộc 100% organic từ tinh dầu bạc hà, bột quế, đá muối hồng Himalaya, bột vỏ cam khô và trà xanh.--}}
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
{{--                        BẠN CÓ BIẾT?--}}
                            {{--                        Đảo Henderson tại Thái Bình Dương, Di Sản Thế Giới do UNESCO trao tặng ...--}}
                    </span>
                    </div>
                </div>
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-display-container">
                        {{--                    <img src="img/saigon05.jpg" alt="Paris" style="width:100%">--}}
                        <img style="width:100%"
                             src="{{ asset('img/slide-pics/envi.jpg') }}">
                        <span class="w3-display-bottomleft w3-padding" style="color: black">
                        Thiên Nhiên
{{--                        “Cái răng cái tóc là góc con người", một mái tóc đẹp, chắc khoẻ, không đòi hỏi cầu kì trong chăm sóc và không bị phụ thuộc hoá chất có lẽ là ước muốn của nhiều người,...--}}
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

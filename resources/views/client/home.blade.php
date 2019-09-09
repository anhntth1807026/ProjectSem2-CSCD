@extends('client.layout')

@section('content')


    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small" data-aos="zoom-in"
              data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới.</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium" data-aos="zoom-in" data-aos-duration="3000">Bắt Đầu Một Hành Trình Mới</span><br>
            <span class="w3-large" data-aos="zoom-in" data-aos-duration="3000">Ngưng Sử Dụng Đồ Dùng Làm Từ Nhựa Và Các Sản Phẩm Gây Hại Cho Môi Trường.</span>
            <p><a href="#about"
                  class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"
                  data-aos="zoom-in" data-aos-duration="3000">Tìm
                    Hiểu Nhiều Hơn Và Bắt Đầu Từ Hôm Nay</a></p>
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
                     src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/68506579_461342201388214_6595445951190532096_o.jpg?_nc_cat=102&_nc_eui2=AeHYmQYLVF7Fc4UlqFOZRwqaM_F2rbpH6QC1Ydmd5Xp_0tlANOsT1HMJCDXTzD2T3fJdadGYp4vRRQk_p3PRG28tGXlIHCbDoojiz3cI9eU9Yg&_nc_oc=AQm-Hv516S5oeN7CwPCbs-oAXQYQrtKlgI1MMeKvGk5HxdVfLGrPh3v8VP1_qgIEGXc&_nc_ht=scontent.fhan2-2.fna&oh=8a6fd904316e6b4171115637b20d8548&oe=5E12076E"
                     alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>

    <div class="w3-container" style="padding:70px 16px; background-color: #f2dc9dd1; color: #0c0c0c" id="about">
        <h3 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Tiêu Chí Của Chúng Tôi</h3>
        <p class="w3-center w3-large" data-aos="fade-left" data-aos-duration="1500">Thiên Nhiên Là Chìa Khóa Của Tương
            Lai</p>
        <div class="w3-row-padding w3-center" data-aos="fade-up" data-aos-duration="2000" style="margin-top:64px">
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-1.webp') }}" alt="">
                <p class="w3-large">Byo</p>
                <p>Bring your own bottles or jars.

                    Make sure to clean and dry them, and remove old labels if any.

                    In case you forget your containers, please ask us if there is any old bottles donated from local
                    community to borrow.</p>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-2.webp') }}" alt="">
                <p class="w3-large">Stick</p>
                <p>Stick the label on your container, mindfully.</p>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-3.webp') }}" alt="">
                <p class="w3-large">Tare&Write</p>
                <p>Weigh your container.
                    Write the weight of your container on the label.</p>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-4.webp') }}" alt="">
                <p class="w3-large">REFILL</p>
                <p>Fill your container with the product you love.

                    One product for one container.

                    Meditate in case some of the products can take time to refill.</p>
            </div>
        </div>
    </div>

    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Best Seller</h1>
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

{{--                    <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết--}}
{{--                    </button>--}}
            </div>
{{--            @endforeach--}}
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/hop-khan-giay-go.webp') }}" alt="Steak" style="width:100%">
                <h5 style="height: 45px">Hộp Khăn Giấy Gỗ</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">199.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/dua-go-trac.webp') }}"
                     alt="" style="width:100%">
                <h5 style="height: 45px">Đũa Gỗ Trắc</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">49.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/xit-khu-mui.webp') }}" alt="" style="width:100%">
                <h5 style="height: 45px">Xịt Khử Mùi</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">429.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
        </div>
    </div>


    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">All Products</h1>
        <div class="w3-row-padding w3-padding-16 w3-center" data-aos="fade-left" data-aos-duration="1500" id="food">
            <div class="w3-quarter">
                <img src="{{ asset('img/home-care/ban-chai-nguoi-lon.webp') }}" alt="" style="width:100%">
                <h5 style="height: 45px">Bàn chải tre người lớn</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">79.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">

                <img src="{{ asset('img/new-image/ly-thong-minh-xep-gon.jpg') }}" alt="Steak" style="width:100%">

                <h5 style="height: 45px">Ly thông minh xếp gọn</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity" style="size: 50px">139.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/new-image/tui-vai-da-nang.webp.jpg') }}"
                     alt="" style="width:100%">
                <h5 style="height: 45px">Túi vải đa năng</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">49.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet.webp') }}" alt=""
                     style="width:100%">
                <h5 style="height: 45px">Bình nước giữ nhiệt nắp gỗ</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">429.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>

        </div>

        <div class="w3-row-padding w3-padding-16 w3-center" data-aos="fade-left" data-aos-duration="1500">
            <div class="w3-quarter">
                <img src="{{ asset('img/personal-care/binh-nuoc-giu-nhiet-cau-vong.webp') }}" alt=""
                     style="width:100%">
                <h5 style="height: 45px">Bình nước giữ nhiệt cầu vồng</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">429.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">


                <img src="{{ asset('img/new-image/gel-tay-da-chet-te-bao.jpg') }}" alt="" style="width:100%">

                <h5 style="height: 45px">Gel tẩy tế bào chết</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">219.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/new-image/khau-trang-loc-bui.jpg') }}" alt="" style="width:100%">

                <h5 style="height: 45px">Khẩu trang lọc bụi</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">50.000₫</h6>
                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
                </button>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('img/personal-care/ong-hut-thuy-tinh.webp') }}" alt=""
                     style="width:100%">
                <h5 style="height: 45px">Ống hút thuỷ tinh</h5>
                <h6 style="height: 30px">Đồ Dùng Gia Đình</h6>
                <h6 class="w3-opacity">49.000₫</h6>

                <button class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom">Sản phẩm chi tiết
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
                     src="{{ asset('img/new-image/82f5a0279405e1408ee4cef60d029446.jpg') }}">
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
                             src="{{ asset('img/new-image/earth-clip-art-earth-green-earth-environmental-protection-material-taobao.jpg') }}">
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
                             src="{{ asset('img/new-image/environment-pollution-ecology-illustration-calls-for-protection-of-the-global-environment-elements.jpg') }}">
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
                             src="{{ asset('img/new-image/muruy-village-panimbangjaya-badan-usaha-milik-desa-environment-icon-peta.jpg') }}">
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
                             src="{{ asset('img/new-image/natural-environment-sustainability-environmental-issue-environmental-degradation-the-heart-of-the-green-energy-thumbnail.jpg') }}">
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

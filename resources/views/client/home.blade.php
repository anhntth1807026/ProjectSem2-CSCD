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
    </div>

    <div class="w3-container w3-light-white" style="padding:100px 16px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <div data-aos="zoom-out-up" data-aos-duration="1500"><h2 style="text-align: center">Chào mừng bạn <br>
                        đến với Zero Waste</h2>
                    <br>
                    <p style="font-size: 22px;font-kerning: none;font-weight: lighter;text-align: center">
                        Zero Waste là nơi dành cho những ai <br> quan tâm đến lối sống xanh, bền vững và
                        thân thiện với môi
                        trường. <br>
                        <br>Tại đây, bạn sẽ cảm thấy hạnh phúc, <br> tình yêu và lòng biết ơn <br> đối với các
                        sản phẩm do người
                        Việt Nam làm ra. <br><br> Vì lợi ích của cộng đồng và cho lối sống đơn giản và lành mạnh.
                    </p>
                    <br>
                    <div class="w3-row-padding" style="text-align: center">
                        <div class="w3-quarter">
                            <i class="fab fa-mixcloud" style="font-size: 30px;color: #58d4e7"></i>
                            <p style="margin-top: 10px;font-size: 15px;color: #58d4e7">SINH THÁI</p>
                        </div>
                        <div class="w3-quarter">
                            <i class="far fa-heart" style="font-size: 30px;color: #7ce095"></i>
                            <p style="margin-top: 10px;font-size: 15px;color: #7ce095">TRỒNG CÂY</p>
                        </div>
                        <div class="w3-quarter">
                            <i class="far fa-star" style="font-size: 30px;color: #58d4e7"></i>
                            <p style="margin-top: 10px;font-size: 15px;color: #58d4e7">NĂNG ĐỘNG</p>
                        </div>
                        <div class="w3-quarter">
                            <i class="far fa-trash-alt" style="font-size: 30px;color: #7ce095"></i>
                            <p style="margin-top: 10px;font-size: 15px;color: #7ce095">TÁI CHẾ</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3-col m6" data-aos="zoom-out-left" data-aos-duration="1500">
                <img class="w3-image w3-round-large"
                     src="{{ asset('/img/slide-pics/welcomeimg.jpg') }}"
                     alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>


    {{--    Tiêu chí của chúng tôi--}}
    <div class="w3-container" style="padding:40px 40px; background-color: #e5df27; color: #0c0c0c" id="about">
        <h3 class="w3-center" data-aos="fade-right" data-aos-duration="1500"><b>Tiêu Chí Của Chúng Tôi</b></h3>
        <p class="w3-center w3-large" data-aos="fade-left" data-aos-duration="1500" style="font-size: 20px">Thay vì dùng tiền mặt, bạn có thể mang những chai lọ đã sử dụng với số lượng phù hợp để đổi lấy những sản phẩm của chúng tôi.</p>

        <div class="w3-row-padding w3-center" data-aos="fade-up" data-aos-duration="1200" style="margin-top:50px">
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-1.webp') }}" alt="" title="Hãy chuẩn bị thật kĩ nhé!">
                <p class="w3-large" style="margin-top: 15px"><b>Byo</b></p>
                <p style="margin-top: 20px">Mang theo nhiều chai lọ nhất có thể.

                    Rửa sạch và để khô, sau đó bóc sạch nhãn dán nếu vẫn còn.

                    Hãy chuẩn bị sẵn một chiếc hộp để đựng đồ. Nếu không có hoặc quên mang theo, hãy hỏi và mượn từ phía ban tổ chức địa phương.</p>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-2.webp') }}" alt=""
                     title="Đừng quên dán nhãn để đánh dấu hộp của bạn.">
                <p class="w3-large" style="margin-top: 15px"><b>Stick</b></p>
                <p style="margin-top: 20px">Dán nhãn vào hộp đựng chai lọ của bạn.</p>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-3.webp') }}" alt=""
                     title="Cân để biết trọng lượng của những điều tuyệt vời mà bạn mang tới.">
                <p class="w3-large" style="margin-top: 15px"><b>Tare&Write</b></p>
                <p style="margin-top: 20px">Cân hộp của bạn tại quầy.

                    Viết số cân nặng vào nhãn.
                </p>
            </div>
            <div class="w3-quarter">
                <img src="{{ asset('/img/new-image/icon-4.webp') }}" alt=""
                     title="Đừng bỏ lỡ bước cuối cùng của chương trình nhé!">
                <p class="w3-large" style="margin-top: 15px"><b>Refill</b></p>
                <p style="margin-top: 20px">Cho những sản phẩm bảo vệ môi trường bạn thích vào hộp.

                    Mỗi hộp chỉ được có một loại sản phẩm.

                    Hãy tính đến việc phải thay đổi lựa chọn vì số lượng có hạn của những sản phẩm.
                </p>
            </div>
        </div>
    </div>
    <br>

    {{--    Bán chạy nhất--}}
    <div class="container">
        <br>
        <h1 class="w3-center" data-aos="fade-right" data-aos-duration="1500">Bán Chạy Nhất</h1>
        <div class="row">
            @foreach($productHot as $productHots)
{{--                <div class="col-md-3 col-sm-6">--}}
{{--                    <div class="col-md-3 col-sm-6">--}}
{{--                        <div class="product-grid6 mb-2">--}}
{{--                            <div class="product-image6">--}}
{{--                                <a href="#">--}}
{{--                                    <img class="pic-1"--}}
{{--                                         src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_300,h_350/{{$productHots->thumbnail}}"--}}
{{--                                         title="Bấm để xem hình ảnh chi tiết">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <h5 class="title"><a href="#">{{$productHots->name}}</a></h5>--}}
{{--                                <div class="price">{{number_format($productHots->price, 0, ',' , '.')}}đ</div>--}}
{{--                            </div>--}}
{{--                            <ul class="social">--}}
{{--                                <li>--}}
{{--                                    <a href="{{ route('add.shopping.cart', $productHots->id) }}"--}}
{{--                                       class="card-link add-cart"--}}
{{--                                       data-id="{{$productHots->id}}"--}}
{{--                                       data-name="{{$productHots->name}}"--}}
{{--                                       data-thumbnail="{{$productHots->thumbnail}}"--}}
{{--                                       data-price="{{$productHots->price}}"--}}
{{--                                       data-tip="Add to Cart"--}}
{{--                                    >--}}
{{--                                        <i class="fa fa-shopping-bag"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li><a href="" data-tip="View Detail"><i class="fa fa-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-md-3 col-sm-6" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="product-grid6 mb-2">
                        <div class="product-image6">
                            <a href="{{ route('get.detail.product', $productHots->id) }}">
                                <img class="pic-1"
                                     src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_300,h_350/{{$productHots->thumbnail}}"
                                     title="Bấm để xem hình ảnh chi tiết">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5 class="title"><a href="{{ route('get.detail.product', $productHots->id) }}">{{$productHots->name}}</a></h5>

                            <div class="price">{{number_format($productHots->price, 0, ',' , '.')}}đ</div>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="{{ route('add.shopping.cart', $productHots->id) }}"
                                   class="card-link add-cart"
                                   data-id="{{$productHots->id}}"
                                   data-name="{{$productHots->name}}"
                                   data-thumbnail="{{$productHots->thumbnail}}"
                                   data-price="{{$productHots->price}}"
                                   data-tip="Add to Cart"
                                >
                                    <i class="fa fa-shopping-bag"></i>
                                </a>
                            </li>

                            <li><a href="{{ route('get.detail.product', $productHots->id) }}" data-tip="View Detail"><i class="fa fa-eye"></i></a></li>

                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
        <hr>
    </div>

    {{--    Tất cả sản phẩm--}}
    <div class="container">
        <h2 class="w3-center" data-aos="fade-left" data-aos-duration="1500">Tất Cả Sản Phẩm</h2>
        <div class="row">
            @foreach($product as $item)
                <div class="col-md-3 col-sm-6" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="product-grid6 mb-2">
                        <div class="product-image6">
                            <a href="{{ route('get.detail.product', $item->id) }}">
                                <img class="pic-1"
                                     src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_300,h_350/{{$item->thumbnail}}"
                                     title="Bấm để xem hình ảnh chi tiết">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5 class="title"><a href="{{ route('get.detail.product', $item->id) }}">{{$item->name}}</a></h5>

                            <div class="price">{{number_format($item->price, 0, ',' , '.')}}đ</div>
                        </div>
                        <ul class="social">
                            <li>
                                {{--                                <a href="javascript:void(0)" class="card-link add-cart"--}}
                                {{--                                   data-id="{{$item->id}}"--}}
                                {{--                                   data-name="{{$item->name}}"--}}
                                {{--                                   data-thumbnail="{{$item->thumbnail}}"--}}
                                {{--                                   data-price="{{$item->price}}"--}}
                                {{--                                   data-tip="Add to Cart"--}}
                                {{--                                >--}}
                                <a href="{{ route('add.shopping.cart', $item->id) }}" class="card-link add-cart"
                                   data-id="{{$item->id}}"
                                   data-name="{{$item->name}}"
                                   data-thumbnail="{{$item->thumbnail}}"
                                   data-price="{{$item->price}}"
                                   data-tip="Add to Cart"
                                >
                                    <i class="fa fa-shopping-bag"></i>
                                </a>
                            </li>
                            <li><a href="{{ route('get.detail.product', $item->id) }}" data-tip="View Detail"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <br>


        <p style=" text-align: center;font-size: 24px;color: #d56b2d"><a href="{{ route('list.product') }}" class="w3-button w3-round" style="text-decoration: none">Xem
                Thêm</a></p>
        <br>

{{--        <hr>--}}
{{--        <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:50px">--}}
{{--            <h3 style="text-align: center" data-aos="fade-up" data-aos-duration="1200">GIẢI PHÁP CỦA CHÚNG TÔI</h3>--}}
{{--            <br>--}}
{{--            <div class="w3-row-padding w3-padding-16 w3-center" id="food">--}}
{{--                <div class="w3-quarter" data-aos="zoom-in-right" data-aos-duration="1200">--}}
{{--                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/01-2-o1.jpg" alt="Sandwich"--}}
{{--                         style="width:100%">--}}
{{--                </div>--}}
{{--                <div class="w3-quarter" data-aos="zoom-out-up" data-aos-duration="1200">--}}
{{--                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/02-2-o.jpg" alt="Steak"--}}
{{--                         style="width:100%">--}}
{{--                </div>--}}
{{--                <div class="w3-quarter" data-aos="zoom-out-up" data-aos-duration="1200">--}}
{{--                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/03-2-o.jpg" alt="Cherries"--}}
{{--                         style="width:100%">--}}
{{--                </div>--}}
{{--                <div class="w3-quarter" data-aos="zoom-in-left" data-aos-duration="1200">--}}
{{--                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/04-2-o1.jpg"--}}
{{--                         alt="Pasta and Wine"--}}
{{--                         style="width:100%">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}

{{--        <p style="text-align: center;font-size: 24px;color: #d56b2d"><a href="#" class="w3-button w3-round" style="text-decoration: none">Xem--}}
{{--                Thêm</a></p>--}}
{{--        <br>--}}
        <hr>

        <br>

        <div class="container">
            <h2 class="w3-center" data-aos="fade-up" data-aos-duration="1200" style="color:grey;">Bài Viết Mới</h2>
            <p class="w3-center w3-large" data-aos="fade-up" data-aos-duration="1200"
               style="color: grey;font-size: 24px">
                Tìm Hiểu Nhiều
                Hơn Về
                Môi Trường</p>
            <br>
            <br>
            <div class="row">
                @foreach($blog as $item)
                <div class="col-md-4 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1200">
                    <div class="product-grid8">
                        <div class="product-image8">
                            <a href="#">
                                <img src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_350,h_250/{{$item -> thumbnail}}"
                                     alt="Norway" style="width:100%">
                            </a>
                        </div>
                        <div class="product-content">
                            <h2 class="title"><a href="#" style="text-decoration: none">{{$item -> title}}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-md-4 col-sm-6" data-aos="zoom-out-up" data-aos-duration="1200">--}}
{{--                    <div class="product-grid8">--}}
{{--                        <div class="product-image8">--}}
{{--                            <a href="#">--}}
{{--                                <img src="https://i.pinimg.com/564x/ba/b3/41/bab341d888f568959f64a987597e2b02.jpg"--}}
{{--                                     alt="Norway" style="width:100%">--}}
{{--                            </a>--}}
{{--                            <ul class="social">--}}
{{--                                <li><a href="" class="fa fa-search"></a></li>--}}
{{--                                <li><a href="" class="fa fa-shopping-bag"></a></li>--}}
{{--                                <li><a href="" class="fa fa-shopping-cart"></a></li>--}}
{{--                            </ul>--}}
{{--                            <span class="product-discount-label">NÊN</span>--}}
{{--                        </div>--}}
{{--                        <div class="product-content">--}}
{{--                            <span>9-9-2019</span>--}}
{{--                            <br>--}}
{{--                            <h3 class="title"><a href="#">VẬY LÀM SAO ĐỂ BẮT ĐẦU MỘT LỐI SỐNG XANH?</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1200">--}}
{{--                    <div class="product-grid8">--}}
{{--                        <div class="product-image8">--}}
{{--                            <a href="#">--}}
{{--                                <img src="https://i.pinimg.com/564x/ab/fa/91/abfa913ed4f6b1b31567145539b3ae87.jpg"--}}
{{--                                     alt="Norway" style="width:100%">--}}
{{--                            </a>--}}
{{--                            <ul class="social">--}}
{{--                                <li><a href="" class="fa fa-search"></a></li>--}}
{{--                                <li><a href="" class="fa fa-shopping-bag"></a></li>--}}
{{--                                <li><a href="" class="fa fa-shopping-cart"></a></li>--}}
{{--                            </ul>--}}
{{--                            <span class="product-discount-label">NÊN</span>--}}
{{--                        </div>--}}
{{--                        <div class="product-content">--}}
{{--                            <span>7-9-2019</span>--}}
{{--                            <br>--}}
{{--                            <h3 class="title"><a href="#">THỰC TRẠNG Ô NHIỄM MÔI TRƯỜNG Ở VIỆT NAM.</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

        <br>

        <p style="text-align: center;font-size: 24px;color: #d56b2d"><a href="/Blog" class="w3-button w3-round" style="text-decoration: none">Xem
                Thêm</a></p>
        <br>
    </div>
@endsection

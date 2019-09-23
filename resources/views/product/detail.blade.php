@extends('client.layout')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>

    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('/thumbnail/logo-short-cut.png') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            font-family: 'Oxygen', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
        }

        p {
            font-size: 20px;
        }

        body, html {
            height: 100%;
            line-height: 1.8;
        }

        .w3-bar .w3-button {
            padding: 16px;
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


        .product-grid6, .product-grid6 .product-image6 {
            overflow: hidden
        }

        .product-grid6 {
            font-family: "Segoe UI", Arial, sans-serif;
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

        .list_start i:hover {
            cursor: pointer;
        }

        .list_text {
            display: inline-block;
            margin-left: 10px;
            position: relative;
            background: #52b858;
            color: #fff;
            padding: 5px 10px;
            height: 30px;
            box-sizing: border-box;
            font-size: 12px;
            border-radius: 2px;
            display: none;
        }

        .list_text::after {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(82, 184, 88, 0);
            border-right-color: #52b858;
            border-width: 6px;
            margin-top: -6px;
        }

        .list_start .rating_active, .pro_rating .active {
            color: #ff9705;
        }

        @media only screen and (max-width: 990px) {
            .product-grid6 {
                margin-bottom: 30px
            }
        }

    </style>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{ route('home') }}">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="home">
                                <a href="">{{ $cateProduct->name }}</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>{{ $productDetail->name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-content w3-margin-left-80 w3-margin-right-80">
        <div class="w3-main">
            <div class="w3-white" id="apartment">
                <h2 class="w3-text-gray" style="margin: 80px 0 80px 0;text-align: center">Chi Tiết Sản Phẩm</h2>
                <div class="w3-row-padding" id="about">
                    <div class="w3-col m6">
                        <div class="slideimage1">
                            <a href="#ex1" rel="modal:open">
                                <img class="demo"
                                     src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{$productDetail->thumbnail}}"
                                     style="width:100%" alt="Snow" onclick="myFunction(this);">
                            </a>
                            <div id="ex1" class="modal">
                                <img class="demo"
                                     src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                     style="width:100%;height: auto" alt="Snow" onclick="myFunction(this);">
                                <a href="#" rel="modal:close"></a>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="w3-container">--}}
                    {{--                        <div class="row w3-row-padding w3-section">--}}
                    {{--                            <div class="w3-col s3 column">--}}
                    {{--                                <a href="#ex1" rel="modal:open">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/63/de/76/63de7637de6840e0371944a2d06f8d19.jpg"--}}
                    {{--                                         style="width:100%" alt="Nature" onclick="myFunction(this);">--}}
                    {{--                                </a>--}}
                    {{--                                <div id="ex1" class="modal">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                          src="https://i.pinimg.com/564x/63/de/76/63de7637de6840e0371944a2d06f8d19.jpg"--}}
                    {{--                                          style="width:100%" alt="Nature" onclick="myFunction(this);">--}}
                    {{--                                    <a href="#" rel="modal:close"></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="w3-col s3 column">--}}
                    {{--                                <a href="#ex1" rel="modal:open">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"--}}
                    {{--                                         style="width:100%" alt="Snow" onclick="myFunction(this);">--}}
                    {{--                                </a>--}}
                    {{--                                <div id="ex1" class="modal">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"--}}
                    {{--                                         style="width:100%" alt="Snow" onclick="myFunction(this);">--}}
                    {{--                                    <a href="#" rel="modal:close"></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="w3-col s3 column">--}}
                    {{--                                <a href="#ex1" rel="modal:open">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"--}}
                    {{--                                         style="width:100%" alt="Snow" onclick="myFunction(this);">--}}
                    {{--                                </a>--}}
                    {{--                                <div id="ex1" class="modal">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"--}}
                    {{--                                         style="width:100%" alt="Snow" onclick="myFunction(this);">--}}
                    {{--                                    <a href="#" rel="modal:close"></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="w3-col s3 column">--}}
                    {{--                                <a href="#ex1" rel="modal:open">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"--}}
                    {{--                                         style="width:100%" alt="Snow" onclick="myFunction(this);">--}}
                    {{--                                </a>--}}
                    {{--                                <div id="ex1" class="modal">--}}
                    {{--                                    <img class="demo"--}}
                    {{--                                         src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"--}}
                    {{--                                         style="width:100%" alt="Snow" onclick="myFunction(this);">--}}
                    {{--                                    <a href="#" rel="modal:close"></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    <div class="w3-col m6">
                        <p style="font-size: 30px">{{ $productDetail->name }}</p>
                        <div class="rating_price">
                            <?php
                            $avgDetail = 0;
                            if ($productDetail->pro_total_rating) {
                                $avgDetail = round($productDetail->pro_total_number / $productDetail->pro_total_rating, 2);
                            }
                            ?>
                            <div class="pro_rating" style="color: #dfde33de">
                                @for($i = 1 ; $i <= 5 ; $i ++)
                                    <a href=""><i class="fas fa-star {{ $i <= $avgDetail ? 'active' : '' }}"></i></a>
                                @endfor
                            </div>
                        </div>

                        <br>
                        <p style="font-size: 25px">{{ number_format($productDetail->price, 0, ',', '.') }}
                            VNĐ</p>
                        <P>{{ $productDetail->description }}</P>
                        <p style="font-size: 25px">Số Lượng :
                        <div class="form-group">
                            <input style="width: 30%;" type="number" name="qty" class="form-control" min="1" value="1"
                                   onchange="updateCart(this.value, '{{ $productDetail->rowId }}')">
                        </div>
                        </p>
                        <a href="{{ route('add.shopping.cart', $productDetail->id) }}"
                           class="card-link add-cart w3-button w3-hover-blue-grey w3-margin-bottom"
                           data-id="{{$productDetail->id}}"
                           data-name="{{$productDetail->name}}"
                           data-thumbnail="{{$productDetail->thumbnail}}"
                           data-price="{{$productDetail->price}}"
                           data-tip="Thêm vào giỏ hàng"
                           style="font-size: 20px; background-color: lawngreen"
                        >
                            <i class="fa fa-shopping-bag"> Thêm vào giỏ hàng</i>
                        </a>
                    </div>
                </div>
            </div>

            <hr>
        </div>
    </div>



    <div class="container">
        <div class="component_rating" style="margin-bottom: 20px">
            <h3>Đánh giá sản phẩm</h3>

            <div class="component_rating_content"
                 style="display: flex;align-items: center;border: 1px solid #dedede">
                <div class="rating_item" style="width: 20%;position: relative">
                       <span class="fas fa-star"
                             style="font-size: 100px;color: #ff9705;display: block;margin: 0 auto;text-align: center;">
                           <b style="position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);color: white;font-size: 20px">5</b>
                       </span>
                </div>
                <div class="list_rating" style="width: 60%;padding: 20px">
                    @for($i = 1; $i <=5 ; $i ++)
                        <div class="item_rating" style="display: flex;align-items: center">
                            <div style="width: 10%;font-size: 14px">
                                {{ $i }}<span class="fas fa-star"></span>
                            </div>
                            <div style="width: 70%;margin: 0 20px">
                                    <span
                                        style="width: 100%;height: 8px;display: block;border: 1px solid #dedede;border-radius: 5px;background-color: #dedede">
                                        <b style="width: 30%; background-color: #f25800;display: block;border-radius: 5px"></b>
                                    </span>
                            </div>
                            <div style="width: 20%">
                                <a href="">180 đánh giá</a>
                            </div>
                        </div>
                    @endfor
                </div>
                <div style="width: 20%">
                    <a href="#" class="js_rating_action"
                       style="width: 200px; background: #288ad6;padding: 10px;color: white;border-radius: 5px;text-decoration: none;">Gửi
                        đánh giá của bạn</a>
                </div>
            </div>
            <?php
            $listRatingText = [
                1 => 'Không thích',
                2 => 'Tạm được',
                3 => 'Bình thường',
                4 => 'Rất tốt',
                5 => 'Tuyệt vời quá',
            ];
            ?>
            <div class="form_rating hide">
                <div style="display: flex; margin-top: 15px;font-size: 15px">
                    <p style="margin-bottom: 0">Chọn đánh giá của bạn</p>
                    <span style="margin: 5px 15px" class="list_start">
                    @for($i = 1; $i<= 5; $i ++)
                            <i class="fas fa-star" data-key="{{$i}}"></i>
                        @endfor
                    </span>
                    <span class="list_text"></span>
                    <input type="hidden" value="" class="number_rating">
                </div>
                <div style="margin-top: 15px">
                    <textarea name="" class="form-control" id="rate_content" cols="30" rows="3"></textarea>
                </div>

                <div style="margin-top: 15px">
                    <a href="{{ route('post.rating.product', $productDetail) }}" class="js_rating_product"
                       style="width: 200px;background: #288ad6;padding: 5px 10px;color: white;border-radius: 5px">Gửi
                        đánh giá</a>
                </div>
            </div>


        </div>
        <br>
        <br>
        <h2 class="h2" style="text-align: center">CÁC SẢN PHẨM KHÁC</h2>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1"
                                 src="https://i.pinimg.com/564x/96/aa/c7/96aac7f9358d1dd68f0814b93edc216b.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Túi Lưới Đi Chợ 100% Cotton</a></h3>
                        <div class="price">25,000 Đ
                            <span>17,000 Đ</span>
                        </div>
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
                            <img class="pic-1"
                                 src="https://i.pinimg.com/564x/13/d2/cb/13d2cb069106fbabd0f3fda0d219e93e.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Bàn Chải Tre Kiểu Nón Người Lớn</a></h3>
                        <div class="price">79,000 Đ
                            <span>75,000 Đ</span>
                        </div>
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
                            <img class="pic-1"
                                 src="https://i.pinimg.com/564x/f6/2b/1d/f62b1d689075947e277b87f4b4f8c824.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Ly thông minh xếp gọn - Silicon an toàn BPA-free & chuẩn FDA -
                                350ml</a></h3>
                        <div class="price">200,000 Đ
                            <span>160,000 Đ</span>
                        </div>
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
                            <img class="pic-1"
                                 src="https://i.pinimg.com/564x/4f/4c/7a/4f4c7a32dce52f118aafe432a049772c.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">REFILL Vụn xà bông</a></h3>
                        <div class="price">400 Đ/1 Miếng
                            <span>350 Đ/1 Miếng</span>
                        </div>
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
    <br>
    <br>

    <script type="text/javascript">
        function updateCart(qty, rowId) {
            $.get(
                '{{ route('update.shopping.cart') }}',
                {qty: qty, rowId: rowId},
                function () {
                    location.reload();
                }
            );
        }
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function () {
            let listStart = $(".list_start .fas");

            listRatingText = {
                1: 'Không thích',
                2: 'Tạm được',
                3: 'Bình thường',
                4: 'Rất tốt',
                5: 'Tuyệt vời quá',
            };

            listStart.mouseover(function () {
                let $this = $(this);
                listStart.removeClass('rating_active');
                $(".number_rating").val($this.attr('data-key'));
                $.each(listStart, function (key, value) {
                    if (key + 1 <= $this.attr('data-key')) {
                        $(this).addClass('rating_active')
                    }
                });

                $(".list_text").text('').text([listRatingText[$this.attr('data-key')]]).show();
            });

            $(".js_rating_action").click(function (event) {
                event.preventDefault();
                if ($(".form_rating").hasClass('hide')) {
                    $(".form_rating").addClass('active').removeClass('hide');
                } else {
                    $(".form_rating").addClass('hide').removeClass('active')
                }
            })

            $(".js_rating_product").click(function (event) {
                event.preventDefault();
                let content = $("#rate_content").val();
                let number = $(".number_rating").val();
                let url = $(this).attr('href');

                if (content && number) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            number: number,
                            r_content: content
                        }
                    }).done(function (result) {
                        if (result.code == 1) {
                            alert("Gửi đánh giá thành công");
                            location.reload();
                        }
                    });
                }
            });
        });
    </script>
@endsection

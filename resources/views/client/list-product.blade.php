@extends('client.layout')
@section('content')
    <style>
        h3.h3 {
            text-align: center;
            margin: 1em;
            text-transform: capitalize;
            font-size: 1.7em;
        }

        /********************* hover product **********************/
        .product-grid8 {
            font-family: Poppins, sans-serif;
            position: relative;
            z-index: 1
        }

        .product-grid8 .product-image8 {
            border: 1px solid #e4e9ef;
            position: relative;
            transition: all .3s ease 0s
        }

        .product-grid8:hover .product-image8 {
            box-shadow: 0 0 10px rgba(0, 0, 0, .15)
        }

        .product-grid8 .product-image8 a {
            display: block
        }

        .product-grid8 .product-image8 img {
            width: 100%;
            height: auto
        }

        .product-grid8 .pic-1 {
            opacity: 1;
            transition: all .5s ease-out 0s
        }

        /*.product-grid8:hover .pic-1 {*/
        /*    opacity: 0*/
        /*}*/

        /*.product-grid8 .pic-2 {*/
        /*    opacity: 0;*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    transition: all .5s ease-out 0s*/
        /*}*/

        /*.product-grid8:hover .pic-2 {*/
        /*    opacity: 1*/
        /*}*/

        .product-grid8 .social {
            padding: 0;
            margin: 0;
            list-style: none;
            position: absolute;
            bottom: 13px;
            right: 13px;
            z-index: 1
        }

        .product-grid8 .social li {
            opacity: 0;
            transform: translateY(3px);
            transition: all .5s ease 0s
        }

        .product-grid8:hover .social li {
            margin: 0 0 10px;
            opacity: 1;
            transform: translateY(0)
        }

        .product-grid8:hover .social li:nth-child(1) {
            transition-delay: .1s
        }

        .product-grid8:hover .social li:nth-child(2) {
            transition-delay: .2s
        }

        .product-grid8:hover .social li:nth-child(3) {
            transition-delay: .4s
        }

        .product-grid8 .social li a {
            color: grey;
            font-size: 17px;
            line-height: 40px;
            text-align: center;
            height: 40px;
            width: 40px;
            border: 1px solid grey;
            display: block;
            transition: all .5s ease-in-out
        }

        .product-grid8 .social li a:hover {
            color: #000;
            border-color: #000
        }


        .product-grid8 .product-content {
            padding: 20px 0 0
        }

        .product-grid8 .price {
            color: #000;
            font-size: 19px;
            font-weight: 400;
            margin-bottom: 8px;
            text-align: center;
            transition: all .3s
        }

        .product-grid8 .price span {
            color: #999;
            font-size: 14px;
            font-weight: 500;
            text-decoration: line-through;
            margin-left: 7px;
            display: inline-block
        }


        .product-grid8 .title {
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            margin: 0 0 30px;
            transition: all .3s ease 0s
        }

        .product-grid8 .title a {
            color: #000
        }

        .product-grid8 .title a:hover {
            color: #0081c2
        }

        .product-grid8 .all-deals .icon {
            margin-left: 7px
        }

        .product-grid8 .all-deals:hover {
            background-color: #0081c2
        }

        @media only screen and (max-width: 990px) {
            .product-grid8 {
                margin-bottom: 30px
            }
        }

        #loadMore {
            padding-bottom: 30px;
            padding-top: 30px;
            text-align: center;
            width: 100%;
        }

        #loadMore a {
            background: #042a63;
            border-radius: 3px;
            color: white;
            display: inline-block;
            padding: 10px 30px;
            transition: all 0.25s ease-out;
            -webkit-font-smoothing: antialiased;
        }

        #loadMore a:hover {
            background-color: #021737;
        }


    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    </script>

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-3 " style="width: 100%; height: 90vh; top: 60px; position: sticky;">
                <!-- Search form -->
                <div style="position: relative;">
                    <i id="btn-search" class="fas fa-search"
                       style="position: absolute;top: 50%;right: 2%;color: #939393;transform: translateY(-50%);font-size: 20px;cursor: pointer"></i>
                    <input id="searchByName" class="form-control" type="text" placeholder="Tìm kiếm sản phẩm theo tên"
                           aria-label="Search">
                </div>

                <!-- Filter price -->
                <div class="filter price">
                    <p>
                        <label for="amount">Khoảng Giá:</label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
                    <div id="slider-range"></div>
                </div>
                <div class="category-bar" style="padding-top: 50px;">
                    <label for="category">Thể Loại</label>
                    <div class="home-care">
                        <a href="#home-care">Home Care</a>
                    </div>
                    <div class="personal-care">
                        <a href="#personal-care">Personal Care</a>
                    </div>
                </div>
            </div>
            <div class="col-9">

                {{--All Product--}}
                <div class="all-product">
                    <h3 class="h3">All Product</h3>
                    <div class="row">
                        @foreach($product as $item)
                            <div class="col-md-4 col-sm-6">
                                <div class="product-grid8">
                                    <div class="product-image8">
                                        <a href="/Detail-Products/{{$item -> id}}">
                                            <img class="pic-1 " style="height: 229.48px" src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{$item -> thumbnail }}">
{{--                                            <img class="pic-2"--}}
{{--                                                 src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{$item -> thumbnail }}">--}}
                                        </a>
                                        <ul class="social">
                                            <li><a href="/Detail-Products/{{$item -> id}}" class="far fa-eye"></a></li>
                                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="title"><a href="#">{{$item -> name}}</a></div>
                                        <h4 class="price"> {{$item -> price}} VNĐ </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
{{--                            <nav aria-label="Page navigation example">--}}
{{--                                {{$product->links()}}--}}
{{--                            </nav>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    <script>

        $('#btn-search').click(function () {
            var href = window.location.href;
            var currentPage = href.split('?')[0];
            window.location.href =  currentPage + '?name=' + $('#searchByName').val()
        });

        $('#searchByName').keypress(function (e) {
            var href = window.location.href;
            var currentPage = href.split('?')[0];
            if(e.keyCode ===13){
                window.location.href =  currentPage + '?name=' + $(this).val()
            }
        });

    </script>


@endsection()
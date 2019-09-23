@extends('client.layout')

@section('content')
    <style>
        body, h1, h2, h3, h4, h5, h6, p {
            font-family: 'Oxygen', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
            color: #ccc;
        }

        p {
            margin: 0 0 5px;
        }

        a, label {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        a:hover {
            color: #ddd;
        }

        .menu a {
            display: block;
            padding: 10px 15px;
        }

        .drop-down a {
            min-width: 90px;
        }

    </style>
    <div class="w3-content w3-margin-left-80 w3-margin-right-80">
        <div class="w3-main">
            <div class="w3-white">
                <h2 class="w3-text-gray" style="margin: 80px 0 80px 0;text-align: center">Chi Tiết Sản Phẩm</h2>
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <a href="#" id="myBtn">
                            <img src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                 alt="Snow">
                        </a>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                     alt="Snow" width="100%">
                            </div>
                        </div>
                        <div class="w3-container">
                            <div class="row w3-row-padding w3-section">
                                <div class="w3-col s3 column">
                                    <img class="myBtn"
                                         src="https://i.pinimg.com/564x/63/de/76/63de7637de6840e0371944a2d06f8d19.jpg"
                                         style="width:100%" alt="Nature">
                                    <div id="myModal" class="modal">
                                        <div class="modal-content">
                                            <img class="myBtn"
                                                 src="https://i.pinimg.com/564x/63/de/76/63de7637de6840e0371944a2d06f8d19.jpg"
                                                 style="width:100%" alt="Nature">
                                        </div>
                                    </div>
                                </div>
                                <div class="w3-col s3 column">
                                    <a href="#ex1" rel="modal:open">
                                        <img class="demo"
                                             src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                             style="width:100%" alt="Snow" onclick="myFunction(this);">
                                    </a>
                                    <div id="ex1" class="modal">
                                        <img class="demo"
                                             src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                             style="width:100%" alt="Snow" onclick="myFunction(this);">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                </div>
                                <div class="w3-col s3 column">
                                    <a href="#ex1" rel="modal:open">
                                        <img class="demo"
                                             src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                             style="width:100%" alt="Snow" onclick="myFunction(this);">
                                    </a>
                                    <div id="ex1" class="modal">
                                        <img class="demo"
                                             src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                             style="width:100%" alt="Snow" onclick="myFunction(this);">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                </div>
                                <div class="w3-col s3 column">
                                    <a href="#ex1" rel="modal:open">
                                        <img class="demo"
                                             src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                             style="width:100%" alt="Snow" onclick="myFunction(this);">
                                    </a>
                                    <div id="ex1" class="modal">
                                        <img class="demo"
                                             src="https://i.pinimg.com/564x/44/df/b6/44dfb6001522c553ee034d74b6d127a3.jpg"
                                             style="width:100%" alt="Snow" onclick="myFunction(this);">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col m6">
                        <p style="font-size: 30px;color: grey">Cọ Rửa Bình</p>
                        <div class="icon-bar" style="color: #dfde33de">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <div class="icon-bar" style="color: grey">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <br>
                        <p style="font-size: 25px;color: grey">75.000 Đồng</p>
                        <P style="color: black">Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được,
                            thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân' một cách dễ dàng.
                            Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có
                            sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên
                            có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong
                            bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi
                            bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong
                            căn nhà của bạn
                        </P>
                        <form action="/action_page.php">
                            <p style="font-size: 25px;color: grey">Số Lượng :
                                <input type="number" name="quantity" min="1" max="5" value="1"
                                       style="width: 50px;font-size: 25px">
                            </p>
                            <button type="submit" name="add-to-cart"
                                    class="w3-button w3-block w3-grey w3-hover-blue-gray w3-margin-bottom"
                                    style="border-radius: 25px">Thêm Vào Giỏ Hàng
                            </button>
                        </form>

{{--                        <div class="accordionProductContent">--}}
{{--                            <div class="w3-content">--}}
{{--                                <h1 style="text-align: center">Chi Tiết Sản Phẩm</h1>--}}
{{--                                <div class="w3-third w3-center">--}}
{{--                                    <i class="fas fa-search-plus w3-padding-64"></i>--}}
{{--                                </div>--}}
{{--                                <h5 class="w3-padding-32">TẠI SAO NHỮNG CHI TIẾT CỦA SẢN PHẨM THÂN THIỆN ĐẾN MÔI TRƯỜNG--}}
{{--                                    LẠI QUAN--}}
{{--                                    TRỌNG--}}
{{--                                    ĐỐI VỚI NGƯỜI SỬ DỤNG ĐẾN THẾ?</h5>--}}
{{--                                <p>Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm--}}
{{--                                    những sản phẩm--}}
{{--                                    đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại--}}
{{--                                    Đây xin--}}
{{--                                    giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.&nbsp;</p>--}}
{{--                                <p>&nbsp;</p>--}}
{{--                                <p>Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em--}}
{{--                                    Cọ Rửa--}}
{{--                                    Thiên Nhiên đều có thể ‘cân' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những--}}
{{--                                    nguyên liệu--}}
{{--                                    chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên--}}
{{--                                    có khả năng--}}
{{--                                    ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể--}}
{{--                                    dễ dàng xử--}}
{{--                                    lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực--}}
{{--                                    cần chà rửa--}}
{{--                                    nào trong căn nhà của bạn.&nbsp;</p>--}}
{{--                                <p>&nbsp;</p>--}}
{{--                                <p>Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn--}}
{{--                                    đầy đủ về--}}
{{--                                    thông tin sản phẩm, cũng như cách sử dụng và bảo quản.&nbsp;</p>--}}
{{--                                <p>&nbsp;</p>--}}
{{--                                <p>Cọ Rửa Bình EcoCleaner</p>--}}
{{--                                <p>Thông tin:&nbsp;</p>--}}
{{--                                <ul>--}}
{{--                                    <li><p>Thân gỗ sồi, cọ sợi Tampico.</p></li>--}}
{{--                                </ul>--}}
{{--                                <p style="font-size: 25px;color: red;text-decoration: red">HƯỚNG DẪN SỬ DỤNG:&nbsp;</p>--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <p>Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào--}}
{{--                                            thân cọ.</p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <p>Thích hợp để chà rửa bình và các loại chai lọ có đáy sâu.</p>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="container">
        <br>
        <br>
        <h2 class="h2" style="text-align: center;color: black">CÁC SẢN PHẨM KHÁC</h2>
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
                        <div class="price" style="margin-top: 20px">25,000 Đ
                            <span>17,000 Đ</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
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
                        <div class="price" style="margin-top: 20px">79,000 Đ
                            <span>75,000 Đ</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
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
                        <h3 class="title"><a href="#">Ly thông minh xếp gọn 350ml</a></h3>
                        <div class="price" style="margin-top: 20px">200,000 Đ
                            <span>160,000 Đ</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
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
                        <h3 class="title"><a href="#">REFILL Vụn xà bông organic</a></h3>
                        <div class="price" style="margin-top: 20px">400 Đ/1 Miếng
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <script>
        var accordionProduct = document.getElementsByClassName("accordionProduct");
        var i;

        for (i = 0; i < accordionProduct.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var accordionProductContent = this.nextElementSibling;
                if (accordionProductContent.style.maxHeight) {
                    accordionProductContent.style.maxHeight = null;
                } else {
                    accordionProductContent.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <script>
        AOS.init();
    </script>
@endsection
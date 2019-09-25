@extends('client.layout')
@section('content')


    <div class="videoblogmain">
        {{--        <h2 style="text-align: center">CHÚNG TA CÙNG TÌM HIỂU THỰC TRẠNG CỦA TRÁI ĐẤT HIỆN NAY</h2>--}}
        <br>
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('video/Thực trạng môi trường.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="container">
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
                    <img src="https://eco-nature.cmsmasters.net/wp-content/uploads/2014/07/04-2-o1.jpg"
                         alt="Pasta and Wine"
                         style="width:100%">
                </div>
            </div>
            <br>
        </div>
        <div class="w3-container">
            <h1 style="text-align: center">BÀI VIẾT MỚI NHẤT</h1>
            <div class="w3-row" style="margin-top: 50px">
                <div class="w3-col l8 s12">
                    @foreach($blog as $item)
                        <div class="w3-margin w3-white">
                            <img
                                    src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_600,h_320/{{$item->thumbnail}}"
                                    alt="Nature">
                            <div class="w3-container">
                                <br>
                                <h4><b>{{$item-> title}}</b></h4>
                                <span class="w3-opacity">{{$item-> updated_at}}</span>
                            </div>

                            <div class="w3-container">
                                <p>{{$item-> description}}</p>
                                <div class="w3-row">
                                    <div class="w3-col m8 s12">
                                        <p>
                                            <button class="w3-button w3-padding-large w3-white w3-border"><b>XEM THÊM »</b>
                                            </button>
                                        </p>
                                    </div>
                                    <div class="w3-col m4 w3-hide-small">
                                        <p><span class="w3-padding-large w3-right"><b>BÌNH LUẬN</b> <span
                                                        class="w3-tag">0</span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                <div class="w3-col l4">
                    <div class="w3-margin w3-margin-top">
                        <img src="http://www2.pictures.livingly.com/mp/_00932onPJdx.jpg" style="width:100%">
                        <div class="w3-container w3-white">
                            <h4><b>SỰ THẬT</b></h4>
                            <p>Các vấn đề môi trường lớn hiện tại bao gồm biến đổi khí hậu, ô nhiễm môi trường, suy
                                thoái
                                môi trường, và cạn kiệt tài nguyên thiên nhiên. Các vận động hành lang về bảo tồn nhằm
                                bảo
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
                                <img src="https://i.pinimg.com/564x/ab/4d/f7/ab4df7baabff4536e7a80182c892e9a7.jpg"
                                     alt="Image" class="w3-left w3-margin-right"
                                     style="width:50px">
                                <span class="w3-large">Lorem</span><br>
                                <span>Sed mattis nunc</span>
                            </li>
                            <li class="w3-padding-16">
                                <img src="https://i.pinimg.com/564x/7a/27/87/7a2787fd8642f06ae98a18f1bd7c6b2a.jpg"
                                     alt="Image" class="w3-left w3-margin-right"
                                     style="width:50px">
                                <span class="w3-large">Ipsum</span><br>
                                <span>Praes tinci sed</span>
                            </li>
                            <li class="w3-padding-16">
                                <img src="https://i.pinimg.com/564x/64/5f/09/645f091ada7367e1d23214f14a693657.jpg"
                                     alt="Image" class="w3-left w3-margin-right"
                                     style="width:50px">
                                <span class="w3-large">Dorum</span><br>
                                <span>Ultricies congue</span>
                            </li>
                            <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                                <img src="https://i.pinimg.com/564x/1f/bd/84/1fbd84acdf05bf0d8d7bfea26eb9b7b2.jpg"
                                     alt="Image" class="w3-left w3-margin-right"
                                     style="width:50px">
                                <span class="w3-large">Mingsum</span><br>
                                <span>Lorem ipsum dipsum</span>
                            </li>
                        </ul>
                    </div>
                    <hr>

{{--                    <div class="w3-margin">--}}
{{--                        <div class="w3-container w3-padding">--}}
{{--                            <h4>Thẻ Tên</h4>--}}
{{--                        </div>--}}
{{--                        <div class="w3-container w3-white">--}}
{{--                            <p><span class="w3-tag w3-black w3-margin-bottom"><a href="#" style="text-decoration: none">Travel</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">New York</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">London</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">IKEA</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">NORWAY</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">DIY</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Ideas</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Baby</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Family</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">News</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Clothing</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Shopping</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Sports</a></span>--}}
{{--                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="#"--}}
{{--                                                                                                style="text-decoration: none">Games</a></span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

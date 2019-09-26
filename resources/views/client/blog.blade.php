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
        <div class="w3-container">
            <h1 style="text-align: center">BÀI VIẾT MỚI NHẤT</h1>
            <div class="w3-row" style="margin-top: 50px">
                <div class="w3-col l8 s12">
                    @foreach($blog as $item)
                        <div class="w3-margin w3-white">
                            <a href="{{ route('get.blogDetail', $item->id) }}">
                                <img
                                        src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{$item->thumbnail}}"
                                        alt="Nature"
                                        style="width:100%;height: 350px;">
                            </a>
                            <div class="w3-container">
                                <br>
                                <a style="text-decoration: none" href="{{route('get.blogDetail', $item->id)}}"><h3 ><b>{{$item-> title}}</b></h3></a>
                                <span class="w3-opacity">{{$item-> updated_at}}</span>
                            </div>

                            <div class="w3-container">
                                <p>{{$item-> description}}</p>
                                <div class="w3-row">
                                    <div class="w3-col m8 s12">
                                        <p>
                                            <a style="text-decoration: none" href="{{ route('get.blogDetail', $item->id) }}">
                                                <button class="w3-button w3-padding-large w3-white w3-border"><b>XEM THÊM »</b>
                                                </button>
                                            </a>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="w3-center w3-padding-32">
                        <div class="w3-bar">
                            {{$blog->links()}}
                        </div>
                    </div>
                </div>
                <div class="w3-col l4">
                    <div class="w3-margin w3-margin-top">
                        <img src="http://www2.pictures.livingly.com/mp/_00932onPJdx.jpg" style="width:100%">
                        <div class="w3-container w3-white">
                            <h4><b>CÓ 1 SỰ THẬT LÀ</b></h4>
                            <p>Các vấn đề môi trường lớn hiện tại bao gồm biến đổi khí hậu, ô nhiễm môi trường, suy
                                thoái
                                môi trường, và cạn kiệt tài nguyên thiên nhiên. Các vận động hành lang về bảo tồn nhằm
                                bảo
                                vệ loài nguy cấp và bảo vệ bất kỳ môi trường tự nhiên có hệ sinh thái có giá trị, vấn đề
                                thực phẩm biến đổi gen và ấm lên toàn cầu.</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

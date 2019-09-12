@extends('client.layout')
@section('content')
    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: "Segoe UI",Arial,sans-serif;
            /*    Verdana, Geneva, 'DejaVu Sans', sans-serif*/
        }
        body{
            font-size: 20px;

        }


        .comment-section {
            list-style: none;
            width: 100%;
            margin: 50px auto;
            padding: 10px;
        }

        .comment {
            display: flex;
            border-radius: 3px;
            margin-bottom: 45px;
            flex-wrap: wrap;
        }

        .comment.user-comment {
            color: #808080;
        }

        .comment.author-comment {
            color: #60686d;
            justify-content: flex-end;
        }

        .comment .info {
            width: 17%;
        }

        .comment.user-comment .info {
            text-align: right;
        }

        .comment.author-comment .info {
            order: 3;
        }


        .comment .info a {
            display: block;
            text-decoration: none;
            color: #656c71;
            font-weight: bold;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            padding: 10px 0 3px 0;
        }

        .comment .info span {
            font-size: 11px;
            color: #9ca7af;
        }

        .comment .avatar {
            width: 8%;
        }

        .comment.user-comment .avatar {
            padding: 10px 18px 0 3px;
        }

        .comment.author-comment .avatar {
            order: 2;
            padding: 10px 3px 0 18px;
        }

        .comment .avatar img {
            display: block;
            border-radius: 50%;
        }

        .comment.user-comment .avatar img {
            float: right;
        }

        .comment p {
            line-height: 1.5;
            padding: 18px 22px;
            width: 65%;
            position: relative;
            word-wrap: break-word;
        }

        .comment.user-comment p {
            background-color: #f3f3f3;
        }

        .comment.author-comment p {
            background-color: #e2f8ff;
            order: 1;
        }

        .user-comment p:after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 2px solid #f3f3f3;
            left: -8px;
            top: 18px;
        }

        .author-comment p:after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 2px solid #e2f8ff;
            right: -8px;
            top: 18px;
        }

        .write-new {
            margin: 80px auto 0;
            width: 50%;
        }

        .write-new textarea {
            color: #444;
            font: inherit;

            outline: 0;
            border-radius: 3px;
            border: 1px solid #cecece;
            background-color: #fefefe;
            box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.06);
            overflow: auto;

            width: 100%;
            min-height: 80px;
            padding: 15px 20px;
        }

        .write-new img {
            border-radius: 50%;
            margin-top: 15px;
        }

        .write-new button {
            float: right;
            background-color: #87bae1;
            box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.12);
            border-radius: 2px;
            border: 0;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;

            padding: 10px 25px;
            margin-top: 18px;
        }


        @media (max-width: 800px) {
            .comment p {
                width: 100%;
            }

            .comment.user-comment .info {
                order: 3;
                text-align: left;
            }

            .comment.user-comment .avatar {
                order: 2;
            }

            .comment.user-comment p {
                order: 1;
            }

            .comment.author-comment {
                justify-content: flex-start;
            }


            .comment-section {
                margin-top: 10px;
            }

            .comment .info {
                width: auto;
            }

            .comment .info a {
                padding-top: 15px;
            }

            .comment.user-comment .avatar,
            .comment.author-comment .avatar {
                padding: 15px 10px 0 18px;
                width: auto;
            }

            .comment.user-comment p:after,
            .comment.author-comment p:after {
                width: 12px;
                height: 12px;
                top: initial;
                left: 28px;
                bottom: -6px;
            }

            .write-new {
                width: 100%;
            }
        }

    </style>
    <div>
        <img class="mySlides" src="{{ asset('/img/blog/cover1.jpg') }}" style="width:100%">
    </div>
    <div class="w3-display-left w3-text-white" style="padding:22rem">
        <h4 style="text-align: center"><b>NĂM ĐIỀU ĐƠN GIẢN CHO CUỘC SỐNG XANH HƠN</b>
        </h4>
        <p class="w3-opacity" style="text-align: center">11-9-2019, 20h20</p>
        <p class="w3-opacity" style="text-align: center">Updated: 29-9-2019</p>
    </div>
    <div class="container">

        <div class="w3-content" style="margin-top: 115px;max-width:1100px;margin-bottom:80px">
            <div class="w3-container" data-aos="fade-up">
                <p><b>Không cần làm những điều lớn lao, bạn có thể bảo vệ môi trường bằng những việc làm nhỏ của riêng
                        mình, đơn giản thôi nhưng lại rất hiệu quả.</b></p>
            </div>
            <br>
            <br>
            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5><b>Sử dụng túi vải </b></h5>
                <p>Một chiếc túi vải có thể đựng được gì? Tất cả mọi thứ. Gấp gọn một chiếc túi vải vào rồi bất kể đi
                    đâu, mua gì bạn cũng có thể đựng trong đó mà không cần sử dụng bao nilon - những thứ mất cả trăm năm
                    mới có thể phân huỷ. Chỉ cần giặt sạch sẽ là bạn có thể dùng đi dùng lại một chiếc túi vải cho đến
                    khi rách thì thôi. Chỉ cần 1 mình bạn áp dụng cái này thôi thì 1 năm đã giảm được bao nhiêu cái túi
                    nilon không cần thiết rồi đấy</p>
                <br>
                <h1><img alt=""
                         src="https://vnn-imgs-f.vgcloud.vn/2018/08/15/15/5-dieu-don-gian-cho-cuoc-song-xanh-hon.jpg"
                         width="410"
                         height="333" style="margin: auto; display: block;"></h1>
                <p>Sử dụng túi vải hay loại túi nào dùng được nhiều lần và có thể phân hủy thay cho túi nilon để góp
                    phần bảo vệ môi trường</p>
            </div>
            <br>


            <div class="content" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5><b>Thay thế các lựa chọn của bạn trong bếp</b></h5>
                <p> Thay vì dùng ống hút nhựa, chúng ta có thể chuyển sang sử dụng các loại ống hút cỏ, ống hút giấy,
                    ống hút thủy tinh hoặc ống hút kim loại. Hoặc các sản phẩm từ tre như ống hút, bàn chải, bút viết,
                    các sản phẩm từ dừa như thìa dừa, bát gáo dừa… Những sản phẩm này có thể tái sử dụng nhiều lần và
                    được sản xuất hoàn toàn tự nhiên.</p>

                <p> Ngoài ra, chúng ta có thể thay thế các hộp nhựa đựng thức ăn, màng bọc thực phẩm bằng các hộp đựng
                    bằng thủy tinh. Các hộp thủy tinh không chỉ đẹp hơn mà còn rất bền. Việc thay thế các dụng cụ bằng
                    nhựa và chuyển sang sử dụng vật dụng nhà bếp bằng gỗ, bằng tre, bằng sứ, bằng thủy tinh,… không chỉ
                    bảo vệ môi trường mà những vật liệu này khi nấu nướng hay ăn uống cũng tốt hơn cho sức khỏe.</p>
                <h1><img alt=""
                         src="https://vnn-imgs-f.vgcloud.vn/2018/08/15/15/5-dieu-don-gian-cho-cuoc-song-xanh-hon-1.jpg"
                         width="410"
                         height="333" style="margin: auto; display: block;"></h1>
                <p>Sử dụng ống hút bằng tre hay vật dụng nhà bếp bằng thủy tinh thay thế các dụng cụ bằng nhựa </p>
            </div>
            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5><b>Tái tạo rác hữu cơ thành phân xanh</b></h5>
                <p>Hẳn ai cũng sẽ có một vườn cây nho nhỏ ở nhà, ngoài ban công, trên sân thượng… Chúng ta có thể tận
                    dụng các loại rác hữu cơ như vỏ củ quả, lá úa, lá sâu để ủ thành phân xanh cho khu vườn của
                    mình.</p>
                <br>
                <h1><img alt=""
                         src="https://vnn-imgs-f.vgcloud.vn/2018/08/15/15/5-dieu-don-gian-cho-cuoc-song-xanh-hon-2.jpg"
                         width="410"
                         height="333" style="margin: auto; display: block;"></h1>
                <p>Sống ở thành phố, hầu hết mọi người đựng rác trong túi nilon, sau đó sẽ có công nhân vệ sinh đến gom
                    rác, và số rác này sẽ chất đống hoặc được chôn ở đâu đó. Nếu chúng ta tận dụng rác hữu cơ làm phân
                    xanh thì số lần vứt rác cũng như số túi nilon sẽ được giảm thiểu.</p>
            </div>

            <br>
            <div class="content" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5><b>Hạn chế chai nước dùng một lần</b></h5>
                <h1><img alt=""
                         src="        https://resource.co/sites/default/files/bottled-water-plastic.jpg"
                         width="410"
                         height="333" style="margin: auto; display: block;"></h1>

                <p> Ngày nay, những chai nước nhựa dùng 1 lần vừa tiện, vừa rẻ với đủ mọi mẫu mã, kiểu dáng xuất hiện
                    khắp nơi. Người ta vì cái sự tiện ấy mà bỏ qua thói quen mang chai nước cá nhân bên mình vì “vướng
                    víu”. Nên nhớ, mỗi chai nhựa có thể mất khoảng 1000 năm để phân hủy hoàn toàn</p>

                <p> Cách đơn giản mà ai cũng có thể làm là hãy mua những loại chai sử dụng được nhiều lần, và tập cho
                    mình thói quen tự mang những chai nước này khi hoạt động ngoài trời, khi đi du lịch hay đi chơi.</p>
                <br>
            </div>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5><b>Sử dụng khăn bông thân thiện với môi trường</b></h5>
                <h1><img alt=""
                         src="https://vnn-imgs-f.vgcloud.vn/2018/08/15/15/5-dieu-don-gian-cho-cuoc-song-xanh-hon-3.jpg"
                         width="410"
                         height="333" style="margin: auto; display: block;"></h1>
                <p> Khăn bông là vật dụng thiết yếu được sử dụng thường xuyên trong mỗi gia đình. Hãy bắt đầu thay đổi
                    thói quen từ việc lựa chọn chiếc khăn bông để bảo vệ làn da và sức khỏe của chúng ta. Bạn có thể sử
                    dụng khăn bông có nguyên liệu sợi bông hữu cơ, quá trình sản xuất nói không với thành phần biến đổi
                    gen, phân bón hóa học, thuốc bảo vệ thực vật, chất kích thích tăng trưởng, chất phụ gia, chất tẩy
                    trắng, chất tạo mùi, chất bảo quản… để đảm bảo an toàn tuyệt đối cho sức khỏe. Ngoài ra, khăn bông
                    hữu cơ còn có khả năng tự phân hủy ngoài môi trường tự nhiên, là sản phẩm rất thân thiện với môi
                    trường.</p>

                <p> Còn rất nhiều việc nhỏ khác mà chúng ta có thể làm cho trái đất. Chỉ cần chúng ta có ý thức bảo vệ
                    môi trường và tìm hiểu những nguyên nhân cụ thể, chúng ta sẽ ngay lập tức tìm được giải pháp trong
                    chính cuộc sống hàng ngày.</p>
            </div>

            <hr>
            <br>
            <br>

            <p style="text-align: right">Credit by: Bachs Lương</p>
            <p style="text-align: right;text-decoration: underline">#fornow#fortoday#forfuture</p>
            <p style="text-align: right;text-decoration: underline">#metoo#greenday#greenearth</p>
            <p style="text-align: right;text-decoration: underline">#recyclearth#fighting#livingfortomorow</p>
        </div>
    </div>


    <h3 style="text-align: center">BÌNH LUẬN</h3>

    <ul class="comment-section">

        <li class="comment user-comment">

            <div class="info">
                <a href="#">Anie Silverston</a>
                <span>4 hours ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="{{ asset('video/avatar_user_1.jpg') }}" width="35" alt="Profile Avatar"
                     title="Anie Silverston"/>
            </a>

            <p>Suspendisse gravida sem?</p>

        </li>

        <li class="comment user-comment">

            <div class="info">
                <a href="#">Jack Smith</a>
                <span>3 hours ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="{{ asset('video/avatar_user_2.jpg') }}" width="35" alt="Profile Avatar" title="Jack Smith"/>
            </a>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida sem sit amet molestie
                portitor.</p>

        </li>

        <li class="comment user-comment">

            <div class="info">
                <a href="#">Bradley Jones</a>
                <span>1 hour ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="{{ asset('video/avatar_user_1.jpg') }}" width="35" alt="Profile Avatar"
                     title="Bradley Jones"/>
            </a>

            <p>Suspendisse gravida sem sit amet molestie portitor?</p>

        </li>

        <li class="comment author-comment">

            <div class="info">
                <a href="#">Jack Smith</a>
                <span>1 hour ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="{{ asset('video/avatar_author.jpg') }}" width="35" alt="Profile Avatar" title="Jack Smith"/>
            </a>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisee gravida sem sit amet molestie
                porttitor.</p>

        </li>

        <li class="comment author-comment">

            <div class="info">
                <a href="#">Jack Smith</a>
                <span>1 hour ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="{{ asset('video/avatar_user_1.jpg') }}" width="35" alt="Profile Avatar" title="Jack Smith"/>
            </a>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisee gravida sem sit amet molestie
                porttitor.</p>

        </li>

        <li class="comment author-comment">

            <div class="info">
                <a href="#">Jack Smith</a>
                <span>1 hour ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="{{ asset('video/avatar_user_1.jpg') }}" width="35" alt="Profile Avatar" title="Jack Smith"/>
            </a>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisee gravida sem sit amet molestie
                porttitor.</p>

        </li>

        <li class="write-new">

            <form action="#" method="post">

                <textarea placeholder="Write your comment here" name="comment"></textarea>

                <div>
                    <img src="{{ asset('video/avatar_user_1.jpg') }}" width="35" alt="Profile of Bradley Jones"
                         title="Bradley Jones"/>
                    <button type="submit">Submit</button>
                </div>

            </form>

        </li>

    </ul>
@endsection

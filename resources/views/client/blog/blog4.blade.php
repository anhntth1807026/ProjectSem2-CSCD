@extends('client.layout')
@section('content')
    <style>
        body, h1, h2, h3, h4, h5 {
            /*font-family: "Segoe UI",Arial,sans-serif;*/
            /*!*    Verdana, Geneva, 'DejaVu Sans', sans-serif*!*/
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
        <img class="" src="{{ asset('/img/blog/cover1.jpg') }}" style="width:100%;margin-left: 132px;margin-right: 132px">
    </div>
    <div class="w3-display-left w3-text-white" style="padding:22rem;margin-left: 200px">
        <h4 style="text-align: center "><b>SỐNG XANH CÓ THỰC SỰ KHÓ NHƯ BẠN NGHĨ?</b>
        </h4>
        <p class="w3-opacity" style="text-align: center">11-9-2019, 20h20</p>
        <p class="w3-opacity" style="text-align: center">Updated: 29-9-2019</p>
    </div>
    <div class="container">

        <div class="w3-content" style="margin-top: 115px;max-width:1100px;margin-bottom:80px">
            <div class="w3-container" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h1><img alt="Song xanh co that su kho nhu ban nghi? hinh anh 2 "
                         src="https://znews-photo.zadn.vn/w1024/Uploaded/gtnzjz/2019_03_19/cover.jpg" width="610"
                         height="483" style="margin: auto; display: block;" data-aos="zoom-out"></h1>
                <p>Tháng 2/2018, tôi vô tình xem đoạn video dài gần 10 phút trên YouTube, quay lại cảnh các chuyên gia
                    rút một vật thể từ chiếc mũi của rùa.</p>

                <p> Chú rùa đau đớn đến mức khi các nhà nghiên cứu cố gắng rút chiếc ống và chú đã nhiều lần rụt đầu lại
                    như thể "xin cám ơn, đừng rút nữa, đau lắm".
                </p>
                <p> Máu chảy ra từ hốc mũi nhưng không có thuốc gây tê để giảm đau. Thậm chí chú còn kêu la thảm thiết
                    sau mỗi lần chuyên gia dùng lực rút chiếc ống ra ngoài.</p>

                <p> Các bạn có đoán được chiếc ống đó là gì không?</p>

                <p> Ống hút nhựa chúng ta sử dụng hàng ngày đó.</p>

                <p> Mỗi sáng tỉnh dậy, bạn dùng bàn chải, kem đánh răng, sữa rửa mặt, toner, dưỡng ẩm,...</p>

                <p> Bạn biết nó được làm từ gì không? Nhựa đấy!</p>

                <p> Tất cả những món ấy khi thải ra môi trường sẽ huỷ hoại biết bao sinh vật biển, biến đại dương thành
                    bãi rác khổng lồ và thu hẹp diện tích sống của con người.</p>

                <p> Tôi không ngờ một vật vô tri vô giác được xem tiện lợi với con người lại ảnh hưởng đến các sinh vật
                    biển như thế.</p>

                <p> Vậy nên tôi đã quyết định thay đổi.</p>

                <p> Tháng 3/2018, tôi bắt đầu hành trình sống xanh.</p>

                <p> Mang túi vải khi đi siêu thị, chuyển đổi ống hút, ly tách bằng các sản phẩm làm từ inox hoặc tre,
                    hạn chế mua các loại nước uống đóng chai, thay bằng một chiếc bình inox chứa đầy nước.</p>

                <p> Nhiều người bảo, khát thì vào cửa hàng tiện lợi mua, uống xong thì vứt chai, không cần phải mang
                    theo bên người. "Bởi đó là hành động rườm rà, bất tiện và kém sang", họ nói.</p>

                <p> Đúng là việc hạn chế dùng đồ nhựa thật khó. Nhưng tôi vẫn quyết tâm thay đổi để không còn thấy những
                    cảnh đau lòng tương tự như chú rùa biển gặp phải.</p>

                <p> Có thể bạn chưa biết, trung bình mỗi ngày, mỗi người Việt Nam thải ra 1,2kg rác. Nếu làm tròn dân số
                    Việt Nam là 100 triệu người, thì số lượng rác thải là 120.000 tấn mỗi ngày.</p>

                <p> Trong số đó, 16% là rác thải nhựa, vị chi mỗi ngày sẽ có gần 19.000 tấn rác thải nhựa bị thải ở Việt
                    Nam và chủ yếu là đi ra đại dương. Và những rác thải nhựa này sẽ đi vào cơ thể bạn bất kỳ lúc nào
                    khi bạn ăn phải những loài sinh vật dưới biển bị ô nhiễm.</p>
            </div>
            <hr>

            <br>
            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h3 id="aui_3_2_0_1118"><img alt="Song xanh co that su kho nhu ban nghi? hinh anh 4 "
                                             src="https://znews-photo.zadn.vn/w1024/Uploaded/gtnzjz/2019_03_19/tit1.jpg"
                                             width="360" height="155" style="margin: auto; display: block;" data-aos="flip-down"
                                             data-aos-easing="ease-out-cubic"
                                             data-aos-duration="2000"></h3>

                <p> Điều đầu tiên, tôi hạn chế mua những sản phẩm đóng gói và luôn mang theo túi vải khi đi chợ, siêu
                    thị.</p>

                <p> Ít ai biết những chiếc túi được gắn mác "thân thiện với môi trường" ở các trung tâm thương mại thực
                    chất là được làm từ nhựa và phụ gia phân huỷ, sau khi phụ gia tan rã thì nhựa vẫn ở lại. Và cho có
                    "thân thiện" đến mức nào nhưng việc chỉ dùng một lần thì thật sự quá lãng phí.</p>

                <p> Điều thứ hai, tôi chọn mua những sản phẩm có thể refill (làm đầy) sau khi hết. Nó sẽ hạn chế việc
                    thải đi những chai lọ dùng một lần.</p>

                <p> Hiện nay, có vô số cửa hàng cho phép bạn refill sản phẩm với giá thành rẻ hơn khi mua chai lọ mới.
                    Ví dụ điển hình là nước giặt, nước xả vải. Các hãng thường tung ra các sản phẩm đóng gói trong túi
                    với giá thành rẻ hơn để khuyến khích người dùng sử dụng lại chai lọ trước đó.</p>

                <p> Bạn cũng có thể tìm đến một số cửa hàng mà ở khi tới chỉ cần mang theo vật cụ để đựng và đổ đầy
                    chúng mà không phải thải ra bất kì bao bì nhựa nào.</p>

                <p> Điều tiếp theo, hạn chế mua những món đồ mà mình không thật sự cần thiết, đặc biệt là quần áo.</p>

                <p> Trong tủ quần áo của tôi chỉ có vài chiếc áo thun, áo sơmi đơn giản, một chiếc quần jeans và quần
                    tây đen.</p>

                <p> Bên cạnh việc tiết kiệm chi phí mua sắm, điều này còn giúp tôi không phải nhức đầu khi phải lựa chọn
                    quần áo.</p>

                <img alt="Song xanh co that su kho nhu ban nghi? hinh anh 6 "
                     src="https://znews-photo.zadn.vn/w1024/Uploaded/gtnzjz/2019_03_19/anh_phan_1.jpg" width="610"
                     height="483" style="margin: auto; display: block;" data-aos="zoom-out">

                <p> Một điều tôi học được là khi mọi thứ ít đi, bạn sẽ chăm chút, bảo quản chúng tỉ mỉ hơn. Trong khi
                    đó, nếu có nhiều áo quần, mọi người sẽ có tâm lý sử dụng lãng phí, sơ sài và nhanh chóng vứt đi khi
                    nghĩ rằng không còn phù hợp.</p>

                <p> Đối với các tín đồ shopping thì điều này thật khó khăn. Tôi từng như họ và đã tìm được một cách.
                    Trước khi mua một món đồ mới, tôi luôn tự hỏi: Ở nhà mình có chưa? Thật sự mình có cần không? Mình
                    sẽ xài chúng được bao nhiêu lần? Những câu hỏi này đã giúp tôi khước từ việc dạo chơi ở các trung
                    tâm thương mại, và mang về những túi to, túi nhỏ đầy ắp các sản phẩm không cần thiết.</p>

                <p> Lối sống xanh giúp tôi tiết kiệm chi phí trong hơn 1 năm qua. Và điều quan trọng hơn, lượng đồ nhựa
                    mà tôi thải ra được giảm một cách đáng kể.</p>

                <p> Tôi đã từ bỏ thói quen ăn các thực phẩm được chứa trong các hộp nhựa. Việc này đã giúp tôi thoát
                    khỏi các căn bệnh về tiêu hoá và hô hấp. Từ đó, thần thái, da vẻ cũng trở nên tươi tắn và khoẻ khoắn
                    hơn.</p>

                <p> Những lần đầu thực hiện lối sống xanh, bạn bè bảo tôi giống cụ già khó tính, khi lúc nào cũng lỉnh
                    kỉnh đồ bên người.</p>

                <p> Nhưng một lần, hai lần, ba lần và dần đám bạn quen được việc không sử dụng đồ nhựa của tôi. Những
                    lần sau, mỗi lần tụ tập đi chơi mọi người đều chọn những nơi không có đồ nhựa. Thậm chí, các bạn còn
                    tự trang bị ống hút inox và bình cá nhân.</p>

                <p> Không chỉ nhận những lời trêu chọc từ bạn bè. Những lần đầu từ chối túi nylon, người bán hàng tỏ vẻ
                    ngạc nhiên và nghĩ rằng tôi làm màu. Sau đó, khi giải thích về tác hại của việc sử dụng đồ nhựa một
                    lần, họ tỏ ra vui vẻ và hài lòng. Cô bán rau bảo: "Làm vậy là hợp lý đó con, chứ nhiều người xin
                    thêm túi rồi về cũng vứt, vừa lãng phí lại còn hại cho sức khoẻ."</p>

                <p> Mẹ tôi phần nào ảnh hưởng lối sống không dùng nhựa một lần của con trai. Mẹ đi chợ thường xuyên mang
                    theo giỏ xách và rủ rê thêm các cô hàng xóm thực hiện cùng để bảo vệ sức khoẻ gia đình khỏi tác hại
                    của nhựa.</p>
            </div>
            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h3><img alt="Song xanh co that su kho nhu ban nghi? hinh anh 5 " style="margin: auto; display: block;"
                         src="https://znews-photo.zadn.vn/w1024/Uploaded/gtnzjz/2019_03_19/tit2.jpg" width="360"
                         height="155" style="margin: auto; display: block;" data-aos="flip-down"
                         data-aos-easing="ease-out-cubic"
                         data-aos-duration="2000"></h3>
                <p> Nếu bạn thật sự quan tâm đến sức khoẻ của bản thân, gia đình thì hãy đọc tiếp đoạn sau đây, bởi tôi
                    sẽ hướng dẫn một tips nhỏ nhưng cực kỳ hữu ích. Đó là phân loại rác.</p>

                <p> Thứ nhất, phân loại rác là gì? Rác sẽ được chia thành 3 nguồn chính: rác hữu cơ, rác vô cơ, rác tái
                    chế.</p>

                <p> Rác hữu cơ là những thực phẩm bỏ đi, chúng sẽ tự phân huỷ.</p>

                <p> Rác vô cơ là những loại chỉ sử dụng được một lần.</p>

                <p> Và cuối cùng, rác tái chế là những bao bì có thể tái sử dụng.</p>

                <p> Việc của bạn là nên hạn chế tất cả các loại rác, đặc biệt là rác vô cơ và tái chế.</p>

                <p> Điều thứ hai bạn nên làm là trang bị những ly tách bằng inox hoặc thuỷ tinh có thể dùng lại nhiều
                    lần. Chúng không chỉ giúp bảo vệ môi trường mà còn ngăn được các bệnh lây qua đường ăn uống.</p>

                <p> Tôi biết rất nhiều hàng quán khuyến khích người dùng mang theo ly của mình bằng cách giảm giá đồ
                    uống. Bạn vừa giảm được nhựa thải ra, vừa tiết kiệm tiền, một công đôi chuyện.</p>

                <p> Điều cuối cùng, hãy tái sử dụng những vật dụng bỏ đi. Chẳng hạn như bình đựng nước bị mất nắp biến
                    thành lọ hoa xinh xắn, chai nhựa bỏ đi tận dụng làm ống đựng bút dễ thương</p>

                <p> Các chuyên gia môi trường cảnh báo, lượng nhựa dưới biển hiện tại ước tính khoảng 150 triệu tấn, xấp
                    xỉ 1/5 khối lượng cá. Với tốc độ sản xuất và tiêu dùng nhựa như hiện tại, khối lượng nhựa sẽ vượt cá
                    năm 2050.</p>

                <p> Không chỉ ảnh hướng đến cách sinh vật biển mà nhựa còn ảnh hưởng đến sức khoẻ của con người.</p>

                <p> Theo các nghiên cứu, trong các vật dụng nhựa sử dụng hàng ngày có chứa chất melamin cao gấp 8 lần so
                    với đồ sứ. Đây là nguyên nhân gây ra các bệnh như ung thư, vô sinh hay dậy thì sớm.</p>
                <br>
                <img alt="Song xanh co that su kho nhu ban nghi? hinh anh 6 "
                     src="https://znews-photo.zadn.vn/w1024/Uploaded/gtnzjz/2019_03_19/anh_phan_2.jpg" width="610"
                     height="483" style="margin: auto; display: block;" data-aos="zoom-out">
                <br>
                <p>Giảm nhựa không hẳn là phải đi mua một chiếc túi vải mới trong khi nhà bạn có rất nhiều túi đang vứt
                    lăn lóc.</p>

                <p> Trước khi mua một món đồ nào đó, tôi đều tự kiểm tra lại xem nhà mình đã có chưa và không mua vội.
                    Vì có thể bạn bè sẽ dư một vài chiếc túi, chai lọ cần thì có thể hỏi xin. Tôi chỉ mua khi cảm thấy
                    chúng thật sự cần thiết và không mua vì cao hứng hay phong trào.</p>

                <p> Tôi nghĩ điều quan trọng nhất của việc bảo vệ môi trường là giảm bớt lượng rác thải chứ không hẳn là
                    chỉ giảm nhựa.</p>

                <p> Ngoài ra, theo tôi việc giảm khí thải cũng rất cần thiết. Khi tình trạng ô nhiễm ở các thành phố lớn
                    đang ở mức báo động. Tại Hà Nội, nồng độ bụi đo được cao gấp nhiều lần so với các tiêu chuẩn đề ra.
                    Không khí ô nhiễm nặng nề hơn vào giờ tan tầm, khi các phương tiện cá nhân "đua nhau" về nhà sau một
                    ngày dài.</p>

                <p> Để giảm bụi bẩn và khí thải từ xe cộ vào giờ cao điểm, cách duy nhất là dùng các phương tiện công
                    cộng. Tôi đã xung phong đi làm bằng xe buýt một vài ngày trong tuần.</p>

                <p> Đi xe buýt không những giúp tôi giảm được chi phí đi lại, bảo vệ mình trước những ô nhiễm của môi
                    trường mà còn rèn luyện cho đôi chân khoẻ hơn bằng thói quen đi bộ hàng ngày từ nhà ra trạm xe
                    buýt.</p>

                <p> Tôi cũng dần tập thói quen đi bộ khi di chuyển trong khoảng cách gần.</p>

                <p> Đối với nhiều người, xe buýt không phải là giải pháp phù hợp để có thể thay thế cho xe máy. Khi
                    phương tiện công cộng ở nước ta chưa phát triển và người Việt chưa có thói quen đi bộ.</p>

                <p> Với sự phát triển của tàu điện trong tương lai, tôi nghĩ mọi người sẽ mặn mà hơn với các phương tiện
                    công cộng và đẩy lùi được nhiều vấn đề về môi trường mà các đô thị lớn đang gặp phải.</p>

                <p> Sống xanh không hề khó, cái khó nhất là bắt đầu nghĩ tới nó và bắt tay vào thực hiện. Một khi đã
                    quyết tâm, thì chút bất tiện hay mất công cũng có sao đâu.</p>
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


    <ul class="comment-section">
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

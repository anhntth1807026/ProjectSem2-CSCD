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
        <h4 style="text-align: center"><b>THỰC TRẠNG Ô NHIỄM MÔI TRƯỜNG Ở VIỆT NAM <br> CÁC GIẢI PHÁP KHẮC PHỤC.</b>
        </h4>
        <p class="w3-opacity" style="text-align: center">12-9-2019, 15h30</p>
        <p class="w3-opacity" style="text-align: center">Updated: 24-9-2019</p>
    </div>
    <div class="container">
        <div class="w3-content" style="margin-top: 115px;max-width:1100px;margin-bottom:80px">
            <div class="w3-container" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <p>Hiện nay, vấn đề ô nhiễm môi trường đang là chủ đề nóng trên các mặt báo và nhận được rất nhiều sự quan
                    tâm của người dân. Trong đó, đặc biệt là vấn đề ô nhiễm nguồn nước ở Việt Nam đã và đang ngày càng trở
                    nên nghiêm trọng hơn. Thông qua các phương tiện truyền thông, chúng ta có thể dễ dàng thấy được các hình
                    ảnh, cũng như các bài báo phản ánh về thực trạng môi trường hiện nay. Mặc dù các ban ngành, đoàn thể ra
                    sức kêu gọi bảo vệ môi trường, bảo vệ nguồn nước,... nhưng có vẻ là chưa đủ để cải thiện tình trạng ô
                    nhiễm ngày càng trở nên trầm trọng hơn.</p>
                <br>
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <div><h4>Thực trạng ô nhiễm môi trường ở Việt Nam đang rất nghiêm trọng</h4>
                            <p>
                                Tình trạng quy hoạch các khu đô thị chưa gắn liền với vấn đề xử lý chất thải, xử lý nước
                                thải, vẫn còn
                                tồn đọng nên tại các thành phố lớn, các khu công nghiệp, khu đô thị, ô nhiễm môi trường
                                đang ở mức báo
                                động...
                            </p>
                        </div>
                    </div>
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large"
                             src="{{ asset('/img/blog/pollution.jpeg') }}"
                             alt="Buildings" width="800" height="452"  data-aos="zoom-in">
                    </div>
                </div>
                <br>
                <br>
                <p>
                    Theo ước tính, trong tổng số 183 khu công nghiệp trong cả nước thì có trên 60% khu
                    công nghiệp
                    chưa có hệ thống xử lý nước thải tập trung. Tại các đô thị, chỉ có khoảng 60% - 70% chất
                    thải rắn được
                    thu gom, cơ sở hạ tầng thoát nước và xử lý nước thải, chất thải nên chưa thể đáp ứng được
                    các yêu cầu về
                    bảo vệ môi trường. Hầu hết lượng nước thải bị nhiễm dầu mỡ, hóa chất tẩy rửa, hóa phẩm
                    nhuộm,... chưa
                    được xử lý đều đổ thẳng ra các sông, hồ tự nhiên. Một ví dụ đã từng được dư luận quan tâm
                    thì trường hợp
                    sông Thị Vải bị ô nhiễm bởi hóa chất thải ra từ nhà máy của công ty bột ngọt Vedan suốt 14
                    năm liền.
                </p>
                <br>
            </div>

            <hr>
            <br>

            <div class="content" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h3><b>Các nguyên nhân gây ra tình trạng ô nhiễm môi trường hiện nay</b></h3>
                <h4>Ý thức của người dân</h4>
                <p>Đầu tiên, đó chính là sự thiếu ý thức nghiêm trọng và thờ ơ của người dân. Nhiều người cho rằng những
                    việc mình làm là quá nhỏ bé, không đủ để làm hại môi trường. Một số người lại cho rằng việc bảo vệ môi
                    trường là trách nhiệm của nhà nước, của các cấp chính quyền...trong khi số khác lại nghĩ rằng việc môi
                    trường đã bị ô nhiễm thì có làm gì cũng "chẳng ăn thua", và ô nhiễm môi trường cũng không ảnh hưởng đến
                    mình nhiều. Và chính những suy nghĩ này sẽ ảnh hưởng không nhỏ đến việc giáo dục cũng như tư duy bảo vệ
                    môi trường của các thế hệ trẻ về sau.</p>
                <br>
                <div>
                    <img class="w3-image w3-round-large"
                         src="{{ asset('/img/blog/pollution2.jpeg') }}"
                         alt="" width="1100" height="652"  data-aos="zoom-in">
                </div>
                <br>
                <br>
                <p>Người dân thờ ơ và thiếu ý thức trong việc bảo vệ môi trường, khó làm gương cho trẻ em</p>
                <br>
                <p>Thật vậy, người lớn không làm gương để giáo dục trẻ em. Theo quan sát, tại các trường học, chúng tôi
                    nhiều lần chứng kiến phụ huynh đưa con đi học đến cổng trường dừng lại ăn sáng và sau khi ăn xong, thay
                    vì bỏ hộp xôi, hộp bánh vào thùng rác thì họ lại vứt ngay tại chỗ. Mặc dù, các trường học có treo rất
                    nhiều tấm biến, khẩu hiệu cấm xả rác bừa bãi nhưng phụ huynh vẫn thản nhiên xả rác nơi công cộng thì rất
                    khó hình thành ý thức tốt cho thế hệ trẻ.</p>
                <br>
                <p>Thật vậy, người lớn không làm gương để giáo dục trẻ em. Theo quan sát, tại các trường học, chúng tôi
                    nhiều lần chứng kiến phụ huynh đưa con đi học đến cổng trường dừng lại ăn sáng và sau khi ăn xong, thay
                    vì bỏ hộp xôi, hộp bánh vào thùng rác thì họ lại vứt ngay tại chỗ. Mặc dù, các trường học có treo rất
                    nhiều tấm biến, khẩu hiệu cấm xả rác bừa bãi nhưng phụ huynh vẫn thản nhiên xả rác nơi công cộng thì rất
                    khó hình thành ý thức tốt cho thế hệ trẻ.</p>
            </div>
            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h4>Các doanh nghiệp thiếu trách nhiệm, quan liêu, thiếu chặt chẽ</h4>
                <p>Nguyên nhân thứ hai gây ra ô nhiễm môi trường chính là sự thiếu trách nhiệm của các doanh nghiệp. Do đặt
                    nặng mục tiêu tối đa hóa lợi nhuận, không ít doanh nghiệp đã vi phạm quy trình khai thác, góp phần gây ô
                    nhiễm môi trường đáng kể.</p>
                <br>
                <div>
                    <img class="w3-image w3-round-large"
                         src="{{ asset('/img/blog/pollution3.jpeg') }}"
                         alt="" width="1100" height="652"  data-aos="zoom-in">
                </div>
                <br>
                <br>
                <p>Mặt khác, hệ thống xử lý nước thải tại một số khu công nghiệp chưa hoạt động hiệu quả, nước thải sinh
                    hoạt bị ô nhiễm được thải liên tục ra sông, hồ gây nhiễm độc nguồn nước tự nhiên.</p>
                <br>
                <p>Bên cạnh đó, chính sự quan liêu, thiếu chặt chẽ trong công tác quản lý bảo vệ môi trường của nhà nước
                    cũng đang tiếp tay cho hành vi phá hoại môi trường.</p>
                <br>
                <p>Ngoài ra, lượng xe cộ lưu thông ngày càng nhiều ở nước ta cũng góp phần không nhỏ vào việc gây ô nhiễm
                    bầu không khí.</p>
            </div>
            <br>

            <div class="content" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h4>Những hạn chế, bất cập trong bảo vệ môi trường</h4>
                <p>Theo thống kê của Bộ Tư Pháp, hiện nay có khoảng 300 văn bản pháp luật về bảo vệ môi trường để điều chỉnh
                    hành vi của các cá nhân, tổ chức, các hoạt động kinh tế, các quy trình kỹ thuật, quy trình sử dụng
                    nguyên liệu trong sản xuất,... Tuy nhiên, hệ thống các văn bản này vẫn còn chưa hoàn thiện, thiếu đồng
                    bộ, thiếu chi tiết, tính ổn định không cao, tình trạng văn bản mới được ban hành chưa lâu đã phải sửa
                    đổi, bổ sung là khá phổ biến, từ đó làm hạn chế hiệu quả điều chỉnh hành vi của các cá nhân, tổ chức,
                    các hoạt động kinh tế... trong việc bảo vệ môi trường.</p>
                <br>
                <div>
                    <img class="w3-image w3-round-large"
                         src="{{ asset('/img/blog/pollution4.jpeg') }}"
                         alt="" width="1100" height="652"  data-aos="zoom-in">
                </div>
                <br>
                <br>
                <p>Một bức ảnh nhỏ nhưng cho thấy tình trạng ô nhiễm môi trường ở Việt Nam ô nhiễm đến mức nào. </p>
                <br>
                <p>Quyền hạn pháp lý của các tổ chức bảo vệ môi trường, nhất là của lực lượng Cảnh sát môi trường chưa thực
                    sự đủ mạnh, nên đã hạn chế hiệu quả hoạt động nắm tình hình, phát hiện, ngăn chặn các hành vi vi phạm về
                    bảo vệ môi trường. Các cơ sở pháp lý, chế tài xử phạt đối với các loại hành vi gây ô nhiễm môi trường về
                    các loại tội phạm còn hạn chế chưa đủ mạnh. Cụ thể, có rất ít trường hợp gây ô nhiễm môi trường bị xử lý
                    hình sự, còn các biện pháp xử lý khác như: buộc phải di dời ra khỏi khu vực ô nhiễm, đóng cửa và đình
                    chỉ hoạt động của cơ sở gây ô nhiễm môi trường cũng không được áp dụng nhiều, hoặc có áp dụng nhưng các
                    cơ quan chức năng thiếu kiên quyết nên doanh nghiệp "lỳ đòn" cũng không có hiệu quả.</p>
                <br>
                <p>Các cấp chính quyền chưa nhận thức đầy đủ và quan tâm đúng mức đối với công tác bảo vệ môi trường, dẫn
                    đến buông lỏng quản lý, thiếu trách nhiệm trong việc kiểm tra, giám sát về môi trường. Ngoài ra, công
                    tác tuyên truyền, giáo dục về bảo vệ môi trường trong xã hội còn hạn chế.</p>
            </div>
            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h4>Giải pháp khắc phục</h4>
                <p>Người dân nâng cao ý thức về bảo vệ môi trường, vứt rác đúng nơi quy định, không xả rác bừa bãi. Giáo
                    dục, nâng cao nhận thức cho các bé về bảo vệ môi trường. Ngoài ra, nên hạn chế sử dụng các hóa chất tẩy
                    rửa khi xử lý nghẹt cống thoát nước, vì như thế sẽ vô tình đưa vào môi trường một chất thải nguy hại
                    mới, đồng thời cũng làm nguồn nước bị nhiễm độc. Thay vào đó, hãy áp dụng cách thông bồn cầu, cách xử lý
                    ống thoát nước bị tắc bằng vi sinh.</p>
                <br>
                <div>
                    <img class="w3-image w3-round-large"
                         src="{{ asset('/img/blog/pollution5.jpeg') }}"
                         alt="" width="1100" height="652"  data-aos="zoom-in">
                </div>

                <br>
                <br>

                <p>Bảo vệ môi trường là bảo vệ chính chúng ta. </p>
                <br>
                <p>Nhà nước tiếp tục hoàn thiện hệ thống pháp luật về bảo vệ môi trường, trong đó có những chế tài xử phạt
                    phải thực sự mạnh để đủ sức răn đe các đối tượng vi phạm. Bên cạnh đó, cần xây dựng đồng bộ hệ <thống></thống>
                    quản lý môi trường trong các nhà máy, các khu công nghiệp theo các tiêu chuẩn quốc tế. Tổ chức giám sát
                    chặc chẽ nhằm hướng tới một môi trường tốt đẹp hơn.</p>
                <br>
                <p>Tại các khu du lịch, khu đông dân cư, tuyến đường lớn,... nên bổ sung thêm nhiều thùng rác và các nhà vệ
                    sinh công cộng.</p>
                <br>
                <p>Tăng cường công tác nắm tình hình, thanh tra, giám sát về môi trường. Nâng cao năng lực chuyên môn,
                    nghiệp vụ cho đội ngũ cán bộ phụ trách công tác môi trường và trang bị các phương tiện kỹ thuật hiện đại
                    để phục vụ có hiệu quả cho các lực lượng này.</p>
                <br>
                <p>Cuối cùng, phải đẩy mạnh hơn nữa công tác tuyên truyền, giáo dục về môi trường trong toàn xã hội tạo ra
                    sự chuyển biến và nâng cao nhận thức, ý thức chấp hành pháp luật bảo vệ môi trường.</p>
                <br>
                <p>Tóm lại, tình trạng ô nhiễm môi trường ở Việt Nam tuy nghiêm trọng nhưng vẫn còn có thể cứu vãn nếu mỗi
                    người dân biết góp sức của mình, chung tay bảo vệ môi trường. Hãy hô vang khẩu hiệu <b>"Vì môi trường
                        xanh - sạch - đẹp"</b> và cũng là vì cuộc sống của chính chúng ta cũng như các thế hệ sau.</p>
            </div>
            <hr>
            <br>
            <br>

            <p style="text-align: right">Credit by: Thanhf Hoangf</p>
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

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
        <h4 style="text-align: center"><b>VẬY LÀM SAO ĐỂ BẮT ĐẦU MỘT LỐI SỐNG XANH?</b>
        </h4>
        <p class="w3-opacity" style="text-align: center">10-9-2019, 10h20</p>
        <p class="w3-opacity" style="text-align: center">Updated: 15-9-2019</p>
    </div>

    <div class="container">
        <div class="w3-content" style="margin-top: 115px;max-width:1100px;margin-bottom:80px">
            <div class="w3-container" data-aos="fade-down" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <p>Đây có lẽ một trong những câu hỏi mà mọi người đang đặt ra, nhưng bạn có biết chúng ta đều phải mất
                    21
                    ngày để thay đổi một thói quen mới?Và để bắt đầu một thói quen mới, chính mình phải thay đối cách
                    nhìn
                    cuộc sống này, vì chỉ khi ta thay đổi từ trong ta, những thứ xung quanh mới bắt đầu thay đổi. </p>
                <br>
                <em>
                    <b style="font-size: 24px">“Change the way you look at things and the things you look at change” -
                        Wayne
                        Dyer </b>
                </em>
                <br>
                <br>
                <p>Thế nên, chúng ta hãy thật chậm rãi, cảm nhận những điều cơ bản nhất đã tồn tại trong chúng ta từ
                    những
                    ngày đầu tiên, những điều cơ bản ấy vẫn chưa bao giờ thay đổi, vì sự tồn tại ấy vẫn nằm đấy, và việc
                    của
                    là ta quay trở về và sống đúng với giá trị ấy. </p>
            </div>
            <hr>

            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <div><h5><b>1.Thở để cảm</b></h5>
                            <p>
                                Chúng ta không thể sống nếu không thở, nhưng bao lâu rồi chúng ta không thật để ý đến
                                việc thở? Cái thở
                                của việc để tâm và không để tâm nó khác nhau thế nào? Cái thở của một bầu không khí thật
                                sạch và ngược
                                lại thì sẽ như thế nào? Đều là những câu hỏi, nhưng chính cảm nhận của chúng ta là hiểu
                                được câu trả lời
                                rõ nhất. Và lý trí giúp ta biết được làm sao để luôn được thở trong một bầu không khí
                                sạch và mát như
                                cái cảm giác mỗi buổi sáng, ngập mình trong sương, những cơn gió nhẹ bay qua hàng vai và
                                ta yêu sao cái
                                hơi thở đầu tiên trong ngày ấy, thật bình yên và nhẹ nhàng.
                            </p>
                        </div>
                    </div>
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large"
                             src="{{ asset('/img/blog/green.jpg') }}"
                             alt="Buildings" width="700" height="394"  data-aos="zoom-in">
                    </div>
                </div>
                <br>
                <p>Chúng ta không thể sống nếu không thở, nhưng bao lâu rồi chúng ta không thật để ý đến việc thở? Cái
                    thở
                    của việc để tâm và không để tâm nó khác nhau thế nào? Cái thở của một bầu không khí thật sạch và
                    ngược
                    lại thì sẽ như thế nào? Đều là những câu hỏi, nhưng chính cảm nhận của chúng ta là hiểu được câu trả
                    lời
                    rõ nhất. Và lý trí giúp ta biết được làm sao để luôn được thở trong một bầu không khí sạch và mát
                    như
                    cái cảm giác mỗi buổi sáng, ngập mình trong sương, những cơn gió nhẹ bay qua hàng vai và ta yêu sao
                    cái
                    hơi thở đầu tiên trong ngày ấy, thật bình yên và nhẹ nhàng.</p>
            </div>
            <br>

            <div class="content" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large"
                             src="{{ asset('/img/blog/green2.jpg') }}"
                             alt="Buildings" width="700" height="394"  data-aos="zoom-in">
                    </div>
                    <div class="w3-col m6">
                        <div><h5><b>2.Nghĩ về những điều tốt đẹp</b></h5>
                            <p>
                                Để dễ hiểu hơn, hãy nghĩa cái đẹp như một nguồn năng lượng. Đừng chỉ sử dụng năng lượng
                                ấy trong một thời
                                điểm
                                cụ thể, mà hãy mang những nguồn năng lượng ấy là những suy nghĩ tốt đẹp vào trong mọi
                                thời điểm ta đang
                                thở hoặc
                                bất cứ lúc nào trong cuộc đời bạn, để suy nghĩ của ta luôn được nhận thức, để đưa chúng
                                vào hành động.
                                Vì chỉ có
                                những suy nghĩ về những cái đẹp mới có thể sống và hướng đến cái đẹp, cho mình, cho
                                người và cho cuộc
                                đời này.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <em>
                    <b style="font-size: 24px;text-indent: 50px">
                        “The foundation of spiritual life is the thought, so the essence of the religious life is inner
                        discipline, the discipline of the mind.” - (Archimandrite Theophil Paraian, “Words to Youth”)
                    </b>
                </em>
            </div>
            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <br>
                        <div><h5><b>3. Sống một cuộc sống bền vững</b></h5>
                            <p>
                                Có lẽ, chúng ta sinh ra trong một hoàn cảnh khác nhau, môi trường khác nhau. Nhưng chúng
                                ta lại sống
                                chung với
                                nhau trên 1 hành tinh, 1 bầu không khí, và được lớn lên cùng 1 nguồn tài nguyên. Nhưng
                                bền vững nghĩa là
                                gì?
                                Thật ra bền vững giống một một vòng tròn khép kín, được lặp đi lặp lại và được duy trì
                                đúng bản chất ban
                                đầu.
                            </p>
                        </div>
                    </div>
                    <p></p>
                    <div class="w3-col m6">
                        <br>
                        <img class="w3-image w3-round-large"
                             src="{{ asset('/img/blog/green3.jpg') }}"
                             alt="Buildings" width="700" height="394"  data-aos="zoom-in">
                    </div>
                </div>
                <br>
                <div class="w3-row-padding">
                    <p>
                        Chúng ta, là thế hệ đang sống trong hiện tại, tiếp nối và đang sống trong vòng tròn ấy,
                        có trách nhiệm
                        là tiếp
                        tục duy trì vòng tròn và bảo vệ để thế hệ tiếp theo vẫn được sống đúng như bản chất ban
                        đầu, như cách
                        chúng ta
                        được nhận. Vậy nên sự hiện diện của ta không chỉ là sự tồn tại, mà là sống vì một mục
                        đích tốt đẹp, hãy
                        tìm ra
                        mục đích ấy và bắt đầu một cuộc sống bền vững. Vì tương lai là trái ngọt của hạt mầm hôm
                        nay tao gieo.
                        Hãy yêu
                        thương nhau như cách chúng ta đang sống chung với nhau trên cùng 1 hành tinh, 1 bầu
                        không khí.</p>
                </div>

            </div>
            <br>
            <br>
            <div class="content" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large"
                             src="{{ asset('/img/blog/green4.jpg') }}"
                             alt="Buildings" width="700" height="394"  data-aos="zoom-in">
                    </div>
                    <div class="w3-col m6">
                        <div><h5><b>4. Bắt đầu trồng cây</b></h5>
                            <p>
                                Chúng ta sẽ sống như thế nào nếu không có cây xanh hoặc thiên nhiên? Chúng ta hiểu được
                                cần phải có cây
                                xanh nhưng chúng ta đã hiểu hết về những ưu điểm mà thiên nhiên mang lại cho con người
                                chưa? Bạn có thể
                                tham khảo gần 20 lý do tại đây:
                                <a href="https://greentumble.com/20-reasons-why-we-should-plant-trees/">https://greentumble.com/20-reasons-why-we-should-plant-trees/</a>
                                Nếu bạn đang
                                nuôi dưỡng niềm hy vọng, hãy bắt đầu từ việc trồng cây.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <p>Quá trình trồng cây cũng là quá
                    trình ta học
                    được rất nhiều về chính con người mình, về cuộc sống này và những điều nhìn là nhỏ bé ấy
                    mang lại cho
                    bạn.</p>
                <em>
                    <b style="font-size: 24px;text-indent: 50px">
                        “All our wisdom is stored in the trees.” - Santosh Kalwar
                    </b>
                </em>
            </div>
            <br>

            <div class="content" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <div class="w3-row-padding">
                    <div class="w3-col m6">
                        <div><h5><b>5. Thay đổi chính mình</b></h5>
                            <p>Tìm một giải pháp để bắt đầu “Lối sống xanh" thật sự không khó, nó chỉ khó khi chúng ta
                                thiếu niềm tin.
                                Và niềm tin ấy chỉ bắt đầu, khi và chỉ khi bên trong ta bắt thôi thúc. Và khi chúng ta
                                bắt đầu thay đổi
                                chính mình, những suy nghĩ của chúng ta về môi trường không phải là một xu hướng, mà từ
                                lâu nó đã là một
                                phần trách nhiệm, chỉ là ta vẫn đợi đến khi kết quả xấu đi, ta mới bắt đầu nghĩ về nó
                                nhiều hơn. </p>
                            <p>Nếu 20 năm tiếp theo, ta lại tự hỏi vì sao 20 năm trước tôi không bắt đầu?</p>
                            <p>Nếu 20 năm tiếp theo, ta cảm thấy biết ơn vì ta đã bắt đầu.</p>
                        </div>
                    </div>
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large"
                             src="{{ asset('/img/blog/green5.jfif') }}"
                             alt="Buildings" width="700" height="394"  data-aos="zoom-in">
                    </div>
                </div>
                <br>
            </div>
            <br>
            <h4 style="text-align: center">Vậy bạn của ngày hôm nay, sẽ chọn câu nói nào cho 20 năm tiếp theo?</h4>

            <hr>
            <br>
            <br>

            <p style="text-align: right">Credit by: Tun Nguyễn</p>
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

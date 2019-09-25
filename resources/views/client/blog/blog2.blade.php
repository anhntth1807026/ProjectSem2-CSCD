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

        /*h5 {*/
        /*    color: #66ff66;*/
        /*    text-shadow: 1px 1px #000000;*/
        /*}*/


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
        <h4 style="text-align: center"><b>BẠN CÓ BIẾT SỰ KHÁC NHAU GIỮA CÁC KHÁI NIỆM <br> “GREEN”, “SUSTAINABLE”,
                “ECO-FRIENDLY”, “ETHICAL”, “FAIRTRADE”, “CLEAN”, “ORGANIC”, “NON-TOXIC”, VÀ “CONSCIOUS”?</b>
        </h4>
        <p class="w3-opacity" style="text-align: center">11-9-2019, 20h20</p>
        <p class="w3-opacity" style="text-align: center">Updated: 29-9-2019</p>
    </div>

    <div class="container">
        <div class="w3-content" style="margin-top: 115px;max-width:1100px;margin-bottom:80px">
            <div class="w3-container" style="" data-aos="fade-up" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <p>Green = tạm dịch “Xanh”</p>

                <p>Sustainable = tạm dịch “Bền vững”</p>

                <p>Eco-friendly = tạm dịch “thân thiện với môi trường, sinh thái”</p>

                <p>Ethical = tạm dịch “Có đạo đức”</p>

                <p>Fairtrade = tạm dịch “Thương mại bình đẳng”</p>

                <p>Clean = tạm dịch “Sạch”</p>

                <p>Organic = tạm dịch “Hữu cơ”</p>

                <p>Non-Toxic = tạm dịch “Không độc hại”</p>

                <p>Artisan = tạm dịch “Thủ công”</p>

                <p>Conscious = tạm dịch “Có trách nhiệm, có ý thức”</p>

                <p>Thoughful = tạm dịch “Sâu sắc, biết nghĩ cho người khác, biết nghĩ xa cho sau nay”</p>
                <br>
                <p>Nếu dùng những từ này một cách bất cẩn, đặc biệt là bộ phận marketing, sẽ dễ gây bối rối, hiểu sai,
                    hiểu
                    lệch do các từ này dường như đồng nghĩa, hay gần nghĩa. Hầu như các từ này đều ám chỉ về nhận thức
                    cũng
                    như trách nhiệm xã hội và môi trường, có tương quan đến nhau. Trong ngữ nghĩa, rất cần hiểu đúng sự
                    khác
                    biệt của từng từ, để rồi dùng đúng và có thể hiểu kỹ những gì các nhà sản xuất hay các quảng cáo
                    dùng,
                    và là những người tiêu dùng có hiểu biết, có trách nhiệm.</p>
                <br>
                <p>Để giải thích thêm về vấn đề này, dưới đây là một số hướng dẫn cơ bản dành cho những người tò mò và
                    muốn
                    khám phá thêm về những sắc thái khác nhau của XANH!</p>
            </div>

            <hr>
            <br>

            <div class="content" style="" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5 style="text-align: center" data-aos="zoom-out"><b>“XANH”, “THÂN THIỆN VỚI MÔI TRƯỜNG” VÀ “BỀN
                        VỮNG”</b></h5>
                <br>
                <img class="w3-image w3-round-large"
                     src="{{ asset('/img/slide-pics/slideb.jpg') }}"
                     alt="Buildings" width="500" height="300" style="margin: auto; display: block;" data-aos="zoom-in">
                <br>
                <br>
                <p>Ý nghĩa của từ "XANH" không còn đơn giản chỉ là để nói về một màu sắc. Hiện nay, từ ngữ này được sử
                    dụng
                    một cách liên tục trong ngôn ngữ giao tiếp thông thường để nói về hầu hết tất cả mọi thứ liên quan
                    đến
                    việc đem lại lợi ích cho môi trường, từ các hành động, phong trào cho đến cả trong kiến trúc và thời
                    trang.</p>
                <br>
                <p>“THÂN THIỆN VỚI MÔI TRƯỜNG” thì lại không mang một nghĩa quá rộng. Nó nói tới một thứ gì đó không gây
                    hại
                    cho Trái Đất</p>
                <br>
                <p>Còn “BỀN VỮNG” lại là thuật ngữ được định nghĩa chính xác nhất ở đây, và nó đại diện cho một phạm vi
                    rộng
                    các vấn đề và hoạt động, theo Liên Hợp Quốc, “Bền vững” có nghĩa là <b>KHÔNG GÂY ẢNH HƯỞNG ĐẾN KHẢ
                        NĂNG,
                        CƠ HỘI CỦA THẾ HỆ TƯƠNG LAI TRONG VIỆC ĐÁP ỨNG, THOẢ MÃN NHU CẦU TRONG CUỘC SỐNG LÚC ĐÓ.</b></p>
                <br>
                <p>Sự bền vững chủ yếu hướng tới tương lai. Nó nói đến các công cụ hay hành động đang tạo ra giá trị lợi
                    ích
                    cho môi trường, xã hội và kinh tế, đồng thời không sử dụng quá nhiều tài nguyên hoặc gây ô nhiễm.
                    Tất cả
                    các khía cạnh này đều được bao hàm trong một từ “Bền vững”</p>
                <br>
                <p>So với ‘Xanh” và “Thân thiện với môi trường”, “Bền vững” có tiêu chuẩn cao hơn nhiều. Tính bền vững
                    bao
                    gồm các hoạt động thân thiện với môi trường và các sản phẩm xanh, nhưng “Xanh” lại không phải lúc
                    nào
                    cũng có nghĩa là “Bền vững”. Ví dụ, một sản phẩm được làm từ nguyên liệu tái tạo có thể được coi là
                    xanh, nhưng nếu việc phân tích cả vòng đời của sản phẩm này chỉ ra rằng người ta đã phải dùng nhiều
                    năng
                    lượng để sản xuất và vận chuyển món hàng này, và nếu nó chưa có một phương pháp hợp lí để xử lý sản
                    phẩm
                    này sau khi dùng xong thì nó vẫn chưa được xem là bền vững.</p>
                <br>
                <p>Thành thật mà nói, không có nhiều sản phẩm trong thế giới đồ tiêu dùng ngoài kia thực sự bền vững. Mà
                    thay vào đó là một số sản phẩm bền vững hơn một chút khi so sánh với các sản phẩm thay thế của
                    nó.</p>
            </div>

            <br>

            <div class="content" style="" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5 style="text-align: center" data-aos="zoom-out"><b>“SẠCH”, “KHÔNG ĐỘC HẠI” VÀ “HỮU CƠ”</b></h5>
                <br>
                <img class="w3-image w3-round-large"
                     src="{{ asset('/img/blog/toxic.jpg') }}"
                     alt="Buildings" width="500" height="300" style="margin: auto; display: block;" data-aos="zoom-in">
                <br>
                <br>
                <p>Nhu cầu tăng về các sản phẩm an toàn, chủ yếu là trong ngành công nghiệp chăm sóc sức khỏe và làm
                    đẹp, đã
                    tạo ra các thuật ngữ “SẠCH” và “KHÔNG ĐỘC HẠI”, và chúng khá là tương tự nhau. “Sạch” nói đến các
                    thành
                    phần, tự nhiên hoặc tổng hợp, không có hại cho sức khỏe của bạn. Sản phẩm “Không độc hại” thì không
                    chứa
                    các thành phần có thể gây hại cho sức khỏe hoặc môi trường. Khi nói về các sản phẩm làm đẹp hay sản
                    phẩm
                    làm sạch, sau này Lại Đây sẽ thường sử dụng “Không độc hại”, đơn giản vì nó chính xác và phù hợp hơn
                    so
                    với thuật ngữ lối sống sạch.</p>
                <br>
                <p>“HỮU CƠ” là một thuật ngữ có tính pháp lý, được USDA sử dụng để chứng nhận thực phẩm, sản phẩm làm
                    đẹp và
                    các sản phẩm nông nghiệp khác được sản xuất theo một phương pháp cụ thể - chủ yếu là không có hóa
                    chất
                    tổng hợp có hại cho môi trường và sức khỏe con người. Vì vậy, chúng ta chỉ sử dụng thuật ngữ này khi
                    nói
                    về thực phẩm, nhà hàng, sản phẩm làm đẹp... có sử dụng các thành phần được chứng nhận hữu cơ.</p>
            </div>

            <br>

            <div class="content" style="" data-aos="fade-right" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5 style="text-align: center" data-aos="zoom-out"><b>“CÓ ĐẠO ĐỨC”, “THƯƠNG MẠI BÌNH ĐẲNG” VÀ “THỦ
                        CÔNG”</b></h5>
                <br>
                <img class="w3-image w3-round-large"
                     src="{{ asset('/img/slide-pics/slidec.jpg') }}"
                     alt="Buildings" width="500" height="300" style="margin: auto; display: block;" data-aos="zoom-in">
                <br>
                <br>
                <p>Kể từ những năm 1980, thương mại toàn cầu đã thay đổi tích cực hơn, đặc biệt là ở các khu vực đang
                    phát
                    triển của thế giới.</p>
                <br>
                <p>Nó bắt đầu với phong trào “THƯƠNG MẠI BÌNH ĐẲNG” để bảo vệ nhà sản xuất cà phê, ca cao và chè với mức
                    giá
                    thấp trên thị trường quốc tế. Đây là một thuật ngữ được định nghĩa chính xác và chỉ được sử dụng khi
                    có
                    chứng nhận từ một cơ quan quản lý quốc tế, như Chứng nhận Thương mại bình đẳng, Liên đoàn Thương mại
                    bình đẳng, Trao đổi công bằng, hoặc Tổ chức Thương mại bình đẳng Thế giới. Lại Đây Refill sẽ chỉ sử
                    dụng
                    thuật ngữ này với các sản phẩm đã được chứng nhận và có một logo thể hiện điều này.</p>
                <br>
                <p>Xu hướng Thương mại CÓ ĐẠO ĐỨC nói đến các điều kiện làm việc của công nhân sản xuất quần áo, đồ
                    chơi,
                    thực phẩm và các sản phẩm khác cho các công ty đa quốc gia, cũng như việc họ được trả lương như thế
                    nào
                    cho công việc của mình. Đây là một thuật ngữ rộng không được chứng nhận hay được định nghĩa chính
                    xác
                    nhưng nó vẫn có tác dụng trong việc mô tả chung về loại sản phẩm mà bạn muốn mua.</p>
                <br>
                <p>Thuật ngữ “THỦ CÔNG” đi ngược lại với dây chuyền công nghiệp sản xuất sản phẩm. Các sản phẩm thủ công
                    thường được làm bằng tay và được chế tạo với sự tự động hóa tối thiểu bởi những công nhân lành nghề
                    ở
                    các nước đang phát triển. Tuy nhiên, thực tế là một cái gì đó được làm bằng tay không có nghĩa là nó
                    bền
                    vững.</p>
            </div>

            <br>

            <div class="content" style="" data-aos="fade-left" data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h5 style="text-align: center" data-aos="zoom-out"><b>“CÓ TRÁCH NHIỆM, CÓ Ý THỨC” và “SÂU SẮC, BIẾT
                        NGHĨ”</b></h5>
                <br>
                <img class="w3-image w3-round-large"
                     src="{{ asset('/img/blog/res.jpg') }}"
                     alt="Buildings" width="500" height="300" style="margin: auto; display: block;" data-aos="zoom-in">
                <br>
                <br>
                <p>“CÓ TRÁCH NHIỆM, CÓ Ý THỨC” thường hướng đến nhận thức của người tiêu dùng và tiêu chuẩn cao về sức
                    khoẻ
                    và môi trường, tinh thần. Là người tiêu dùng có trách nhiệm tức là biết cách đọc và hiểu nhãn mắc,
                    thông
                    tin sản phẩm, và biết là với các sản phẩm bền vững, hữu cơ, thân thiện với động vật… thì chi phí bỏ
                    ra
                    sẽ phải cao hơn. “Có trách nhiệm, có ý thức” là từ chỉ về một lối sống, cũng là một từ để mô tả về
                    con
                    người, doanh nghiệp, hay cách nghĩ về đồ vật, chứ không hẳn là nói về sản phẩm cụ thể.</p>
                <br>
                <p>Trong khi đó, “SÂU SẮC, BIẾT NGHĨ” lại hướng về sự quan tâm đến nhu cầu của người khác, được thông
                    tin
                    đầy đủ về 1 đề tài nào đó để ra quyết định hay hình thành 1 quan điểm. “SÂU SẮC, BIẾT NGHĨ” thể hiện
                    hết
                    những ý, những từ nêu trên trong bài này, và nó có thể được xem như một mục tiêu bao quát. “Sâu sắc,
                    biết nghĩ” còn vượt xa hơn cả việc trở thành một người mua hàng và một người tái chế có trách nhiệm.
                    Mua
                    sản phẩm địa phương là tốt, nhưng phương pháp phân tích khi nói về việc đọc các nhãn mác hay chọn
                    loại
                    bao bì thân thiện với môi trường chỉ là điểm khởi đầu.</p>
                <br>
                <p>Thực sự “SÂU SẮC, BIẾT NGHĨ “và nhận thức phải đi cùng việc theo đuổi một lối sống hoàn toàn mới, một
                    lối
                    sống ưu tiên sự tối giản, “less is more”. Chấp nhận “thời trang chậm”, là <em><b>LỐI SỐNG MÀ VIỆC
                            THIẾT
                            KẾ, SẢN
                            XUẤT, MUA SẮM, SỬ DỤNG CHUYỂN ĐỘNG CHẬM RÃI HƠN, CHÚNG TA MUA ÍT HƠN VÀ TẬP TỪ BỎ NHỮNG MÓN
                            ĐỒ
                            KHÔNG CẦN
                            THIẾT.</b></em> Tự nuôi trồng thức ăn hoặc mua thực phẩm tại cửa hàng của nông dân. Học cách
                    tự
                    làm các sản phẩm
                    chăm sóc da với nguyên liệu tự nhiên. Làm sạch môi trường sống xung quanh bằng cách loại bỏ các chất
                    gây
                    ô nhiễm và bỏ thói bừa bộn. Bán và tặng những thứ không còn cần thiết với bạn nữa. Chọn cuộc sống
                    với
                    một ngôi nhà nhỏ nằm trong khu phố đi bộ và có phương tiện giao thông công cộng. Đọc nhiều tài liệu,
                    sách báo có chất lượng về các chủ đề môi trường và nhân quyền, và hãy là một công dân “sâu sắc, biết
                    nghĩ cho người khác, biết nghĩ cho sau này”.</p>
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

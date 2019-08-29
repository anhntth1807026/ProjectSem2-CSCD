<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>
    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../thumbnail/logo-short-cut.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/w3.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/homePages.css">

    <script src="../js/jquery-3.3.1.slim.min.js"></script>

    <script src="../js/ajaxlibspopper.js1.14.6umdpopper.min.js"></script>

    <script src="../js/bootstrap4.2.1jsbootstrap.min.js"></script>
    {{--    materialize css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
<!--Header-->

<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide" style="color: #00acd6;size: 60px;">Tree Hugger</a>
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button dropdown-button" data-beloworigin="true" data-hover="true" data-activates='dropdown1' style="color: #00acd6">Sản Phẩm</a>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#">Đồ Dùng Gia Đình</a></li>
                <li><a href="#">Đồ Dùng Cá Nhân</a></li>
            </ul>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6">Chúng Tôi</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6">Bài Viết</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6">Chính Sách</a>
            <a href="#" class="w3-bar-item w3-button" style="color: #00acd6">Giỏ Hàng</a>
            <a href="#" class="w3-bar-item w3-button" onclick="w3_open1()" style="color: #00acd6">Đăng Nhập</a>
        </div>
        <!-- Sidebar -->
        <nav class="w3-sidebar w3-white w3-animate-top" style="display:none;padding-top:50px;width: 100%"
             id="mySidebar1">
            <a href="javascript:void(0)" onclick="w3_close1()"
               class="w3-button w3-white w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
                <i class="fa fa-remove"></i>
            </a>
            <div class="w3-bar-block w3-center">
                <h1 style="font-size: 50px">Đăng Nhập</h1>
                <h5 style="padding-top: -50px">Luôn Là Một Thành Viên Trung Thành</h5>
                <br>
                <div class="w3-container" id="menu">
                    <div class="w3-content" style="max-width:700px">
                        <div class="w3-row w3-center w3-card w3-padding">
                            <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                                <div class="w3-col s6 tablink" style="color: #0f0f0f;">Đăng Nhập</div>
                            </a>
                            <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                                <div class="w3-col s6 tablink" style="color: #0f0f0f;">Đăng Ký</div>
                            </a>
                        </div>

                        {{--                        Đăng Nhập--}}

                        <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                                <div class="w3-content" style="max-width:600px">
                                    <form action="/signin.php" target="_blank">
                                        <div class="w3-section">
                                            <label>Email</label>
                                            <input class="w3-input w3-border" type="email" name="Email" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Mật Khẩu</label>
                                            <input class="w3-input w3-border" type="password" name="Password" required>
                                        </div>
                                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"
                                                style="margin-top: 50px">Đăng Nhập
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{--                        Đăng Ký--}}

                        <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                                <div class="w3-content" style="max-width:600px">
                                    <form action="/register.php" target="_blank">
                                        <div class="w3-section">
                                            <label>Họ Tên</label>
                                            <input class="w3-input w3-border" type="text" name="Name" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Email</label>
                                            <input class="w3-input w3-border" type="email" name="Email" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Mật Khẩu</label>
                                            <input class="w3-input w3-border" type="password" name="Password" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Nhập Lại Mật Khẩu</label>
                                            <input class="w3-input w3-border" type="password" name="ConfirmPassword"
                                                   required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Số Điện Thoại</label>
                                            <input class="w3-input w3-border" type="number" name="Phone" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Số Tuổi</label>
                                            <input class="w3-input w3-border" type="number" name="Age" required>
                                        </div>
                                        <div class="w3-section">
                                            <label>Địa chỉ</label>
                                            <input class="w3-input w3-border" type="text" name="Address" required>
                                        </div>
                                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"
                                                style="margin-top: 50px">Đăng Ký
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 100px"></div>
        </nav>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
           onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none"
     id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button" style="color: #00acd6">Sản Phẩm</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button" style="color: #00acd6">Chúng Tôi</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button" style="color: #00acd6">Bài Viết</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button" style="color: #00acd6">Chính Sách</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button" style="color: #00acd6">Giỏ Hàng</a>
    {{--    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Đăng Nhập</a>--}}
    <a href="#" class="w3-bar-item w3-button" onclick="w3_open1()" style="color: #00acd6">Đăng Nhập</a>

    <!-- Sidebar -->
    <nav class="w3-sidebar w3-white w3-animate-top" style="display:none;padding-top:50px;padding-bottom:50px;width: 100%"
         id="mySidebar1">
        <a href="javascript:void(0)" onclick="w3_close1()"
           class="w3-button w3-white w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
            <i class="fa fa-remove"></i>
        </a>
        <div class="w3-bar-block w3-center">
            <h1 style="font-size: 50px">Đăng Nhập</h1>
            <h4 style="padding-top: -50px">Luôn Là Một Thành Viên.<a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">&nbsp;Đăng Ký</a></h4>
            <br>
            <div class="w3-container" id="menu">
                <div class="w3-content" style="max-width:700px">
                    <div class="w3-row w3-center w3-card w3-padding">
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                            <div class="w3-col s6 tablink" style="color: #0f0f0f;">Đăng Nhập</div>
                        </a>
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                            <div class="w3-col s6 tablink" style="color: #0f0f0f;">Đăng Ký</div>
                        </a>
                    </div>

                    {{--                        Đăng Nhập--}}

                    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                        <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                            <div class="w3-content" style="max-width:600px">
                                <form action="/signin.php" target="_blank">
                                    <div class="w3-section">
                                        <label>Email</label>
                                        <input class="w3-input w3-border" type="email" name="Email" required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Mật Khẩu</label>
                                        <input class="w3-input w3-border" type="password" name="Password" required>
                                    </div>
                                    <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"
                                            style="margin-top: 50px">Đăng Nhập
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{--                        Đăng Ký--}}

                    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                        <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                            <div class="w3-content" style="max-width:600px">
                                <form action="/register.php" target="_blank">
                                    <div class="w3-section">
                                        <label>Họ Tên</label>
                                        <input class="w3-input w3-border" type="text" name="Name" required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Email</label>
                                        <input class="w3-input w3-border" type="email" name="Email" required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Mật Khẩu</label>
                                        <input class="w3-input w3-border" type="password" name="Password" required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Nhập Lại Mật Khẩu</label>
                                        <input class="w3-input w3-border" type="password" name="ConfirmPassword"
                                               required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Số Điện Thoại</label>
                                        <input class="w3-input w3-border" type="number" name="Phone" required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Số Tuổi</label>
                                        <input class="w3-input w3-border" type="number" name="Age" required>
                                    </div>
                                    <div class="w3-section">
                                        <label>Địa chỉ</label>
                                        <input class="w3-input w3-border" type="text" name="Address" required>
                                    </div>
                                    <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"
                                            style="margin-top: 50px">Đăng Ký
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</nav>

{{--End Header--}}

<div class="container" style="padding-top: 50px; " >
    <div class="row">
        <h1 class="col w3-center" data-aos="zoom-in" style="font-family: 'Times New Roman'">Câu chuyện của chúng tôi</h1>
    </div>

    <div class="row" style="font-family: 'Times New Roman' ">
        <div class="col-md-7" data-aos="fade-left">
            <h2 class="featurette-heading">Bạn có biết<span class="text-muted"> ở Việt Nam.</span></h2>
            <p class="lead">Số lượng các gói nhựa gửi đến bãi rác mỗi tuần có ở mức đáng báo động? Với thói quen chỉ sử dụng một lần nói chung và các sản phẩm khó phân hủy nói riêng, chúng ta đang lãng phí 5.714.578 kg EACH nhựa mỗi ngày. Trong khi 9% nhựa trên thế giới được tái chế, 12% đã bị đốt cháy và 79% còn lại cuối cùng nằm ở các bãi rác hoặc môi trường. Đặc biệt, Việt Nam được xếp hạng 5 quốc gia hàng đầu thế giới phát thải nhựa ra đại dương so với các quốc gia khác.</p>
        </div>
        <div class="col-md-5" data-aos="fade-right">
            <img src="img/new-image/about2.webp" alt="" style="width: 100%; height: 400px;  margin-top: 40px">
        </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette" style="font-family: 'Times New Roman'">
        <div class="col-md-7 order-md-2" data-aos="fade-left">
            <h2 class="featurette-heading">Vậy nên <span class="text-muted">chúng tôi</span></h2>
            <p class="lead">Tree Hugger được thành lập như một sáng kiến ​​nhằm giảm lượng bao bì nhựa sử dụng một lần hoặc các sản phẩm khó phân hủy, bao gồm các sản phẩm gia dụng thông thường, cho cả người lớn và trẻ em, hoặc mang đi. Chúng tôi cũng chú ý đến các thành phần trong mỗi sản phẩm. Tại Tree Hugger, chúng tôi luôn cung cấp thông tin chi tiết về sản phẩm để nạp và mua. Tính minh bạch của chúng tôi giúp người tiêu dùng dễ dàng kiểm tra nguồn và chất lượng sản phẩm của chúng tôi bất cứ lúc nào. Chúng tôi luôn ưu tiên sử dụng các thành phần tự nhiên trong quá trình sản xuất.</p>
        </div>
        <div class="col-md-5 order-md-1" data-aos="fade-right">
            <img src="img/new-image/about3.webp" alt="" style="width: 100%; height: 400px; margin-top: 40px">
        </div>
    </div>
    <!-- Team Section -->
    <div class="w3-container" data-aos="zoom-in" style="padding:128px 16px" id="team">
        <h3 class="w3-center">THE TEAM</h3>
        <p class="w3-center w3-large">The ones who runs this company</p>
        <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
            <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                <div class="w3-card-4">
                    <img src="/img/new-image/man1.png" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h4>Pham Thanh Hoa</h4>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                <div class="w3-card-4">
                    <img src="/img/new-image/man1.png" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h4>Nguyen Tuan Anh</h4>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                <div class="w3-card-4">
                    <img src="/img/new-image/man1.png" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h4>Hoang Tat Thanh</h4>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                <div class="w3-card-4">
                    <img src="/img/new-image/man1.png" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h4>Dang Tieu Binh</h4>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom" data-aos="zoom-in">
                <div class="w3-card-4">
                    <img src="/img/new-image/man1.png" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h4>Luong Xuan Bach</h4>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }

    function w3_open1() {
        document.getElementById("mySidebar1").style.width = "100%";
        document.getElementById("mySidebar1").style.display = "block";
    }

    function w3_close1() {
        document.getElementById("mySidebar1").style.display = "none";
    }

    // Tabbed Menu
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }

    document.getElementById("myLink").click();

    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false,
            hover: false,
            gutter: 0,
            belowOrigin: false,
            alignment: 'left',
            stopPropagation: false
        }
    );
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
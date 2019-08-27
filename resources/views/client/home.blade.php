<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{ asset('css/w3CSS.css') }}>
    <link rel="stylesheet" href="{{ asset('css/RalewayCSS.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Raleway", sans-serif
    }

    .w3-top {
        position: fixed;
        z-index: 9000
    }

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("https://media.istockphoto.com/photos/macbook-pro-2018-partially-closed-cover-dark-background-picture-id1019816300?k=6&m=1019816300&s=170667a&w=0&h=3xaJu_PpzbZ1-sbDknAobsGVGhrok-74LMY4YjEx0Ts=");
        min-height: 100%;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }

    .w3-padding-32 {
        /* padding-top: 32px!important; */
        padding-bottom: 32px !important;
    }


    element.style {
    }

    .w3-padding-32 {
        /* padding-top: 32px!important; */
        padding-bottom: 32px !important;
    }

    .w3-padding-large {
        padding: 0px 24px !important;
    }
</style>
<body>
<!--Header-->

<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
            <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
            <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
            <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        </div>

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
           onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>


<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none"
     id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
        <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
        <p><a href="#about"
              class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn
                more and start today</a></p>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>

<div class="w3-container w3-light-white" style="padding:100px 16px">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h2>Welcome to Logo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et
                dolore.</p>
            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image w3-round-large" src="img/image09.jpg" alt="Buildings" width="700" height="394">
        </div>
    </div>
</div>

<div class="w3-container" style="padding:70px 16px;background-color: black;color: white" id="about">
    <h3 class="w3-center">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
        <div class="w3-quarter">
            <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
            <p class="w3-large">Responsive</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Passion</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Design</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="w3-quarter">
            <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">Support</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
    </div>
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:40px">
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20(1).jpg" alt="Sandwich" style="width:100%">
            <h3>The Perfect Sandwich, A Real NYC Classic</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
            ơ
        </div>
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20(2).jpg" alt="Steak" style="width:100%">
            <h3>Let Me Tell You About This Steak</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
        <div class="w3-quarter">
            <img src="https://static.wixstatic.com/media/1c272d_423f6187e3d842a0bc815e495f6f42a2~mv2_d_2000_2000_s_2.png/v1/fill/w_623,h_623,al_c,q_85,usm_0.66_1.00_0.01/1c272d_423f6187e3d842a0bc815e495f6f42a2~mv2_d_2000_2000_s_2.webp"
                 alt="Cherries" style="width:100%">
            <h3>Cherries, interrupted</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20(4).jpg" alt="Pasta and Wine" style="width:100%">
            <h3>Robust Wine and Vegetable Pasta</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
    </div>

    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20(5).jpg" alt="Popsicle" style="width:100%">
            <h3>All I Need Is a Popsicle</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20(6).jpg" alt="Salmon" style="width:100%">
            <h3>Salmon For Your Skin</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20(7).jpg" alt="Sandwich" style="width:100%">
            <h3>The Perfect Sandwich</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
        <div class="w3-quarter">
            <img src="img/tải%20xuống%20-%20Copy.jpg" alt="Croissant" style="width:100%">
            <h3>Le French</h3>
            <h6 class="w3-opacity">From $99</h6>
            <p>Single bed</p>
            <p>15m<sup>2</sup></p>
            <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
            </p>
            <button class="w3-button w3-block w3-black w3-margin-bottom">Detail Product</button>
        </div>
    </div>
</div>

<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
</div>


<div class="w3-row-padding w3-text-white w3-large w3-padding-32">
    <h2 class="w3-center" style="color:#000;">Our Blog</h2>
    <p class="w3-center w3-large" style="color: black">Key features of our company</p>
    <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
            <img src="img/saigon01.jpg" alt="Cinque Terre" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color: black">Cinque Terre</span>
        </div>
    </div>
    <div class="w3-half">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
                    <img src="img/saigon02.jpg" alt="New York" style="width:100%">
                    <span class="w3-display-bottomleft w3-padding" style="color: black">New York</span>
                </div>
            </div>
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
                    <img src="img/saigon03.jpg" alt="San Francisco" style="width:100%">
                    <span class="w3-display-bottomleft w3-padding" style="color: black">San Francisco</span>
                </div>
            </div>
        </div>
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
                    <img src="img/saigon04.jpg" alt="Pisa" style="width:100%">
                    <span class="w3-display-bottomleft w3-padding" style="color: black">Pisa</span>
                </div>
            </div>
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
                    <img src="img/saigon05.jpg" alt="Paris" style="width:100%">
                    <span class="w3-display-bottomleft w3-padding" style="color: black">Paris</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3-container" style="padding:100px 16px;color: white">
    <div class="w3-row-padding">
        <div class="w3-col m5" style="color:#000;">
            <div class="w3-container w3-light-white w3-padding-32 w3-padding-large" id="contact">
                <div class="w3-content" style="max-width:600px">
                    <h4 class="w3-center"><b>Contact Me</b></h4>
                    <p>Do you want me to photograph you? Fill out the form and fill me in with the details :) I love
                        meeting new people!</p>
                    <form action="/action_page.php" target="_blank">
                        <div class="w3-section">
                            <label>Name</label>
                            <input class="w3-input w3-border" type="text" name="Name" required>
                        </div>
                        <div class="w3-section">
                            <label>Email</label>
                            <input class="w3-input w3-border" type="text" name="Email" required>
                        </div>
                        <div class="w3-section">
                            <label>Message</label>
                            <input class="w3-input w3-border" type="text" name="Message" required>
                        </div>
                        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send Message</button>
                    </form>
                </div>
            </div>
            <!--            <h2>Welcome to Logo</h2>-->
            <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et-->
            <!--                dolore.</p>-->
            <!--            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>-->
        </div>
        <div class="w3-col m7">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-c2a3f8c5-10d9-4674-8845-11d66a175650"></div>
        </div>
    </div>
</div>

<footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-left"></i>&nbsp;To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                     class="w3-hover-text-green">w3.css</a></p>
    <p style="text-align: center">©2018 by LAIDAY REFILL</p>
    <p style="text-align: center">Hộ kinh doanh Lại Đây REFILL - Giấy chứng nhận Đăng ký Kinh doanh số 41B8013526 Do
        UBND Quận 2 Tp.HCM cấp ngày 04/09/2018. Đại diện: Nguyễn Thị Dạ Quyên</p>
    <p style="text-align: center"> Điện thoại: 028 6270 2141 - Email: daquyen@laidayrefill.com</p>
</footer>

<script>
    // Modal Image Gallery
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
</script>

</body>
</html>
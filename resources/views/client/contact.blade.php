@extends('client.layout')
@section('content')

    <div class="content-banner" style="padding-top: 76px;">
        <div class="container" style="text-align: center">
            <h2 class="title-page" style="margin-top: 0;
    position: relative;
    padding-bottom: 19px;
    margin-bottom: 13px;font-size: 40px;font-weight: bolder">Liên hệ</h2>
        </div>

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-inner">
                            <ul>
                                <li class="home">
                                    <a href="{{ route('home') }}">Trang chủ</a>
                                    <span><i class="fa fa-angle-right"></i></span>
                                </li>
                                <li class="category3"><span>Liên hệ</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content col-sm-12" style="padding-bottom: 60px;
    padding-top: 60px;">
        <div class="col-sm-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0956497505185!2d105.77940071488328!3d21.028858485998263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32ecb92db%3A0x3964e6238a3bd088!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1567748993840!5m2!1svi!2s"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <div class="col-sm-6" style="
    background-image: url(https://markbrandboutique.com/wp-content/uploads/2018/07/contact-form-background.jpg);
    background-size: cover;
    background-position: center;">
            <div class="contact-form container">
                <div style="text-align: center;margin-top: 20px;font-weight: bold;font-size: 25px">Mời điền thông tin liên hệ</div>
                <form action="" method="post">
                    @csrf
                    <div class="form-top">
                        <div class="form-group col-sm-6" style="margin-top: 40px">
                            <label>Họ tên <sup>*</sup></label>
                            <input type="text" name="c_name" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6" style="margin-top: 40px">
                            <label>Email <sup>*</sup></label>
                            <input type="email" name="c_email" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 " style="margin-top: 35px">
                            <label>Nội dung <sup>*</sup></label>
                            <textarea class="yourmessage" name="c_content" required></textarea>
                        </div>
                    </div>
                    <div class="submit-form form-group col-sm-12 submit-review" style="margin-top: 0; padding-top: 0">
                        <button type="submit" class="add-tag-btn">Gửi thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

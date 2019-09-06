@extends('client.layout')
@section('content')
<div class="w3-container w3-light-white w3-padding-32 w3-padding-large" style="
    height: 100vh;
    background-image: url(https://markbrandboutique.com/wp-content/uploads/2018/07/contact-form-background.jpg);
    background-size: cover;
    background-position: center;"
    id="contact">
    <div class="w3-content" style="max-width:600px; padding-top: 60px">
        <h4 class="w3-center"><b>Kết nối với chúng tôi</b></h4>
        <p>Bạn có muốn nhận thông tin mới nhất của Tree Hugger?
            Hãy điền vào mẫu dưới đây để nhận thông tin mới nhất chúng tôi luôn chào đón những góp ý của mọi người ^^</p>
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
            <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send
                Message
            </button>
        </form>
    </div>
</div>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0956497505185!2d105.77940071488328!3d21.028858485998263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32ecb92db%3A0x3964e6238a3bd088!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1567748993840!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

@endsection
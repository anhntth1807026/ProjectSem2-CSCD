<html>
<head>
    <title>Verify Your Email Address</title>
</head>
<body>
<p>
    Cảm ơn bạn đã tạo một tài khoản . Bạn hãy click vào đường link sau đây để hoàn tất việc đăng ký.
    </br>
    {{ URL::to('register/verify/' . $activation_code) }}
</p>
</body>
</html>

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestResetPassword;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function getFormResetPassword()
    {
        return view('auth.passwords.email');
    }

    public function sendCodeResetPassword(Request $request)
    {
        $email = $request->email;

        $checkUser = User::where('email', $email)->first();

        if (!$checkUser) {
            return redirect()->back()->with('error', 'Email không tồn tại');
        }

        $code = bcrypt(md5(time() . $email));

        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        $url = route('send.link.reset.password', ['code' => $checkUser->code, 'email' => $email]);

        $data = [
            'route' => $url
        ];

        Mail::send('email.reset_password', $data, function ($message) use ($email) {
            $message->to($email, 'Reset Password')->subject('Lấy lại mật khẩu');
            $message->from('thanhhtth1807034@fpt.edu.vn', 'Admin');
        });

        return redirect()->back()->with('success', 'Link lấy lại mật khẩu đã được gửi cho bạn. Vui lòng kiểm tra email.');
    }

    public function resetPassword(Request $request)
    {
        $code = $request->code;
        $email = $request->email;

        $checkUser = User::where([
            'code' => $code,
            'email' => $email
        ])->first();
        if (!$checkUser) {
            return redirect('/')->with('error', 'Xin lỗi ! Đường đãn lấy lại mật khẩu không đúng, bạn vui lòng thử lại.');
        }

        return view('auth.passwords.reset');
    }

    public function saveResetPassword(RequestResetPassword $requestResetPassword)
    {
        if ($requestResetPassword->password) {

            $code = $requestResetPassword->code;
            $email = $requestResetPassword->email;

            $checkUser = User::where([
                'code' => $code,
                'email' => $email
            ])->first();

            if (!$checkUser) {
                return redirect('/')->with('error', 'Xin lỗi ! Đường đãn lấy lại mật khẩu không đúng, bạn vui lòng thử lại.');
            }

            $checkUser->password = bcrypt($requestResetPassword->password);
            $checkUser->save();

            return redirect()->route('get.login')->with('success', 'Mật khẩu đã được thay đổi thành công, mời bạn đăng nhập.');
        }
    }
}

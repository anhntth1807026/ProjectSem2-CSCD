<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($data)) {
            return redirect()->route('product.index');
        }
        return redirect()->back();
    }

    public function logout(Request $request) {
//        Auth::logout();
//        Session::flush();
        Auth::guard("admins")->logout();
        return redirect('admin/login');
    }

}

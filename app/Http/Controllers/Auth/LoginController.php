<?php

namespace App\Http\Controllers\Auth;

use App\Classes\ActivationService;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
//        $data = $request->only('email', 'password');
        $data = [
            'email' => $request-> email,
            'password' => $request->password,
            'active' => 1
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else if (!Auth::attempt($data)){
            return redirect()->back()
                ->withErrors([
                    'email'  =>  'Bạn không thể đăng nhập'
                ]);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('login/google');
        }

        $authUser = $this->createUser($user);


//        dd($user);
        Auth::login($authUser, true);
        return redirect()->route('home');
    }

    public function createUser($user)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }

        return User::create([
            'name' => $user->name,
            'provider_id' => $user->id,
            'email' => $user->email,
//            'password' => bcrypt($user->password),
        ]);
    }


    /**
     * Create a new controller instance.
     *
     * @return Response
     */

//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
//    public function getLogout(Request $request) {
//        Auth::logout();
//        return redirect('/');
//    }

}

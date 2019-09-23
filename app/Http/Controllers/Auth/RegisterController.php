<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterValidate;
use App\Classes\ActivationService;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\ValidationException;
use JD\Cloudder\Facades\Cloudder;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
//    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }


    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterValidate $request)
    {
        $request->validated();
        $activation_code = time() . uniqid(true);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->age = $request->age;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->activation_code = $activation_code;
        $user->active = 0;
        $user->save();

        if ($user->id) {
            $activation_code = [
                'name' => $request->name,
                'email' => $request->email,
                'activation_code' => $activation_code,
            ];
            Mail::send('email.verify', $activation_code, function ($message) use ($request) {
                $message->to($request->email, $request->name)->subject('Verify your email address');
                $message->from('thanhhtth1807034@fpt.edu.vn','Admin');
            });
//            return redirect(route('login'))->with('status', 'Vui lòng xác nhận tài khoản email');
            return redirect()->route('get.login')->with('status', 'Vui lòng xác nhận tài khoản email.');
        }


        return redirect()->back();
    }

    public function verifyUser($code)
    {
        $user = User::where('activation_code', $code);

        if ($user->count() > 0) {
            $user->update([
                'active' => 1,
            ]);
            $notification_status = 'Bạn đã xác nhận thành công';
        } else {
            $notification_status = 'Mã xác nhận không chính xác';
        }

        return redirect(route('get.login'))->with('status', $notification_status);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
//    protected function create(array $data)
//    {
//        $user = User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
//        $role = config('roles.models.role')::where('name', '=', 'User')->first();  //choose the default role upon user creation.
//        $user->attachRole($role);
//
//        return $user;
//    }
}

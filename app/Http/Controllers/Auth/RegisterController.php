<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
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

    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->age = $request->age;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $image_urls = '';

        try {
            if ($request->hasFile('thumbnail')) {
                foreach ($request->file('thumbnail') as $image) {
                    $thumbnail = $image->getRealPath();

                    Cloudder::upload($thumbnail, null);
                    list($width, $height) = getimagesize($thumbnail);
                    $image_url = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height]);
                    $image_urls .= '@' . $image_url;
                }
            } else {
                $user->thumbnail = "https://avatars.servers.getgo.com/2205256774854474505_medium.jpg";
            }

        } catch (ValidationException $e) {
            return response()->json(['loi' => `Loi ${$e}`]);
        }
        $user->thumbnail = substr($image_urls, 1);
        $user->save();

        if ($user->id) {
            return redirect()->route('get.login');
        }

        return redirect()->back();
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

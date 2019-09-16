<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use JD\Cloudder\Facades\Cloudder;

class AdminUserController extends Controller
{
    public function index()
    {
//        $users = User::whereRaw(1);
        $users = User::latest()->paginate(5);
//        $users = $users->orderBy('id', 'DESC')->paginate(10);
//        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];

        return view('admin.user.index', $viewData);
    }

    public function store(UserValidation $request)
    {
        $request->validated();

        $users = new User();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->age = $request->get('age');
        $users->address = $request->get('address');
        $users->phone = $request->get('phone');
        $users->gender = $request->get('gender');

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
                $users->thumbnail = "https://avatars.servers.getgo.com/2205256774854474505_medium.jpg";
            }

        } catch (ValidationException $e) {
            return response()->json(['loi' => `Loi ${$e}`]);
        }
        $users->thumbnail = substr($image_urls, 1);
        $users->save();
        return redirect()->route('client.profile');
    }


    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit')->with('users', $users);
    }

    public function update(UserValidation $request, $id)
    {
        $users = User::find($id);
        $request->validated();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->age = $request->get('age');
        $users->address = $request->get('address');
        $users->phone = $request->get('phone');
        $users->gender = $request->get('gender');
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
                $users->thumbnail = "https://avatars.servers.getgo.com/2205256774854474505_medium.jpg";
            }

        } catch (ValidationException $e) {
            return response()->json(['loi' => `Loi ${$e}`]);
        }

        $users->thumbnail = substr($image_urls, 1);
        $users->save();
        return redirect()->route('client.profile');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return response()->json(['status' => true, 'message' => "User deleted successfully"]);
    }
}

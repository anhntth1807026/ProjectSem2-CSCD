<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
//        $users = User::whereRaw(1);
        $users = User::latest()->paginate(5);;
//        $users = $users->orderBy('id', 'DESC')->paginate(10);
//        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];

        return view('admin.user.index', $viewData);
    }

    public function editUser($id)
    {
        $users = User::find($id);
        return view('admin.user.edit')->with('users', $users);
    }

    public function update(UserValidation $request, $id)
    {
        $users = User::find($id);
        $request->validated(

        );

        $users->update($request->all());
        return response()->json(['status' => true, 'message' => "User updated successfully"]);
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return response()->json(['status' => true, 'message' => "User deleted successfully"]);
    }
}

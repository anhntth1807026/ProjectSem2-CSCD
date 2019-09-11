<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index(){
        $users = User::all();
        $viewData = [
            'users' => $users
        ];
        return view('client.profile-user', $viewData);
    }
}

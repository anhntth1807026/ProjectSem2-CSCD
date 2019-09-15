<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index(){
        $user = User::all();
        $viewData = [
            'users' => $user
        ];
        return view('client.profile-user', $viewData);
    }

    public function edit(){

    }
}

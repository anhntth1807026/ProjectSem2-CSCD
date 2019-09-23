<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class AdminRatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with('users:id,name', 'product:id,name')->paginate(10);
        $viewData = [
            'ratings' => $ratings
        ];

        return view('admin.rating.index', $viewData);
    }
}

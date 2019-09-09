<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return string
     */
    public function index()
    {
        $products = Product::where([
//            'products' => Product::all(),
            'pro_active' => Product::STATUS_PUBLIC
        ])->get();

        $viewData = [
            'products' => $products
        ];

        return view('client.home', $viewData);
    }
}

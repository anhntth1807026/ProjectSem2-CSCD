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
//        $product = Product::where([
//            'pro_active' => Product::STATUS_PUBLIC
//        ])->get();
        $product = Product::latest()->paginate(8);
        $viewData = [
            'product' => $product
        ];

        return view('client.home', $viewData);
    }

//    public function cart(){
//        return view('shopping.cart');
//    }
}

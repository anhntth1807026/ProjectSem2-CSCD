<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
        $productHot = Product::orderBy('id', 'desc')->Where('pro_hot', [1])->paginate(8);
        $blog = Article::paginate(3);
        $viewData = [
            'product' => $product,
            'productHot' => $productHot,
            'blog' => $blog
        ];
        return view('client.home', $viewData);
    }
}
//    public function cart(){
//        return view('shopping.cart');
//    }


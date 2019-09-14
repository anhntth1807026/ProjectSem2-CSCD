<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('id', 'name',  'price', 'thumbnail' )->find($id);

        if (!$product) return redirect('/');

        \Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => "https://res.cloudinary.com/dx8lbwzhw/image/upload/$product->thumbnail"]
        ]);

        return redirect()->back();
    }

    public function listShoppingCart(){
        $products = \Cart::content();
        return view('shopping.cart', compact('products'));
    }
}

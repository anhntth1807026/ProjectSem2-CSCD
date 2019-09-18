<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
//    thêm giỏ hàng
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('id', 'name', 'price', 'thumbnail')->find($id);

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

    public function deleteCartItem($key)
    {
        \Cart::remove($key);

        return redirect()->back();
    }

//    danh sách giỏ hàng
    public function listShoppingCart()
    {
        $products = \Cart::content();
        return view('shopping.cart', compact('products'));
    }

//    form thanh toán
    public function formPay()
    {
        $products = \Cart::content();

        return view('shopping.pay', compact('products'));
    }

//    lưu thông tin giỏ hàng
    public function saveInforShoppingCart(Request $request)
    {
        $totalMoney = str_replace(',', '', \Cart::subtotal(0, 3));
        $transactionId = Transaction::insertGetId([
            'tr_user_id' => get_data_user('web'),
            'tr_total' => $totalMoney,
            'tr_note' => $request->note,
            'tr_address' => $request->address,
            'tr_phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($transactionId) {
            $products = \Cart::content();
            foreach ($products as $product) {
                Order::insert([
                    'or_transaction_id' => $transactionId,
                    'or_product_id' => $product->id,
                    'or_quantity' => $product->qty,
                    'or_price' => $product->price,
                ]);
            }
        }
        \Cart::destroy();

        return redirect('/');
    }
}


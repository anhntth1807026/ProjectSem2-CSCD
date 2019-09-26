<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShoppingCartController extends Controller
{
    private $vnp_TmnCode = "P1U75DCO"; //Mã website tại VNPAY
    private $vnp_HashSecret = "JCNSINRXUGJYIXAKWWWIBZFIEABHYUDK"; //Chuỗi bí mật
    private $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//    private $vnp_Returnurl = "http://127.0.0.1:8000/checkout-success";
    private $vnp_Returnurl = "http://zerowastet1808a.herokuapp.com/checkout-success";

//    thêm giỏ hàng
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('id', 'name', 'price', 'thumbnail')->find($id);

        if (!$product) return redirect('/');
//        error_log($product->thumbnail);
//        error_log("https://res.cloudinary.com/dx8lbwzhw/image/upload/$product->thumbnail");
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
        if ($key == 'all') {
            \Cart::destroy();
        } else {
            \Cart::remove($key);
        }
//        \Cart::remove($key);

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

    //    cap nhat so luong gio hàng
    public function updateShoppingCart(Request $request)
    {
        \Cart::update($request->rowId, $request->qty);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function showFormPay(Request $request)
    {
//        if ($request->vnp_ResponseCode == '00') {
//            $transactionID = $request->vnp_txnRef;
//
//            $transaction = Transaction::find($transactionID);
//            if ($transaction) {
//                \Cart::destroy();
//
//                $transaction->save();
//                return redirect()->to('/')->with('success', 'Xác nhận giao dịch thành công');
//            }
//
//            return redirect()->to('/')->with('error', 'Mã đơn hàng không tồn tại');
//        }

        $products = \Cart::content();

        return view('shopping.pay_online', compact('products'));
    }

    public function savePayOnine(Request $request)
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

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        Log::info($request);

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $this->vnp_TmnCode,
            "vnp_Amount" => $totalMoney * 100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'], //IP
            "vnp_Locale" => "vn",
            "vnp_OrderInfo" => $request->note,
            "vnp_OrderType" => "billpayment",
            "vnp_ReturnUrl" => $this->vnp_Returnurl,
            "vnp_TxnRef" => $transactionId, //ma don hang
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $this->vnp_Url . "?" . $query;
        if (isset($this->vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $this->vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        );

        return $returnData;
    }

    public function checkoutSuccess()
    {
        \Cart::destroy();
        return view('shopping.checkout-success');
    }
}


<?php

namespace App\Http\Controllers;

use App\Order;
use App\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
//        $users = User::whereRaw(1);
        $transactions = Transaction::with('users:id,name')->paginate(5);
        $viewData = [
            'transactions' => $transactions
        ];

        return view('admin.transaction.index', $viewData);
    }

    public function viewOrder( $id){
            $orders = Order::with('product')->where('or_transaction_id', $id)->get();

            return view('admin.transaction.order', compact('orders'));
    }


}

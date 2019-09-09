<?php

namespace App\Http\Controllers;

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
        $transactions = Transaction::latest()->paginate(5);;
//        $users = $users->orderBy('id', 'DESC')->paginate(10);
//        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'transactions' => $transactions
        ];

        return view('admin.transaction.index', $viewData);
    }

    public function editTransaction($id)
    {
        $transactions = Transaction::find($id);
        return view('admin.transaction.edit')->with('transactions', $transactions);
    }

    public function update(TransactionValidation $request, $id)
    {
        $transactions = Transaction::find($id);
        $request->validated();

        $transactions->update($request->all());
        return response()->json(['status' => true, 'message' => "Transaction updated successfully"]);
    }

    public function destroy($id)
    {
        $transactions = Transaction::find($id);
        $transactions->delete();

        return response()->json(['status' => true, 'message' => "Transaction deleted successfully"]);
    }

}

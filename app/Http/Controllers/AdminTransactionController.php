<?php

namespace App\Http\Controllers;

use App\Order;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
//        $users = User::whereRaw(1);
        $choosedStatus = Input::get('status');
        if ((!Input::has('status') || $choosedStatus == 3)){
            $choosedStatus = 3;
            $transactions = Transaction::with('users:id,name')->orderByRaw('created_at DESC')->paginate(10);
        } else {
            $transactions = Transaction::where(['status' => $choosedStatus])->with('users:id,name')->orderByRaw('created_at DESC')->paginate(10);
        }

//        $transactions = Transaction::with('users:id,name')->paginate(5);

//        $viewData = [
//            'transactions' => $transactions,
//            'choosedStatus' => $choosedStatus
//        ];

        return view('admin.transaction.index')
            ->with('choosedStatus', $choosedStatus)
            ->with('transactions', $transactions);
    }

    public function viewOrder( $id){
            $orders = Order::with('product')->where('or_transaction_id', $id)->get();

            return view('admin.transaction.order', compact('orders'));
    }

    public function updateStatus($id){
        $obj = Transaction::find($id);
        if ($obj == null){
            return response()->json(['message' => 'Not Found'], 404);
        }
        $obj->status = Input::get('status');
        $obj->save();
        return redirect()->back();
    }

    public function getDataToTimeApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $transactions  = Order::select()
            ->whereBetween('transactions.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->orderBy('created_at','desc')
            ->get();
        foreach ($transactions as $data) {
            $data->statusLabel = $data->getStatusAttribute();
        }
        return response()->json(['list_obj' => $transactions], 200);
    }
    public function updateStatusMany(Request $request)
    {
        DB::table('transactions')->whereIn('id', Input::get('ids'))->update(['status' => $request->get('status')]);
        return redirect()->back();
    }
}

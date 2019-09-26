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
        $choosedStatus = Input::get('tr_status');
        if ((!Input::has('tr_status') || $choosedStatus == 3)){
            $choosedStatus = 3;
            $transactions = Transaction::with('users')->orderByRaw('created_at DESC')->paginate(10);
        } else {
            $transactions = Transaction::where(['tr_status' => $choosedStatus])->with('users')->orderByRaw('created_at DESC')->paginate(10);
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
        $obj->tr_status = Input::get('tr_status');
        $obj->save();
        return redirect()->back();
    }

    public function getDataToTimeApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $transactions  = Transaction::select()
            ->whereBetween('transactions.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->orderBy('created_at','desc')
            ->get();
        foreach ($transactions as $data) {
            $data->status = $data->getStatusAttribute();
        }
        return response()->json(['list_obj' => $transactions], 200);
    }

    public function getChartDataApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = Transaction::select(DB::raw('sum(tr_total) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('transactions.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();

        return $chart_data;
    }

    public function getPieChartDataApi()
    {
        //DB::connection()->enableQueryLog();
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
//        $chart_data = OrderDetail::select(DB::raw('sum(quantity) as totalQuantity'), DB::raw('product_id as product_id'))
//            ->whereRaw('created_at >= "'.$start_date.' 00:00:00" AND created_at <= "'.$end_date . ' 23:59:59"')
//            ->groupBy('product_id')
//            ->get();
        $orders = Transaction::whereRaw('tr_status=1')->get();
        $id = $orders->pluck('id')->all();
        $chart_data = Order::select(DB::raw('sum(or_quantity) as or_quantity'), 'or_product_id')
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->whereIn('or_transaction_id',$id)
            ->groupBy('or_product_id')
            ->orderBy('or_quantity', 'desc')
            ->get();
        return $chart_data;
    }
}

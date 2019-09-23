<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ListProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $product = Product::orderBy('created_at', 'desc');
        if (Input::get('keyword')) {
            $product = $product->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if (Input::get('pro_category_id')) {
            $product = $product->where('pro_category_id', $request->get('pro_category_id'));
        }
        $product = $product->paginate(9);
        $data = [
            'list' => $product ->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentCategoryId' => $request->get('pro_category_id'),
            'currentKeyword' => $request->get('keyword'),
            'categories' => Category::all()
        ];
        return view('client.list-product', $data);
    }
    public function homecare(Request $request){
        $product = Product::orderBy('created_at', 'desc');
        if (Input::get('keyword')) {
            $product = $product->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $product = $product->Where('pro_category_id', 1)->paginate(6);
        $data = [
            'list' => $product ->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentKeyword' => $request->get('keyword'),
            'categories' => Category::all()
        ];
        return view('client.homecare', $data);
    }
    public function personalcare(Request $request){
        $product = Product::orderBy('created_at', 'desc')->Where('pro_category_id', 2)->paginate(6);
        if (Input::get('keyword')) {
            $product = $product->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if (Input::get('pro_category_id')) {
            $product = $product->where('pro_category_id', $request->get('pro_category_id'));
        }
//        $product = $product->Where('pro_category_id', 2)->paginate(6);
        $data = [
            'list' => $product ->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentKeyword' => $request->get('keyword'),
            'categories' => Category::all()
        ];
        return view('client.personalcare', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

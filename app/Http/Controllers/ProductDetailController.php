<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productDetail(Request $request, $id)
    {

        $productDetail = Product::find($id);
        $productHot = Product::orderBy('id', 'desc')->Where('pro_hot', [1])->paginate(4);
        $cateProduct = Category::find($productDetail->pro_category_id);

        $data = [
            'productDetail' => $productDetail,
            'productHot' => $productHot,
            'cateProduct' => $cateProduct
        ];

        return view('product.detail', $data);
    }
}

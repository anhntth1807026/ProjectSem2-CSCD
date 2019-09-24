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

        $cateProduct = Category::find($productDetail->pro_category_id);

        $data = [
            'productDetail' => $productDetail,
            'cateProduct' => $cateProduct
        ];

        return view('product.detail', $data);

    }
}

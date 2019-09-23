<?php

namespace App\Http\Controllers;

use App\Product;
use App\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function saveRating(Request $request, $id){
        if ($request->ajax())
        {
            Rating::insert([
                'rate_product_id' => $id,
                'rate_number' => $request->number,
                'rate_content' => $request->r_content,
                'rate_user_id' => get_data_user('web'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            $product = Product::find($id);

            $product->pro_total_number += $request->number;
            $product->pro_total_rating += 1; // đếm ra bao nhiêu lượt đánh giá
            $product->save();

            return response()->json(['code' => '1']);
        }
    }
}

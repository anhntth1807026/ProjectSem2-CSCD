<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function users(){
        return $this->belongsTo(User::class, 'rate_user_id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'rate_product_id');
    }
}

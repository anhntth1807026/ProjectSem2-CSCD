<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description','thumbnail', 'quantity', 'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'pro_category_id');
    }
}

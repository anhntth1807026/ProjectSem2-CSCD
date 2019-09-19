<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = ['*'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

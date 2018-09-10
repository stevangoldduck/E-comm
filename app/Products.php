<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function photo()
    {
        return $this->hasMany('App\ProductImage');
    }
    //inverse
    public function trans()
    {
        return $this->belongsTo('App\Transactions');
    }
}

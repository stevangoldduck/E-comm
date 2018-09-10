<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PorductImage extends Model
{
    //inverse
    public function trans()
    {
        return $this->belongsTo('App\Products');
    }
}

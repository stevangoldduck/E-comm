<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function link()
    {
        return $this->belongsTo('App\Shared','link_origin','link');
    }
    // inverse
}

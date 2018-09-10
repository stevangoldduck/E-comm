<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawals extends Model
{

    protected $table = 'withdraws';
    public function user()
    {
        return $this->belongsTo('App\User','belongs_to','id');
    }
}

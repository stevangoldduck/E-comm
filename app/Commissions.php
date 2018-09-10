<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commissions extends Model
{
    public function trans()
    {
        return $this->belongsTo('App\Transactions','trans_id','id_trans');
    }
}

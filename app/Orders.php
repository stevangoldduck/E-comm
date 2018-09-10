<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = ['product_sku','link','qty','subtotal','user_id','user_ip','status','trans_id'];
}

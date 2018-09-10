<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shared extends Model
{

    protected $table = 'shareds';

    protected $fillable = ['link','sold','belongs_to'];

    public function user()
    {
        return $this->belongsTo('App\User','belongs_to','id');
    }


}

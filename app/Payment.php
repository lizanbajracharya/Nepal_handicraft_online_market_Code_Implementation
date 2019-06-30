<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded;

    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}

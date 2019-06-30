<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function is_book()
    {
        if($this->Status=='Booked')
        {
            return true;
        }
        return false;
    }

    public function is_bought()
    {
        if($this->Status=='Bought')
        {
            return true;
        }
        return false;
    }

    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}

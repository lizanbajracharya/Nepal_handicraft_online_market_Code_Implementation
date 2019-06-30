<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded;
    
    public function categories(){
        return $this->belongsTo('App\Category','id');
    }
   
    public function users(){
        return $this->belongsTo('App\Users','id');
    }

    public function booking(){
        return $this->belongsTo('App\Booking','id');
    }
    
    public function paymemt(){
        return $this->belongsTo('App\Payment','id');
    }
   
    public function review(){
        return $this->hasMany('App\Review');
    }
}

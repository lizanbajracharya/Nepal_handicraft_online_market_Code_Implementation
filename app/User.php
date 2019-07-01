<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Firstname','Lastname','Address','email','Username','password','usertype'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_admin()
    {
        if($this->UserType=='Admin')
        {
            return true;
        }
        return false;
    }   
    
    public function is_active()
    {
        if($this->Status=='Active')
        {
            return true;
        }
        return false;
    }   
    
    public function user_check()
    {
        if($this->count('id')>0)
        {
            return true;
        }
        return false;
    }
    protected $guarded;

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function company(){
        return $this->hasMany('App\Company');
    }

    public function payment(){
        return $this->hasMany('App\Payment');
    }

    public function booking(){
        return $this->hasMany('App\Booking');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }

    
}

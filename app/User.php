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
    protected $fillable = ['name', 'email','phone', 'password','address','role','is_active','photo'];
// protected $guarded = []
    // protected $guarded = [‘*’];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




   



    public function products(){

        return $this->hasMany('App\Product');
    }


    public function payment(){


        return $this->hasOne('App\Payment');

    }

    public function orders(){

        return $this->hasMany('App\Order');

    }



    public function isAdmin(){

        if ($this->role=='administrator' && $this->is_active=='active'){

            return true;

        }
        return false;

    }



}

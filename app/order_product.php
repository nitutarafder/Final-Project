<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    public function orders(){

    	return $this->hasMany('App\Order');

    }
}

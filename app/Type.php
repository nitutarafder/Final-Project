<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{



    protected $fillable=['type_name','category_id'];





	public function products(){

		return $this->hasMany('App\Product');

	}

	public function category(){

	    return $this->belongsTo('App\Category');

    }


	

}

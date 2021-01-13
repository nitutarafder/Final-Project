<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable=[

          'type_id',
         'title','price','discount_price',
         'quantity', 'product_status',
         'product_quality','description','product_photo'
     ];






 

    // public function category(){

    //     return $this->hasOne('App\Category');

    // }


     public function type(){

        return $this->belongsTo('App\Type');

     }



    public function sizes(){

        return $this->hasMany('App\Size');

    }

    public function category(){

         return $this->hasMany('App\Category');
    }

    public function orders(){
        return $this->hasMany();
    }

}

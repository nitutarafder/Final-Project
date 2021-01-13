<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DAddress extends Model
{
	 protected $fillable = ['name','email','phone','city','fullAddress'];
    protected $table='d_addresses';
}

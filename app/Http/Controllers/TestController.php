<?php

namespace App\Http\Controllers;
use App\Type;

use Illuminate\Http\Request;

class TestController extends Controller
{
    


	   public function test(){

        return Type::all();
    }

}

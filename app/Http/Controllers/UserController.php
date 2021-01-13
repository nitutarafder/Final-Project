<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;
use App\Category;

class UserController extends Controller
{
    

	public function index(){


		if(Auth::user()==true){
			$id = Auth::user()->id;
			$users=User::all()->where('id','=',$id);
			 $orders = Order::all()->where('user_id','=',$id);
			 $categorys = Category::all();
			
		return view('user.profile',compact('users','orders','categorys'));		

	}else{
	 return redirect('/');
	}

	}


}

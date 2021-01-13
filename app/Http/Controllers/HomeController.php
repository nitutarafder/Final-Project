<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Type;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $product = Product::all();
        $categorys = Category::all();
        //return $categorys->types;
        $tob_products = Product::where('product_quality','=','hot deals')->paginate(4);

       // return $categorys->category_name;
        return view('welcome',compact('product','categorys','tob_products'));
    }



 
}

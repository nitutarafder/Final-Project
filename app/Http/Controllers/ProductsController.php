<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{


    public function index(){
        $products = Product::all();
        $types = Type::all();
        return view('category/index',compact('products','types'));
    }




    // public function product_categories(){

    //     $categories = Category::all();



    //     return view('layouts/category_sidebar_lists',compact('categories'));


    // }



    public function type_and_products(){
        $types = Type::all();
        return view('layouts/tshirt',compact('types'));
    }

    public function add_to_cart(Request $request){
        return $request->all();
    }

}

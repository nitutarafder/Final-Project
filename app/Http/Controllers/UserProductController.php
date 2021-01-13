<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Type;
use DB;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $tob_products = Product::where('product_quality','=','hot deals')->paginate(4);
        $categorys = Category::all();
        return view('welcome',compact('product','categorys','tob_products'));
    }

    // public function getCategory(){
    //     $categorys = Category::all();

    //     return view('layouts/font_header',compact('categorys'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {


        $products = Product::find($id);
        
        $categorys = Category::all();
        // return $products->all();

        return view('products/add_to_cart',compact('products','categorys'));
    }



public function getProductByTitle($title){
   // return $title;
        $products = Product::all()->where('title','=',$title);
         $categorys = Category::all();
     return view('products/view_as_title',compact('products','categorys'));

}

public function getProductByCategory($id){
       $types = Type::all()->where('category_id','=',$id)->first();
       $categorys = Category::all();

    return view('products/view_as_category',compact('types','categorys'));
}



public function getDiscountProduct(){

     $categorys = Category::all();
     $products = Product::all()->where('discount_price','>','0');

    return view('products/view_discount_product',compact('categorys','products'));
}




public function search(Request $request){
    // return "not working";
    $searchData = $request->searchData;
    $categorys = Category::all();
    $search_data = DB::table('products')->where('title','like','%'.$searchData.'%')->get();
  return view('products/search',compact('search_data','categorys'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

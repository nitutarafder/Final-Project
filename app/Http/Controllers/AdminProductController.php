<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\TypeIdRequest;
use App\Product;

use App\Productphoto;
use App\Type;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $products = Product::all();
        $types = Type::pluck('type_name','id')->all();
        return view('admin/products/index',compact('products','types'));

    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create()
    {

        $types  = Type::pluck('type_name','id')->all();

        return view('admin/products/create',compact('types'));


    }









    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)

    {


        $input = $request->all();


        if ($file = $request->file('product_photo')){


            $name = time().$file->getClientOriginalName();


            $file->move('product_image',$name);


            $input['product_photo']=$name;


            $product=Product::create($input);



//            $photo = new Productphoto;
//            $photo->product_img = $name;
//            $photo->product_id = $product->id;
//            $photo->save();
        }


       return redirect('admin/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $types  = Type::pluck('type_name','id')->all();
        return view('admin/products/edit',compact('products','types') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $input = Product::find($id);
        $data = $request->all();
        if ($file = $request->file('product_photo')){
            $name = time().$file->getClientOriginalName();
            $file->move('product_image',$name);
            $data['product_photo']=$name;
//            $input->update($data);
        }
          $input->update($data);
        return redirect('admin/products/');
    }






    public function  type_view(TypeIdRequest $request)
    {

//
        $id = $request->all('type_id');



        $products = Product::where('type_id', '=', $id)->get()->all();


        return view('admin/products/type/index', compact('products'));



    }









    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request)
    {


     $data = Product::findOrFail($request->product_id);

        unlink(public_path('product_image/'.$data->product_photo));

        $data->delete();
        
        return redirect('admin/products/');


    }








}

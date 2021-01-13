<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();


        return view('admin/categories/index',compact('categories'));


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $data = $request->all();


        if ($file = $request->file('category_photo')) {


            $name = time() . $file->getClientOriginalName();


            $file->move('image_category', $name);


            $data['category_photo'] = $name;
            Category::create($data);
        }



        return redirect('admin/categories');


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
        $categories = Category::findOrFail($id);


        return view('admin/categories/edit',compact('categories'));


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(CategoryRequest $request, $id)
    {



        $input = Category::find($id);


        $data = $request->all();

        if ($file = $request->file('category_photo')) {


            $name = time() . $file->getClientOriginalName();


            $file->move('image_category', $name);


            $data['category_photo'] = $name;


        }

        $input->update($data);


        return redirect('admin/categories');


    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function destroy(Request $request)
    {

        $data = Category::findOrFail($request->category_id);

        unlink(public_path('image_category/'.$data->category_photo));

        $data->delete();

        return redirect('admin/categories/');

    }
}

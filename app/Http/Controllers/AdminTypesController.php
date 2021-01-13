<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\TypesRequest;
use App\Type;
use Illuminate\Http\Request;

class AdminTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::pluck('category_name','id')->all();
        $types = Type::all();


        return view('admin/types/index',compact('types','category'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


//
//        return view('');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypesRequest $request)
    {


        $input = $request->all();

        Type::create($input);


        return redirect('admin/types/');



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



        $types = Type::findOrFail($id);


        $category = Category::pluck('category_name','id')->all();


        return view('admin/types/edit',compact('types','category'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(TypesRequest $request, $id)
    {

        $input = Type::find($id);


        $data = $request->all();


        $input->update($data);


        return redirect('admin/types');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $input = Type::findOrFail($request->type_id);


        $input->delete();


        return redirect('admin/types');


    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin/users/index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/users/create');


        // $roles=Role::pluck('name','id')->all();
//        ,compact('roles')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
         $input = $request->all();
         $input['password'] = bcrypt($request->password);


        if ($file = $request->file('photo')){

            $name = time().$file->getClientOriginalName();

            $file->move('image',$name);

//            $photo = Photo::create(['file'=>$name]);
//
//            $input['photo_id'] = $photo->id;

            $input['photo']= $name;
            User::create($input);

        }




        return redirect('admin/users/');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);


        return view('admin/users/edit',compact('users'));


    }

    // view user who order product

public function show_order_user($id){
    $users = User::findOrFail($id);

        return  view('admin/orders/order_user',compact('users'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(UserRequest $request, $id)
    {

        $user= User::find($id);


       $input = $request->all();


        $input['password']=bcrypt($request->password);


       if ($file = $request->file('photo')){


           $name = time().$file->getClientOriginalName();


           $file->move('image',$name);


           $input['photo']=$name;



       }



        $user->update($input);




return redirect('admin/users');



}





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function destroy(Request $request)
    {



       $user = User::findOrFail($request->user_id);
if ($user->product_photo) {
    # code...

        unlink(public_path('image/'.$user->product_photo));
}
       $user->delete();


       return redirect('admin/users');



    }
}

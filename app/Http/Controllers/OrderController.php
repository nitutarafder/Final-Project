<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\order_product;
use DB;
use App\Category;
use App\DAddress;
use App\Product;
use PDF;


class OrderController extends Controller
{
    
    public function index(){


    	$orders = Order::where('status','=','pending')->orderBy('id','desc')->get();

    	return view('admin.orders.index',compact('orders'));

    }

       public function orderArchiveDetails(){


        $orders = Order::all()->where('status','=','delivered');

        return view('admin.orders.archive',compact('orders'));

    }



// viewOrderDetails


 public function orderDetails($id){

 		 $view_orders = DB::table('order_product')->where('order_id',$id)->get();

 		 $order = Order::find($id);
 		 
 		 $d_address = DAddress::all()->where('order_id','=',$order->id);

    	return view('admin.orders.viewOrderDetails',compact('view_orders','d_address'));

    }



    public function confirm_orders($id){
    	// return
    	$data = Order::all()->where('id','=',$id);
    	foreach ($data as $key) {
    		$key->status='delivered';

    		$key->save();
    	}

        return redirect('admin/orders/');

}
    public function UserOrderDetails($id){

         $categorys = Category::all();
         $view_orders = DB::table('order_product')->where('order_id',$id)->get();
        foreach ($view_orders as $view_order) {
         $product = Product::find($view_order->product_id);
        }
         $product_name= $product->title;
         $orders = Order::find($id);
        $d_address = DAddress::all()->where('order_id','=',$orders->id);
        return view('user/user_order_details',compact('categorys','orders','view_orders','d_address','product_name'));

    }



// get money receipt

    public function make_receipt($id){

         $view_orders = DB::table('order_product')->where('order_id',$id)->get();
        foreach ($view_orders as $view_order) {
         $product = Product::find($view_order->product_id);
        }
         $product_name= $product->title;
         $orders = Order::find($id);
        $d_address = DAddress::all()->where('order_id','=',$orders->id);


        $pdf = PDF::loadView('user.money_receipt',compact('view_orders','product_name','d_address'));
        return $pdf->download('invois.pdf');

    }





    public function OrderAddressEdit($id){
        $d_address = DAddress::findOrFail($id);
       
       return view('user/update_delivery_address',compact('d_address'));
    }
	
    public function OrderAddressUpdate(Request $Request,$id){
    //return $id;
      $dAddress = DAddress::find($id);
        $data= $Request->except('_token');

        $dAddress->update($data);

        return redirect('/profile');
    }


    	


}

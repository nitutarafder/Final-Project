<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Order;
use App\Category;
class cartController extends Controller
{
    
	public function index(){
		$carts= Cart::content();
		 $categorys = Category::all();
		return view('products/cart',['data'=>$carts],compact('categorys'));
	}
	public function addItem(Request $Request ,$id){
	
		$product = Product::find($id);
		$title=$product->title;
		$type=$product->type->type_name;
		$image	=$product->product_photo;
		
	$add=	Cart::add(['id' => $product->id, 'name' => $type, 'qty' => 1, 'price' => $product->price,
			'options' => [ 'image' => $image,'title'=>$title]
	]);

	 return redirect()->back();
	  // return redirect('/cart');
	

	}
 public function updateCart(Request $request){

     $qty = $request->newQty;
     $rowId = $request->rowID;
      // update cart
      	Cart::update($rowId,$qty);
      echo "Cart updated successfully";

      return view('products/cart');
    }



public function removeItem($id){
	Cart::remove($id);

	return back();
	
}
}
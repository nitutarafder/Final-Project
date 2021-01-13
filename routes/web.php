<?php


use App\Product;

use App\User;
use App\Category;
use App\Type;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function (){

	$product = Product::all();
	$type = Type::all();
  
   $tob_products = Product::where('product_quality','=','hot deals')->paginate(4);
    
 $categorys =Category::all();

	return view('welcome',compact('product','categorys','tob_products'));

});



//testing purpose



Route::get('/addtocart/',function (){

    return view('products/add_to_cart');

});

Route::get('/cart_product/',function (){

    return view('products/cart');

});






//testing purpose end







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/', 'HomeController@index');

// product controller route 




// Route::get('category/','productsController@index');

// Route::get('category/all','productsController@product_categories');
// Route::get('type/','productsController@type_and_products');
// Route::get('type/','productsController@add_to_cart');







Route::resource('/product','UserProductController');
Route::get('search','UserProductController@search');

Route::get('/product/title/{title}','UserProductController@getProductByTitle');
Route::get('/product/category/{id}','UserProductController@getProductByCategory');
Route::get('/product/discount/product','UserProductController@getDiscountProduct');



// cart product cart product cart product






Route::get('cart/','cartController@index');

Route::get('cart/add/{id}','cartController@addItem');

Route::get('cart/remove/{id}','cartController@removeItem');

Route::get('cart/update/','cartController@updateCart');




// cart product end here



// checkout


Route::get('checkout/','CheckoutController@index');
Route::post('confirm/','CheckoutController@placeOrder');

// Route::get('test',function(){

// 	return User::with('orders')->get();

// });


 //checkout end





// orders Controller


Route::get('admin/orders/','OrderController@index');
Route::get('admin/archive/','OrderController@orderArchiveDetails');        

Route::get('admin/orders/{id}','OrderController@orderDetails');

Route::get('admin/orders/confirm/{id}','OrderController@confirm_orders');
Route::get('orders/details/{id}','OrderController@UserOrderDetails');
Route::get('orders/pdf/{id}','OrderController@make_receipt');

Route::get('order/address/edit/{id}','OrderController@OrderAddressEdit');

Route::post('order/address/update/{id}','OrderController@OrderAddressUpdate');


// orders controller end




//user Controller

Route::get('profile','UserController@index');
//









Route::group(['middleware'=>['admin']],function (){





    Route::get('admin/',function(){
        // return view('welcome');
        return view('admin.index');
    });



Route::resource('admin/users','AdminUsersController');

Route::get('admin/order/users/{id}','AdminUsersController@show_order_user');

Route::resource('admin/categories','AdminCategoriesController');


Route::post('admin/products/type','AdminProductController@type_view');

//Route::resource('admin/products','AdminProductController');
Route::resource('admin/products','AdminProductController');


Route::resource('admin/types','AdminTypesController');








});








//payment method

Route::get('/nexus','paymentController@nexusPay');









//Route::get('/ajax-subcat',function (){
//
//    $cat_id = Input::get('cat_id');
//
//    $types = Type::where('category_id','=',$cat_id)->get();
//
//    return Respnose::json($types);
//
//});

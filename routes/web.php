<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\ProductController;
use Facade\Ignition\Middleware\AddLogs;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//*********************************
//  Admin Part
//********************************
Route::get('/admin/login', function () {
    if(session()->has('email') )
    {  
        return redirect('admin/index');
    }
    return view('admin/login');
});
Route::get('/admin/logout', function () {
    if(session()->has('email') )
    {  
        session()->pull('email');
        session()->pull('aName');
        return view('admin/login');
    }
    return view('admin/login');
});
Route::get('/admin/Signup', function () {
    if(session()->has('email') )
    {  
        return view('admin/index');
    }
    return view('admin/signup');
});
Route::get('/admin/index', function () {
    if(session()->has('email') )
    {  
        return redirect('/admin/showStore');
    }
    return view('admin/login');
});
Route::get('/admin/customer', function () {
    if(session()->has('email') )
    {  
        return redirect('/admin/customer_show');
    }
    return view('admin/login');
});
Route::get('/admin/seller', function () {
    if(session()->has('email') )
    {  
        return redirect('/admin/sellerShow');
    }
    return view('admin/login');
});
Route::get('/admin/Addstore', function () {
    if(session()->has('email') )
    {  
        return view('admin/Addstore');
    }
    return view('admin/login');
});

//get data from data base and redirect to view

// get data from signup page
Route::post('/Signup',[AdminController::class,'Signup']);
Route::post('/admin/Login',[AdminController::class,'Login']);
Route::get('/admin/showStore',[AdminController::class,'ShowStore']);
Route::get('/admin/DeleteStore/{id}',[AdminController::class,'DeleteStore']);
Route::get('/admin/ShareStore/{id}',[AdminController::class,'ShareStore']);
Route::get('/admin/StopSharing/{id}',[AdminController::class,'Stop_Store_Sharing']);
Route::post('/admin/NewStore',[AdminController::class,'NewStore']);
Route::get('/admin/Profile',[AdminController::class,'ShowProfile']);
Route::get('/admin/customer_show',[AdminController::class,'Customer_show']);
Route::get('/admin/sellerShow',[AdminController::class,'ShowSeller']); 
Route::get('/admin/DeleteCustomer/{id}',[AdminController::class,'DeleteCustomer']);
// *********************
// Customer Part
// *********************

Route::get('/index', function () {
        return view('customer/index');
        });
Route::get('/customer/stores', function () {
    return redirect('customer/Stores_show');
    });

Route::get('/customer/products', function () {
    return redirect('/customer/Product_show');
    });
Route::get('/customer/cart', function () {
    return redirect('/customer/show_cart');
});

Route::get('/customer/login', function () {
    if(session()->has('cemail'))
    {     
        return redirect('/customer/Addcart');
    }
    else{
        return view('customer/login');
    }
});

Route::get('/customer/signup', function () {
    if(session()->has('cemail'))
    {
        return view('customer/index');
    }
    else{
        return view('customer/signup');
    }
});

Route::get('/customer/logout', function () {
    if(session()->has('cemail') )
    {  
        session()->pull('cemail');
        session()->pull('Name');
        return view('customer/index');
    }
    return view('customer/index');
});

// Route::get('/customer/showCart', function () {
//     if(session()->has('cemail') )
//     {  
//         return redirect('/customer/cart');
//     }
//     return view('customer/index');
// });
Route::get('/customer/store_cartlist', function () {
    if(session()->has('cemail') )
    {  
        return redirect('/customer/cartlistall');
    }
    return view('customer/index');
});

// Get Data from Tables
Route::get('/customer/Product_show',[ProductController::class,'ProductShow']);
Route::get('/customer/Stores_show',[StoreController::class,'Show_Stores']);
Route::get('/customer/showproduct/{id}',[ProductController::class,'Store_ProductShow']);
Route::get('/customer/Addcart/{id}',[CustomerController::class,'Show_Addcart']);
Route::get('/customer/RemoveFromCart/{id}',[CustomerController::class,'RemoveItem']);

 Route::get('/customer/chekedout',[CustomerController::class,'CheckedOut']);
Route::get('/customer/cartlistall',[CustomerController::class,'Show_cartlistall']);
// Route::get('/customer/cart',[CustomerController::class,'cartAllitems']);
Route::POST('/customer/Addtocart',[CustomerController::class,'Add_to_cart']);
Route::post('/customer/Login',[CustomerController::class,'Login']);
Route::post('/customer/SignUp',[CustomerController::class,'SignUp']);
// *********************
// Store/Seller Part
// *********************
Route::get('/store/index', function () {
    if(session()->has('store_code') )
    {  
        return redirect('/store/show_product');
    }
    return view('store/login');
});

Route::get('/store/signup', function () {
    if(session()->has('store_code') )
    {  
        return redirect('/store/show_product');
    }
    return view('store/signup');
});
Route::get('/store/login', function () {
    if(session()->has('store_code') )
    {  
        return redirect('/store/show_product');
    }
    return view('store/login');
});

Route::get('/store/product_info/{id}', function ($id) {
    if(session()->has('store_code') )
    {  
        return view('/store/Product_Info',['data'=>$id]);
    }
    return view('store/login');
});
Route::get('/store/logout', function () {
    if(session()->has('store_code') )
    {  
        session()->pull('store_code');
        session()->pull('Name');
        return view('store/login');
    }
    return view('store/login');
});


Route::get('/store/AddProduct', function () {
    if(session()->has('store_code') )
    {  
        return view('/store/addproduct');
    }
    return view('store/signup');
});
Route::get('/store/ShowTheOrder', function () {
    if(session()->has('store_code') )
    {  
        return redirect('/store/showmyorderlist');
    }
    return view('store/signup');
});
// 
Route::get('/store/show_product',[StoreController::class,'show_products']);
Route::post('/store/login',[StoreController::class,'Login']);
Route::POST('/store/Registered',[StoreController::class,'Registerd']);
Route::post('/store/addnewproduct',[StoreController::class,'AddProduct']);
Route::get('/store/Delete/{id}',[StoreController::class,'DeleteProduct']);
Route::POST('/store/productinformation',[ProductController::class,'productinformation']);
Route::get('/store/ShowOrder/{id}',[StoreController::class,'ShowOrder']);
Route::get('/store/showmyorderlist',[StoreController::class,'ShowOrderList']);
Route::get('/store/OrderDelivered/{id}',[StoreController::class,'OrderDelivered']);
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Store;
use App\Models\Product;
use App\Models\ProductInfo;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //show Product
    function ProductShow()
    {  
        $data = DB::select("select * from Products where Total_Quantity>0");
        if(count($data) > 0)
        {
            return view('customer/Products',['collection'=>$data]);
        }
        else
        {
            return view('Customer/Products',['collection'=>$data]);
        }
    }

    //show Product for each store
    function  Store_ProductShow($id)
    {  
        $data = Product::where('Store_id',$id)->get();
        if(count($data) > 0)
        {
            return view('customer/Products',['collection'=>$data]);
        }
        else
        {
            return view('Customer/Products',['collection'=>$data]);
        }
    }

    //product information
    function productinformation(Request $req)
    {   
            $member =new ProductInfo;
            $member->Product_id=$req->myproduct;
            $member->Size=$req->size;
            $member->Color=$req->color;
            $member->Quantity=$req->quantity;
            $member->save();
            return redirect('/store/show_product');
    }


   
}

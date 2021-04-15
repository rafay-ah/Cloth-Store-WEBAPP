<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Store;
use App\Models\Product;
use App\Models\Purchased;
use Illuminate\Support\Facades\DB;
class StoreController extends Controller
{
    //Register the store
    function Registerd(Request $req)
    {   
        $this->validate($req,[
            'store'=> 'required',
            'store_code'=> 'required',
            'seller'=> 'required',
            'email'=>'required',
            'phone'=> 'required',
            'password'=> 'required',
            'image'=>'image|required'
        ]);
            $member= new Store;
            if($req->has('image'))
        {
            $file =$req->image;
            $filename=$file->getClientOriginalName();
            $member->image=$filename;
            $file->move('uploads',$filename);
        }
            $member->Store_Name=$req->store;
            $member->Store_Code=$req->store_code;
            $member->Seller_Name=$req->seller;
            $member->Phone=$req->phone;
            $member->Email=$req->email;
            $member->password=$req->password;

            $exist = DB::table("Stores")->where('Store_Code',$req->store_code)->first();
           if ($exist != $req->store_code)
           {
            $inserted = $member->save();
            if($inserted)
            {
                return view('/store/login');//->with('msg','Acount have been created succssfulyy!');
            }
           }else
           {
            return redirect('/store/signup')->with('msg','Faild to create Store Account,Store_Code Already Exist!');
           }
    }
    // show all stores

    function Show_Stores()
    {
        $data = DB::select("select * from Stores where Activeted = 1");
        if(count($data) > 0)
        {
            return view('/customer/stores',['collection'=>$data]);
        }
        else
        {
            return view('/customer/stores',['collection'=>$data]);
        }
    }

    // show all product to stores
    function show_products()
    {
        $store_code = session('store_code');
        $id = Store::where('Store_Code',$store_code)->get()->first();
        $all = Product::all();
        $allstore = Store::all();
        if(count($allstore) > 0)
        {
            $data = DB::select("select * from products where store_id = '$id->id'");
            if (count($all) > 0)
            {
            if(count($data) > 0)
            {
                return view('/store/index',['collection'=>$data]);
            }
            else
            {
                return view('/store/index',['collection'=>$data]);
            }
        }else
        {
            return view('/store/index',['collection'=>$data]);//->with('msg','No Product is Available!');;
        }
    }
        else
        {
            return view('/store/login');
        }
        }
        // view each stores
        function View_Stores($id)
        {
            $data = DB::select("select * from Products where Activeted = 1");
            if(count($data) > 0)
            {
                return view('/customer/stores',['collection'=>$data]);
            }
            else
            {
                return view('/customer/stores',['collection'=>$data]);
            }
        
    
    }

    //login admin
    function Login(Request $r)
    {      
            $store_code=$r->store_code;
            $password=$r->password;
            $data = Store::where('Store_Code',$store_code)->where('password',$password)->get();
            if(count($data)>0)
            {   $r->session()->put('store_code',$store_code);
                $name = DB::table("stores")->where('Store_Code',$store_code)->first();
                $r->session()->put('Name',$name->Seller_Name);
               return redirect('/store/index');
            }
            else
            {
                return redirect('/store/login')->with('msg','StoreCode or Password is Wrong!');
            }
    }
    //add new product
    function AddProduct(Request $req)
    {
        
        $this->validate($req,[
        
            'image'=>'image|required'
        ]);
            $member= new Product;
            if($req->has('image'))
            {
            $file =$req->image;
            $filename=$file->getClientOriginalName();
            $member->image=$filename;
            $file->move('uploads',$filename);
            }
            $store_code = session('store_code');
            // $data = DB::select("Select id from Stores where Store_Code='$store_code'");
            $data = DB::table("Stores")->where('Store_Code',$store_code)->first();
            $member->Store_id =$data->id;
            $member->Product_Name=$req->productname;
            $member->Product_Company=$req->productcompany;
            $member->Category=$req->category;
            $member->Type=$req->type;
            $member->Size_Range=$req->size;
            $member->Price=$req->price;
            if ($req->discount != NULL)
            {
                if ($req->discount == "Yes")
                {
                    $member->Discount=True;
                }else
                {
                    $member->Discount=False;
                }
            }
            if ($req->discount_amount != NULL)
            {
                $member->Discount_amount=$req->discount_amount;
            }
            $member->Total_Quantity=$req->quantity;

            $inserted = $member->save();
            if($inserted)
            {
                return redirect('/store/index');//->with('msg','You have been Add Item succssfulyy!');
            } 
    }

    //delete product from shop
    function DeleteProduct($id)
    {
         // $imagePath = Store::select('image')->where('id', $id)->first();
         $imagePath = Product::select('image')->where('id', $id)->first();

         $filePath = 'uploads/'.$imagePath->image;
 
                   if (file_exists($filePath)) {
                        unlink($filePath);
                          }
         Product::where('id', $id)->delete();
         return back();
    }
    function ShowOrder($id)
    {
        $data = Purchased::where('Product_id',$id)->where('Delivery',0)->get();
        return view('store/ViewOrder',['collection'=>$data]);
    }
    function ShowOrderList()
    {   $store_code =session('store_code');
        $mydata = Store::where('Store_Code',$store_code)->first();
        $data = Product::where('store_id',$mydata->id)->get();
        return view('store/Orders',['collection'=>$data]);
    }
    

    function OrderDelivered($id)
    {
        $data = Purchased::find($id);
        $data->Delivery = 1;
        $data->save();
        return back();
    }
}

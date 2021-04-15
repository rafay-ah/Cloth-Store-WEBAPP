<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Store;
use App\Models\Customer;
use App\Models\Purchased;
use App\Models\Product;
use App\Models\ProductInfo;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    //signup
    function SignUp(Request $req)
    {
            $member = new Customer;
            $member->Name=$req->username;
            $member->email=$req->email;
            $member->phone=$req->phone;
            $member->password=$req->password;
            $member->address= $req->address;
            $member->Zip= $req->zip;
            $exist = DB::table("customers")->where('email',$req->email)->get()->first();
            if ($exist != $req->email)
            {
             $inserted = $member->save();
             if($inserted)
             {
                 return view('Customer/signup')->with('msg','Acount have been created succssfulyy!,Please Login!');
             }
            }else
            {
             return view('Customer/signup')->with('msg','Faild to Create Account! Email Already Exist / Invalid');
            }     
    }
    //login customers
    function Login(Request $r)
    {
        $email=$r->email;
        $password=$r->password;
        $data = customer::where('email',$email)->where('password',$password)->get();
        if(count($data)>0)
        {   $r->session()->put('cemail',$email);
            $name = DB::table("customers")->where('email',$email)->first();
            $r->session()->put('Name',$name->Name);
           return redirect('/customer/products');
        }
        else{
            return view('Customer/login')->with('msg','Emial or Password is Wrong!');
        }
    }
    //show cart to choose size and color
    function Show_Addcart($id,Request $r)
    {       $member = Product::find($id); 
            $r->session()->put('myid',$id);
            $r->session()->put('image',$member->image);
            $r->session()->put('price',$member->Price);
            
            $r->session()->put('pname',$member->Product_Name);
            $data = ProductInfo::where('Product_id',$id)->get();
            if(count($data)>0)
            {   
                // $r->session()->put('pid',$data->id);
               return view('customer/Addcart',['collection'=>$data]);
            }
            else{
                return view('customers/Addcart',['collection'=>$data]);
            }
    }

    function Add_to_cart(Request $r)
    {
            $order = new Purchased;
            $data= DB::table("customers")->where('email',session('cemail'))->first();
            $order->Customer_id = $data->id;
            $order->Product_id = $r->id;
            $order->ProductName=$r->name;
            $order->checkout=0;
            $order->CustomerName=$data->Name;
            $order->customerAddress=$data->address .'zip'. $data->Zip;
            // $eamil = DB::table("customers")->where('email',session('cemail'))->first();
            $order->Size_and_color= $r->menu;
            $product = Product::find($r->id);
            $order->Price = $product->Price;
            $order->Quantity_number = 1;
            if($product->Discount == False)
            {
                $order->Discount = $product->Discount;
            }else
            {
                $order->Discount = True;
            }
            $order->Delivery=False;
            $product->Total_Quantity = $product->Total_Quantity-1;
            $product->save();
            $order->save();
            return redirect('/customer/products');
    }

    function Show_cartlistall()
    { 
        $email = session('cemail');
        $customer = DB::table("customers")->where('email',$email)->first();
        $data = DB::table("Purchaseds")->where('Customer_id',$customer->id)->where('Delivery',0)->get();
        // $name = DB::table("Product")->where('Product_id',$data->id)->get();
        return view('customer/cart',['collection'=>$data]);
    }

    function RemoveItem($id)
    {
        $data = Purchased::find($id);
        $data->delete();
        return back();
    }
    function CheckedOut()
    {
        echo "checked out";
        $email = session('cemail');
        $customer = DB::table("customers")->where('email',$email)->first();
        $data = Purchased::where('customer_id',$customer->id)->where('checkout',0)->get();
        foreach($data as $result){
            $result->checkout = 1;
            $result->save();
        }
        
            return back();
        }

  
}

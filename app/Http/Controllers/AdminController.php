<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //Sign Up
    function Signup(Request $req)
    {      
        $this->validate($req,[
            'username'=> 'required',
            'email'=>'required',
            'password'=> 'required'
        ]);
            $member= new admin;
            $member->Name=$req->username;
            $member->Email=$req->email;
            $member->password=$req->password;

            $exist = DB::table("Admins")->where('Email',$req->email)->first();
           if ($exist != $req->email)
           {
            $inserted = $member->save();
            if($inserted)
            {
                return redirect('/admin/Signup')->with('msg','Acount have been created succssfulyy!,Please Login!');
            }
           }else
           {
            return redirect('/admin/Signup')->with('msg','Faild to Create Account! Email Already Exist / Invalid');
           }
            
    }
    //login admin
    function Login(Request $r)
    {      
            $email=$r->email;
            $password=$r->password;
            $data = admin::where('email',$email)->where('password',$password)->get();
            if(count($data)>0)
            {   $r->session()->put('email',$email);
                $name = DB::table("admins")->where('Email',$email)->first();
                $r->session()->put('aName',$name->Name);
               return redirect('/admin/index');
            }
            else{
                return redirect('/admin/login')->with('msg','CNIC or Password is Wrong!');
            }
    }
    //ADD New Store
    function NewStore(Request $req)
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
                return redirect('/admin/Addstore')->with('msg','Acount have been created succssfulyy!');
            }
           }else
           {
            return redirect('/admin/Addstore')->with('msg','Faild to Store Account,Store_Code Already Exist!');
           }
    }

    // show stores
    function ShowStore()
    {  
        $data = Store::all();
        if(count($data) > 0)
        {
            return view('/admin/index',['collection'=>$data]);
        }
        else
        {
            return view('/admin/index',['collection'=>$data]);
        }
    }
//show seller
    function ShowSeller()
    {
        $data = Store::all();
        if(count($data) > 0)
        {
            return view('/admin/Seller',['collection'=>$data]);
        }
        else
        {
            return view('/admin/Seller',['collection'=>$data]);
        }
    }
    function Customer_show()
    {
        $data = Customer::all();
        if(count($data) > 0)
        {
            return view('/admin/customer',['collection'=>$data]);
        }
        else
        {
            return view('/admin/customer',['collection'=>$data]);
        }
    }
    //Delete Store
    function DeleteStore($id)
    {
        // $imagePath = Store::select('image')->where('id', $id)->first();
        $imagePath = Store::select('image')->where('id', $id)->first();

        $filePath = 'uploads/'.$imagePath->image;

                  if (file_exists($filePath)) {
                       unlink($filePath);
                         }
        Store::where('id', $id)->delete();
        return back();
    }
    function DeleteCustomer($id)
    {
        Customer::where('id', $id)->delete();
        return back();
    }
    //Share Store And Stop shareing
    function ShareStore($id)
    {
        $store = Store::find($id);
        $store->Activeted = True;
        $update = $store->save();
           if($update)
            {
               return back();
            }
    }
    function Stop_Store_Sharing($id)
    {
        $store = Store::find($id);
        $store->Activeted = False;
        $update = $store->save();
           if($update)
            {
               return back();
            }
    }

    //show admin Profile
    function ShowProfile()
    {   
        $email = session('email');
        $data = DB::select("select * from Admins where Email= '$email'");
        return view("/admin/profile",['Profile'=>$data]);
    }

}

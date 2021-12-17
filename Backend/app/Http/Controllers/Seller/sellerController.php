<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Hash;

class sellerController extends Controller
{
  

    public function Register(){
        return view('seller.Login&Register.register');

    }

    public function registerStore(Request $request){
       
        $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/(01)[0-9]{9}/|size:11|unique:customers',
                'email' => 'required|email|unique:customers',
                'address' => 'required',
                'city'=>'required',
                'image'=>  'image|mimes:jpeg,png,jpg,gif|max:2048',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required|min:6',
    
              
            ]);
    
            $seller = new Seller();
            $seller->name = $request->name;
            $seller->phone = $request->phone;
            $seller->email = $request->email;
            $seller->address = $request->address;
            $seller->city = $request->city;
            $seller->status = 1;
            if ($request->hasFile('image')) {
                $extension = $request->image->getClientOriginalExtension();
                $filename = rand(10000, 99999) . time() . '.' . $extension;
                $request->image->move('uploads/seller_image/', $filename);
                $seller->image = $filename;
            };

            $seller->password = Hash::make($request->password);
    
            $seller->save();

            return redirect()->route('seller.login')->with('success', 'Registration Success! Please Login');
    }



    public function dashboard(){
        return view('seller.dashboard.dashboard');
    }
}

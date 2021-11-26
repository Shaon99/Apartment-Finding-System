<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Customer;
use Hash;

class frontloginController extends Controller
{
    public function register(){
        $footer = Footer::find(1);
        return view('Frontend.login.register')->with('footer', $footer);
    }


    public function registerStore(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/|size:11|unique:customers',
            'email' => 'required|email|unique:customers',
            'address' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',        
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->status = "Open";
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->password = Hash::make($request->password);

        $customer->save();
        return redirect()->route('customer.login')->with('success', 'Registration Success! Please Login');
    }
}

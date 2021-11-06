<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use Hash;

class profileUserController extends Controller
{
    public function profile(){
        
        return view('Frontend.profile.index');
    }

    public function updateProfile(Request $request)
    {
        // to update customer
        $customer = Customer::find(Auth::id());
        

        $this->validate($request, [
            'name' => 'required',
            'email' => ($request->email != $customer->email ? 'required|email|unique:customers,email,':''),
            'phone' =>  ($request->phone != $customer->phone ? 'required|regex:/(01)[0-9]{9}/|size:11|unique:customers,phone,':''),
            // if the password field is blank, no validation applied
            'password' => ($request->password!=''?'min:6|confirmed':''),
            'address' => 'required',
            
        ]);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request-> phone;
        $customer->address = $request-> address;
        // if there is password & not blank then insert password
        if($request->has('password') && !empty($request->password)) {
            $customer->password = Hash::make($request->password);
        }


        $customer->save();
        return redirect()->back()->with('message','Proofile Update Successfully');;
    }
}

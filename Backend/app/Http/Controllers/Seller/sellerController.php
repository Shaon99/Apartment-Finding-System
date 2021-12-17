<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Apartment;
use App\Models\Gallery;
use Hash;
use Auth;
use Devfaysal\BangladeshGeocode\Models\District;



class sellerController extends Controller
{
  

    public function Register(){        

        return view('seller.Login&Register.register');

    }

    public function registerStore(Request $request){
       
        $request->validate([
                'name' => 'required',
                'phone' => 'required|regex:/(01)[0-9]{9}/|size:11|unique:sellers',
                'email' => 'required|email|unique:sellers',
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
            $seller->status = 0;

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
        $apartment=Apartment::count();
        return view('seller.dashboard.dashboard',compact('apartment'));
    }

    public function profile(){

        $seller = Seller::find(Auth::id());

        return view('seller.profile.profile',compact('seller'));

    }

    public function updateProfile(Request $request)
    {
      

        $seller = Seller::find(Auth::id());

        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;


        if ($request->has('password') && !empty($request->password)) {
            $seller->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $this->removeImage($seller);
            $file = $request->file('image');
            $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/seller_image'), $filename);
            $seller->image = $filename;
        }

        $seller->save();
        return redirect()->back()->with('message','Seller Profile Updated');
    }
    
    
    
     private function removeImage($seller)
    {
        if($seller->image != "" && \File::exists('uploads/seller_image/' . $seller->image)) {
            @unlink(public_path('uploads/seller_image/' . $seller->image));
        }
    }

    
}

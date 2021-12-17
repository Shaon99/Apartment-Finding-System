<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Manager;
use App\Models\Seller;
use App\Models\Gallery;
use Devfaysal\BangladeshGeocode\Models\District;
use Auth;

class managerController extends Controller
{
    public function dashboard(){
        $apartment=Apartment::where('city',Auth::user()->city)->count();
        $seller=Seller::where('city',Auth::user()->city)->count();
        return view('manager.dashboard',compact('apartment','seller'));
    }


    public function apartment(){
        $apartment = Apartment::where('city',Auth::user()->city)->get();
        return view('manager.apartment.view_apartment', compact('apartment'));
    }

    public function apartmentEdit($id)
    {

        $apartment = Apartment::find($id);
        $district = District::all();
        $gallery = Gallery::where('apartment_id', $id)->get();
        return view('manager.apartment.edit_apartment', compact('apartment', 'district', 'gallery'));
    }


    public function updateApartment(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required|regex:/(01)[0-9]{9}/|size:11',
            'flat_size' => 'required',
            'price' => 'required|gte:0',
            'bed' => 'required',
            'drawing' => 'required',
            'dining' => 'required',
            'kitchen' => 'required',
            'washroom' => 'required',
            'select' => 'required',
            'text' => 'required',
            'city' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $apartment = Apartment::find($id);

        $apartment->apartment_name = $request->name;
        $apartment->address = $request->address;
        $apartment->contact = $request->contact;
        $apartment->flat_size = $request->flat_size;
        $apartment->price = $request->price;
        $apartment->bed = $request->bed;
        $apartment->drawing = $request->drawing;
        $apartment->dining = $request->dining;
        $apartment->kitchen = $request->kitchen;
        $apartment->washroom = $request->washroom;
        $apartment->rent_sell = $request->select;
        $apartment->text = $request->text;
        $apartment->city = $request->city;

        $photo = $apartment->image;
        $delete_path = 'uploads/apartment_image/' . $photo;

        if ($request->hasFile('image')) {

            if (!empty($photo)) {

                unlink($delete_path);

            }

            $image = $request->file('image');
            $extension = $request->image->getClientOriginalExtension();
            $filename = rand(10000, 99999) . time() . '.' . $extension;
            $request->image->move('uploads/apartment_image/', $filename);
            $apartment->image = $filename;
            
        };
        $apartment->save();

        $delete_path = "";
        if ($request->file('image_file')) {
            $gallery = Gallery::where('apartment_id', '=', $id)->get();

            foreach ($gallery as $data) {
                $gallery_image = $data->image_file;
                $delete_path = 'uploads/galleries/' . $gallery_image;

                if (!empty($gallery_image)) {
                    unlink($delete_path);

                }
            }
            $delete = Gallery::where('apartment_id', '=', $id)->delete();
        }

        $count = 1;
        if ($request->hasfile('image_file')) {
            foreach ($request->file('image_file') as $file) {

                $extension = $file->getClientOriginalExtension();
                $name = rand(10000, 99999) . time() . '.' . $extension;
                $file->move(public_path() . '/uploads/galleries', $name);
                $file = new Gallery;
                $file->image_file = $name;
                $file->apartment_id = $apartment->id;
                $file->save();
                $count++;

            }
        }

      

        return redirect()->back()->with('info', 'Apartment Edited Successfully');

    }

    public function detailsApartment($id)
    {

        $apartment = Apartment::find($id);
        $district = District::all();
        $gallery = Gallery::where('apartment_id', $id)->get();
        return view('manager.apartment.apartmentdetails', compact('apartment', 'district', 'gallery'));
    }


    
    public function statusUpdate(Request $request, Apartment $id){
       
        $id->status = $request->status;
        $id->save();

        return response()->json('Status Successfully Updated!!!');
    
}

public function delete(Apartment $id)
{
    $id->delete();

    return response()->json('Apartment successfully Deleted!!!');
}

public function seller(){  
    $seller=Seller::where('city',Auth::user()->city)->get();
    return view('manager.seller.index',compact('seller'));
}

public function statusUpdateSeller(Request $request, Seller $id){
       
    $id->status = $request->status;
    $id->save();

    return response()->json('Status Successfully Updated!!!');

}

public function profile(){

    $seller = Manager::find(Auth::id());

    return view('manager.profile.profile',compact('seller'));

}

 
private function removeImage($seller)
{
    if($seller->image != "" && \File::exists('uploads/manager_image/' . $seller->image)) {
        @unlink(public_path('uploads/manager_image/' . $seller->image));
    }
}


public function updateProfile(Request $request)
{
  

    $seller = Manager::find(Auth::id());

    $seller->name = $request->name;
    $seller->email = $request->email;
    $seller->phone = $request->phone;
    $seller->city = $request->address;


    if ($request->has('password') && !empty($request->password)) {
        $seller->password = bcrypt($request->password);
    }

    if ($request->hasFile('image')) {
        $this->removeImage($seller);
        $file = $request->file('image');
        $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/manager_image'), $filename);
        $seller->image = $filename;
    }

    $seller->save();
    return redirect()->back()->with('message','Manager Profile Updated');
}

}

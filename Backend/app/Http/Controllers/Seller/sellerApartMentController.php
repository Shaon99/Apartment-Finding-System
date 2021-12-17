<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Gallery;
use Auth;
use Devfaysal\BangladeshGeocode\Models\District;
use Illuminate\Http\Request;

class sellerApartMentController extends Controller
{
    public function Apartment()
    {
        $district = District::all();
        return view('seller.apartment.add_apartment', compact('district'));
    }

    public function storeApartment(Request $request)
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
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ],[
            'type.required'=>'Slect a Apartment Type',
        ]);

        $apartment = new Apartment();

        $apartment->user_id = Auth::id();
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
        $apartment->type = $request->type;


        if ($request->hasFile('image')) {
            $extension = $request->image->getClientOriginalExtension();
            $filename = rand(10000, 99999) . time() . '.' . $extension;
            $request->image->move('uploads/apartment_image/', $filename);
            $apartment->image = $filename;
        };

        $apartment->save();

        $count = 1;
        if ($request->hasfile('image_file')) {
            foreach ($request->file('image_file') as $file) {

                $name = rand(10000, 99999) . time() . '.' . $extension;
                $file->move(public_path() . '/uploads/galleries', $name);
                $file = new Gallery;
                $file->image_file = $name;
                $file->apartment_id = $apartment->id;
                $file->save();
                $count++;

            }
        }

        return redirect()->back()->with('message', 'Apartment Added Successfully');

    }

    public function viewApartment()
    {

        $apartment = Apartment::where('user_id', Auth::id())->get();
        return view('seller.apartment.view_apartment', compact('apartment'));
    }

    public function apartmentEdit($id)
    {

        $apartment = Apartment::find($id);
        $district = District::all();
        $gallery = Gallery::where('apartment_id', $id)->get();
        return view('seller.apartment.edit_apartment', compact('apartment', 'district', 'gallery'));
    }


    public function detailsApartment($id)
    {

        $apartment = Apartment::find($id);
        $district = District::all();
        $gallery = Gallery::where('apartment_id', $id)->get();
        return view('seller.apartment.apartmentdetails', compact('apartment', 'district', 'gallery'));
    }


    public function statusUpdate(Request $request, Apartment $id){
       
        $id->status = $request->status;
        $id->save();

        return response()->json('Status Successfully Updated!!!');
    
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

        $apartment->user_id = Auth::id();
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

        $apartment->user_id = Auth::user()->id;
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

}

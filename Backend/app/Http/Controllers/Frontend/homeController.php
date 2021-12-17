<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\Interior;
use App\Models\Commercial;
use Devfaysal\BangladeshGeocode\Models\District;



class homeController extends Controller
{
   public function index(){
       $feature=Apartment::orderBy('id', 'DESC')->with('seller')->where('feature','1')->limit(6)->get();
       $apartment=Apartment::orderBy('id', 'DESC')->with('seller')->limit(10)->get();
      
        return view('Frontend.home.index',compact('feature','apartment'));
    }


    public function Interior(){
        return view('Frontend.interior_service.index');

    }

    public function residentialInterior(){
        return view('Frontend.interior_service.residential');

    }
    public function commercialInterior(){
        return view('Frontend.interior_service.commercial');

    }

    public function detailsApartment($id){
        $apartment=Apartment::with('seller')->find($id);
        $gallery=Gallery::where('apartment_id',$apartment->id)->get();
        $Review=Review::where('product_id',$id)->get();

        return view('Frontend.home.apartment_details',compact('apartment','gallery','Review'));

    }

    public function featureApartment(){
        $feature=Apartment::with('seller')->where('feature','1')->get();

        return view('Frontend.home.featureall',compact('feature'));
    }

    public function allApartment(){
        $apartment=Apartment::with('seller')->get();

        return view('Frontend.home.allproperty',compact('apartment'));
    }

    public function sellApartment(){
        $apartment=Apartment::with('seller')->where('rent_sell','1')->get();

        return view('Frontend.home.sell',compact('apartment'));
    }

    public function rentApartment(){
        $apartment=Apartment::with('seller')->where('rent_sell','0')->get();

        return view('Frontend.home.rent',compact('apartment'));
    }


    public function review(Request $request){
        $Review = new Review();
        $Review->comment = $request->comment;
        $Review->name = $request->name;
        $Review->email = $request->email;
        $Review->product_id = $request->product_id;
        $Review->save();

        return redirect()->back()->with('message','Reviewe Post Successfully');
    }

    public function interiors(Request $request){
        $interior = new Interior();
        $interior->name = $request->name;
        $interior->email = $request->email;
        $interior->service = $request->service; 
        $interior->phone = $request->phone;
        $interior->message = $request->message;
        $interior->save();

        return redirect()->back()->with('message','Post Successfully! we will get back to you');
    }
    public function commercials(Request $request){
        $commercial = new Commercial();
        $commercial->name = $request->name;
        $commercial->email = $request->email;
        $commercial->service = $request->service; 
        $commercial->phone = $request->phone;
        $commercial->message = $request->message;
        $commercial->save();

        return redirect()->back()->with('message','Post Successfully! we will get back to you');
    }

    public function Search(){
        $district = District::all();

        return view('Frontend.search',compact('district'));
    }

    public function searchResult(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'atype' => 'required',

        ], [
            'name.required' => 'Select a District',
            'type.required' => 'Select a Type',
            'atype.required' => 'Select a Type',
        ]);

        $city=$request->name;
        $type=$request->type;
        $atype=$request->atype;


        $apartment=Apartment::with('seller')->where('city',$city)->where('rent_sell',$type)->where('type',$atype)->get();

        return view('Frontend.searchappend',compact('apartment'));

    }
}

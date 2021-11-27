<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Gallery;

class homeController extends Controller
{
    public function index(){
        $footer = Footer::find(1);
        return view('Frontend.home.index')->with('footer', $footer);
        $feature=Apartment::with('seller')->where('feature','1')->limit(7)->get();   
        return view('Frontend.home.index',compact('feature'));
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
        return view('Frontend.home.apartment_details',compact('apartment','gallery'));

    }

    public function contact()
    {
        return view('Frontend.home.contact');
    }
    public function aboutUs()
    {
        return view('Frontend.home.about');
    }
}

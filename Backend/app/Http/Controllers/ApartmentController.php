<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Gallery;
use App\Models\Review;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Devfaysal\BangladeshGeocode\Models\District;

class ApartmentController extends Controller
{
    public function show(Request $req)
    {
        $apartmentList = Apartment::all();
        return view('Apartment.list')->with('list', $apartmentList);
    }
    public function block($ID, Request $req)
    {
        $apartment = Apartment::find($ID);
        if ($apartment->status == "1") {
            $apartment->status = "0";
            $apartment->updated_at = date('Y-m-d H:i:s', time());
            $apartment->save();
            $req->session()->flash('msg', 'This apartment has been blocked successfully!!...');
            return redirect()->route('Apartment.blockAll');
        }
        if ($apartment->status == "0") {
            $apartment->status = "1";
            $apartment->updated_at = date('Y-m-d H:i:s', time());
            $apartment->save();
            $req->session()->flash('msg', 'This apartment has been Unblocked successfully!!...');
            return redirect()->route('Apartment.All');
        }
    }

    public function blockAll()
    {
        $apartmentList = Apartment::all();
        return view('Apartment.blockApartment')->with('list', $apartmentList);
    }

    public function details($ID)
    {
        $apartment = Apartment::find($ID);
        //$district = District::all();
        $gallery = Gallery::where('apartment_id', $ID)->get();
        return view('Apartment.details', compact('apartment', 'gallery'));
    }

    public function recent()
    {
        $apartmentList = DB::table('apartments')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Apartment.filter')->with('list', $apartmentList);
    }

    public function last_week()
    {
        $apartmentList = DB::table('apartments')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('Apartment.filter')->with('list', $apartmentList);
    }

    public function last_month()
    {
        $apartmentList = DB::table('apartments')->whereBetween('created_at', [date('Y-m-d', strtotime('-30 days')), date("Y-m-d")])
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('Apartment.filter')->with('list', $apartmentList);
    }
}

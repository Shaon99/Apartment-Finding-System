<?php

namespace App\Http\Controllers;

use App\Models\Apartment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    public function show()
    {
        $apartmentList = Apartment::all();
        return view('Apartment.list')->with('list', $apartmentList);
    }
    public function block($ID, Request $req)
    {
        $apartment = Apartment::find($ID);
        if ($apartment->Status == "Open") {
            $apartment->Status = "Blocked";
            $apartment->save();
            $req->session()->flash('msg', 'This apartment has been blocked successfully!!...');
            return redirect()->route('Apartment.blockAll');
        }
        if ($apartment->Status == "Blocked") {
            $apartment->Status = "Open";
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
        $details = DB::select('SELECT * FROM apartment a, apartment_owner o WHERE a.Owner_ID = o.ID AND a.ID = ?', [$ID]);
        return view('Apartment.details')->with('details', $details);
    }
}

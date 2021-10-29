<?php

namespace App\Http\Controllers;

use App\Models\ApartmentOwner;
use App\Http\Requests\UpdateOwnerRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApartmentOwnerController extends Controller
{
public function show(){
    $OwnerList = ApartmentOwner::all();
    return view('ApartmentOwner.list')->with('list', $OwnerList);   
}

    public function edit($ID)
    {
        $owner = ApartmentOwner::find($ID);
        return view('ApartmentOwner.edit')->with('owner', $owner);
    }

    public function update($ID, UpdateOwnerRequest $req)
    {
        $owner = ApartmentOwner::find($ID);

        $owner->Username = $req->user_name;
        $owner->First_name = $req->first_name;
        $owner->Last_name = $req->last_name;
        $owner->Address = $req->address;
        $owner->Email = $req->email;
        $owner->Phone = $req->phone;
        $owner->Gender = $req->gender;
        $owner->Updated_at = date('Y-m-d H:i:s', time());

        $owner->save();

        $req->session()->flash('congratulations', 'Congratulations! information updated successfully!...');
        return view('ApartmentOwner.Edit')->with('owner', $owner);
    }

    public function block($ID, Request $req)
    {
        $owner = ApartmentOwner::find($ID);
        if ($owner->Status == "Open") {
            $owner->Status = "Blocked";
            $owner->save();
            $req->session()->flash('msg', 'This user has been blocked successfully!!...');
            return redirect()->route('ApartmentOwner.BlockedUser');
        }
        if ($owner->Status == "Blocked") {
            $owner->Status = "Open";
            $owner->save();
            $req->session()->flash('msg', 'This user has been Unblocked successfully!!...');
            return redirect()->route('ApartmentOwner.All');
        }
    }

    public function blockUser()
    {
        $ownerList = ApartmentOwner::all();
        return view('ApartmentOwner.blockUser')->with('list', $ownerList);
    }

    public function details($ID)
    {
        $details = DB::select('SELECT * FROM apartment a, apartment_owner o WHERE o.Apartment_ID = a.ID AND o.ID = ?', [$ID]);
        return view('ApartmentOwner.details')->with('details', $details);
    }
}

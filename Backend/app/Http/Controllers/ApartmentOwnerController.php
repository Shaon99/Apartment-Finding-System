<?php

namespace App\Http\Controllers;

use App\Models\ApartmentOwner;
use App\Models\Apartment;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOwnerRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApartmentOwnerController extends Controller
{
    public function show()
    {
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

        $owner->name = $req->name;
        $owner->address = $req->address;
        $owner->email = $req->email;
        $owner->phone = $req->phone;
        $owner->Updated_at = date('Y-m-d H:i:s', time());

        $owner->save();

        $req->session()->flash('congratulations', 'Congratulations! information updated successfully!...');
        return view('ApartmentOwner.Edit')->with('owner', $owner);
    }

    public function block($ID, Request $req)
    {
        $owner = ApartmentOwner::find($ID);
        if ($owner->status == "1") {
            $owner->status = "0";
            $owner->Updated_at = date('Y-m-d H:i:s', time());
            $owner->save();
            $req->session()->flash('msg', 'This user has been blocked successfully!!...');
            return redirect()->route('ApartmentOwner.All');
        }
        if ($owner->status == "0") {
            $owner->status = "1";
            $owner->Updated_at = date('Y-m-d H:i:s', time());
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
        $details = DB::select('SELECT * FROM apartments a, sellers o WHERE o.id = a.user_id AND o.id= ?', [$ID]);
        return view('ApartmentOwner.details')->with('details', $details);
    }

    public function delete($ID, Request $req)
    {
        $a_ID = DB::select('SELECT * FROM apartments a, sellers o WHERE o.id = a.user_id AND o.id= ?', [$ID]);
        if (ApartmentOwner::destroy($ID)) {
            if (Apartment::destroy($a_ID[0]->id)) {
                $req->session()->flash('msg', 'Congratulations! Deleted Successfully!!...');
                return redirect()->route('ApartmentOwner.All');
            } else {
                $req->session()->flash('msg', 'Error Ouuured, Delete failed!!...');
                return redirect()->route('ApartmentOwner.All');
            }
        } else {
            $req->session()->flash('msg', 'Error Ouuured!!...');
            return redirect()->route('ApartmentOwner.All');
        }
    }
    public function recent()
    {
        $OwnerList = DB::table('sellers')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('ApartmentOwner.filter')->with('list', $OwnerList);
    }

    public function last_week()
    {
        $OwnerList = DB::table('sellers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 7 days')), date("Y-m-d")])
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('ApartmentOwner.filter')->with('list', $OwnerList);
    }

    public function last_month()
    {
        $OwnerList = DB::table('sellers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('ApartmentOwner.filter')->with('list', $OwnerList);
    }
}

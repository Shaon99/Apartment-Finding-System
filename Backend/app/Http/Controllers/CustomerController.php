<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $CustomerList = Customers::all();
        return view('Customer.list')->with('list', $CustomerList);
    }
    public function blockUser()
    {
        $customerList = Customers::all();
        return view('Customer.blockUser')->with('list', $customerList);
    }
    public function recent()
    {
        $CustomerList = DB::table('customers')
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('Customer.filter')->with('list', $CustomerList);
    }

    public function last_week()
    {
        $CustomerList = DB::table('customers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 7 days')), date("Y-m-d")])
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('Customer.filter')->with('list', $CustomerList);
    }

    public function last_month()
    {
        $CustomerList = DB::table('customers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('Customer.filter')->with('list', $CustomerList);
    }

    public function edit($ID)
    {
        $customer = Customers::find($ID);
        return view('Customer.edit')->with('customer', $customer);
    }

    public function update($ID, UpdateCustomerRequest $req)
    {
        $customer = Customers::find($ID);

        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->email = $req->email;
        $customer->phone = $req->phone;
        $customer->updated_at = date('Y-m-d H:i:s', time());

        $customer->save();

        $req->session()->flash('congratulations', 'Congratulations! information updated successfully!...');
        return view('Customer.Edit')->with('customer', $customer);
    }

    public function block($ID, Request $req)
    {
        $customer = Customers::find($ID);
        if ($customer->status == "Open") {
            $customer->status = "Blocked";
            $customer->updated_at = date('Y-m-d H:i:s', time());
            $customer->save();
            $req->session()->flash('msg', 'This user has been blocked successfully!!...');
            return redirect()->route('Customer.All');
        }
        if ($customer->status == "Blocked") {
            $customer->status = "Open";
            $customer->updated_at = date('Y-m-d H:i:s', time());
            $customer->save();
            $req->session()->flash('msg', 'This user has been Unblocked successfully!!...');
            return redirect()->route('Customer.All');
        }
    }

    public function delete($ID, Request $req)
    {
        if (Customers::destroy($ID)) {
            $req->session()->flash('msg', 'Congratulations! Deleted Successfully!!...');
            return redirect()->route('Customer.All');
        } else {
            $req->session()->flash('msg', 'Error Ouuured!!...');
            return redirect()->route('Customer.All');
        }
    }
    public function details($ID, Request $req)
    {
        $customer = Customers::find($ID);
        return view('Customer.details')->with('customer', $customer);
    }
}

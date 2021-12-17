<?php

namespace App\Http\Controllers;

use App\Models\Customers;
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
        ->orderBy('Updated_at', 'desc')
        ->orderBy('Created_at', 'desc')
        ->get();
        return view('Customer.filter')->with('list', $CustomerList);
    }

    public function last_week()
    {
        $CustomerList = DB::table('customers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 7 days')), date("Y-m-d")])
        ->orderBy('created_at', 'desc')
        ->get();
        return view('Customer.filter')->with('list', $CustomerList);
    }

    public function last_month()
    {
        $CustomerList = DB::table('customers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])
        ->orderBy('created_at', 'desc')
        ->get();
        return view('Customer.filter')->with('list', $CustomerList);
    }
}

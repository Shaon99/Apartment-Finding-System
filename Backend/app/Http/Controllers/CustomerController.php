<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $CustomerList = Customer::all();
        return view('Customer.list')->with('list', $CustomerList);
    }
}

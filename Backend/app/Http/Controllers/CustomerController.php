<?php

namespace App\Http\Controllers;

use App\Models\Customers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $CustomerList = Customers::all();
        return view('Customer.list')->with('list', $CustomerList);
    }
}

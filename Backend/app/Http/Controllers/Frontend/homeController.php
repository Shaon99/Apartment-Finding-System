<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index(){
        return view('Frontend.home.index');
    }

    public function sell(){
        return view('Frontend.sell.index');
    }
}

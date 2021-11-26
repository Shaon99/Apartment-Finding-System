<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index(){
        $footer = Footer::find(1);
        return view('Frontend.home.index')->with('footer', $footer);
    }

    public function sell(){
        return view('Frontend.sell.index');
    }
}

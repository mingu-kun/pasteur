<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    public function contact()
    {
        return view('contact');
    }
    public function product()
    {
        return view('product');
    }
    public function price()
    {
        return view('price');
    }

}

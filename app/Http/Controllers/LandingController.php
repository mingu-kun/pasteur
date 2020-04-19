<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    public function contact()
    {
        $contacts = contact::all();
        
        return view('contact',compact('contacts'));
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

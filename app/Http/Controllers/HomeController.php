<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function indexmain(){
        return view('indexmain');
    }

    public function listing(){
        return view('listing');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}

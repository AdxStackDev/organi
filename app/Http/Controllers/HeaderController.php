<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    // public function index()
    // {
    //     return view('header');
    // }

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

}

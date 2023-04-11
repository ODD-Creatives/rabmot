<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

   
    public function aboutus()
    {
        return view('aboutus');
    }

    public function faq()
    {
        return view('faq');
    }

    public function help()
    {
        return view('help');
    }

    public function air()
    {
        return view('air.index');
    }

    public function land()
    {
        return view('land.index');
    }

    public function water()
    {
        return view('water.index');
    }

    public function rail()
    {
        return view('rail.index');
    }

}
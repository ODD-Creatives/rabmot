<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   
    // public function aboutus()
    // {
    //     return view('aboutus');
    // }

    // public function faq()
    // {
    //     return view('faq');
    // }

    // public function help()
    // {
    //     return view('help');
    // }

    public function loginV()
    {
        return view('loginV');
    }

    public function signupV()
    {
        return view('signupV');
    }

    public function loginA()
    {
        return view('loginA');
    }

    public function signupA()
    {
        return view('signupA');
    }
    
}

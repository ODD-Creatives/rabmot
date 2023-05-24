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
    public function contactus()
    {
        return view('contactus');
    }

    public function faq()
    {
        return view('faq');
    }

    public function help()
    {
        return view('help');
    }

    public function community()
    {
        return view('community');
    }
    public function discusion()
    {
        return view('discusion');
    }
    public function pricing()
    {
        return view('papers');
    }
    public function terms()
    {
        return view('terms');
    }
    public function policy()
    {
        return view('policy');
    }
    public function signin()
    {
        return view('signin');
    }
    public function signup()
    {
        return view('signup');
    }

}
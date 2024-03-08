<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.welcome');
    }

    public function plans()
    {
        return view('landingpage.plans');
    }

    public function contact()
    {
        return view('landingpage.contact');
    }

    public function about()
    {
        return view('landingpage.about');
    }

}

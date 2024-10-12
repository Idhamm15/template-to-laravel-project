<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index () {
        return view ('pages.Home');
    }

    public function about () {
        return view ('pages.About');
    }

    public function service () {
        return view ('pages.Service');
    }

    public function blog () {
        return view ('pages.Blog');
    }

    public function contact () {
        return view ('pages.Contact');
    }

    public function feature () {
        return view ('pages.Feature');
    }
}

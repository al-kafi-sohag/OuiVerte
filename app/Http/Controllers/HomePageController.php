<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        return view('frontend.home.new');
    }

    public function info1()
    {
        return view('frontend.home.test1');
    }

    public function info2()
    {
        return view('frontend.home.test2');
    }

    public function info3()
    {
        return view('frontend.home.test3');
    }

    public function info4()
    {
        return view('frontend.home.info4');
    }


}

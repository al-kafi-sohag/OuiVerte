<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        return view('frontend.home.new');
    }

    public function test1()
    {
        return view('frontend.home.test1');
    }

    public function test2()
    {
        return view('frontend.home.test2');
    }

    public function test3()
    {
        return view('frontend.home.test3');
    }


}

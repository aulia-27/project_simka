<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('content/home/main');
    }

    public function blog()
    {
        # code...
        return view('blog');
    }
}

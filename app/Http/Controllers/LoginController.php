<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login()
    {
        # code...
        return view('content.login.login');
    }

    public function postLogin(Request $requset)
    {
        # code...
        if (Auth::attempt($requset->only('name', 'password'))) {
            # code...
            return redirect(url('/'));
        }
        return redirect(url('dashboard'));
    }
}

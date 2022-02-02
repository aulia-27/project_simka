<?php

namespace App\Http\Controllers;

use App\Models\Ceramah;
use App\Models\Pengurus;
use App\Models\AnggotaMajelis;
use App\Models\Kegiatan;
use App\Models\RemajaMasjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    // public function login()
    // {
    //     # code...
    //     return view('content/login/login');
    // }

    // public function authenticate(Request $request)
    // {
    //     # code...
    //     $credentials = $request->validate([
    //         'username',
    //         'password' => 'require'
    //     ]);

    //     if(Auth::attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended('content/admin/main_admin');
    //     }

    //     return back()->with('loginError', 'login failed');

    // }

    public function index()
    {
        # code...
        return view('content/home/main');
    }

    public function ceramah()
    {
        # code...
        $data = Ceramah::all();
        return view('content/home/ceramah')->with([
            'data' => $data
        ]);
    }

    public function pengurus()
    {
        # code...
        $data = Pengurus::all();
        return view('content/home/pengurus_masjid')->with([
            'data' => $data
        ]);
    }

    public function kegiatan()
    {
        # code...
        $data = Kegiatan::all();
        return view('content/home/kegiatan')->with([
            'data' => $data
        ]);
    }

    public function anggota_majelis()
    {
        # code...
        $data = AnggotaMajelis::all();
        return view('content/home/anggota_masjid')->with([
            'data' => $data
        ]);
    }

    public function remaja_masjid()
    {
        # code...
        $data = RemajaMasjid::all();
        return view('content/home/remaja_masjid')->with([
            'data' => $data
        ]);
    }
}

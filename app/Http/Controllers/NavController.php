<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function beranda(){
        return view('beranda');
    }

    public function home(){
        return view('home');
    }
    public function aboutus(){
        return view('layanan.aboutus');
    }
}

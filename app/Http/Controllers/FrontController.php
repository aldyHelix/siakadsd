<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homeView()
    {
        return view('front/front_master_alt');
    }
    public function siswaDetails()
    {
        return view('front/front_siswa_view');
    }
}

<?php

namespace App\Http\Controllers;
use App\Proses;

use Illuminate\Http\Request;
use DB;

class Pagecontroller extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function setting()
    {
        return view('admin.dataemail');
    }

    public function struktur()
    {
        return view('admin.struktur');
    }

    public function gallery()
    {
        $proses = Proses::all();
        return view('admin.photosuser', compact('proses'));
    }
}

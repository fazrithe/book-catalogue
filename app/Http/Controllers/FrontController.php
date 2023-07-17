<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Audio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data   = Catalogue::all()->first();
        $audio  = Audio::all()->first();
        return view('front', compact('data','audio'));
    }
}

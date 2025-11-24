<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalponController extends Controller
{
    public function index()
    {
        return view('galpon');
    }
}

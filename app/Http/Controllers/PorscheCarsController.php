<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorscheCarsController extends Controller
{
      public function showPorscheCars()
    {
        return view('porsche-cars');
    }
}
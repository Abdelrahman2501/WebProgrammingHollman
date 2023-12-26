<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercedesCarsController extends Controller
{
      public function showMercedesCars()
    {
        return view('mercedes-cars');
    }
}
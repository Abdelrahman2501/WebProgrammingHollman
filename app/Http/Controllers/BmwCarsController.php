<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmwCarsController extends Controller
{
      public function showBmwCars()
    {
        return view('bmw-cars');
    }
}
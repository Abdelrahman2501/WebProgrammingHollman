<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiCarsController extends Controller
{
     public function showAudiCars()
    {
        return view('audi-cars');
    }
}
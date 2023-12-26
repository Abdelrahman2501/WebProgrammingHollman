<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showImages()
    {
        // Ensure that the image paths are relative to the 'public' directory
        $images = [
            'homeImages/carousel0.jpg',
            'homeImages/carousel1.jpg',
            'homeImages/carousel2.jpg',
            'homeImages/carousel3.jpg',
        ];

        // Pass the images array to the view
        return view('home', ['images' => $images]);
    }
}

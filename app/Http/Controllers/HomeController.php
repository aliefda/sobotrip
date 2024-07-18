<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Destination;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $destinations = Destination::orderBy('id', 'desc')->take(6)->get();

        return view('home.index', compact(
            'sliders',
            'destinations'
        ));
    }

    public function destinations()
    {
        $destinations = Destination::all();

        return view('home.destinations', compact(
            'destinations'
        ));
    }
}

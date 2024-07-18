<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class ListController extends Controller
{

    public function index(Request $request)
    {
        $destinations = Destination::all();
        $search = $request->input('search');
        $destinations = Destination::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('title_1', 'like', "%{$search}%");
        })->get();

        return view('home.list', compact(
            'destinations'
        ));
    }

    public function destinations(Request $request)
    {
        $destinations = Destination::all();

        return view('home.destinations', compact(
            'destinations'
        ));
    }
}

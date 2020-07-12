<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
        $houses = House::all();
        return view('index.index', compact('houses'));
    }

    public function show (House $house)
    {
        return view('index.show', compact('house'));
    }
}

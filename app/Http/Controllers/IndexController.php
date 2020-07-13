<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
        $lastHouse = House::all()->last();
        $houses = House::orderBy('id', 'DESC')->get();
        return view('index.index', compact('houses', 'lastHouse'));
    }

    public function show (House $house)
    {
        return view('index.show', compact('house'));
    }
}

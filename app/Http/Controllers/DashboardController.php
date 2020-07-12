<?php

namespace App\Http\Controllers;

use App\House;
use App\Status;
use App\Type;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return view('dashboard.index', compact('houses'));
    }
}

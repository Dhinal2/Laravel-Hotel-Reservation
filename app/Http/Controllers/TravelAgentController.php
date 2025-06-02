<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class TravelAgentController extends Controller
{
    public function home(): View
    {
        return view('travel.travelHome'); // This will look for resources/views/travel-agent/home.blade.php
    }
}

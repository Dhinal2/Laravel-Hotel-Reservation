<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Room;

class TravelAgentController extends Controller
{
    public function home(): View
    {
        // 1. Fetch all rooms from the database
        // This assumes your 'rooms' table is correctly set up and populated.
        $rooms = Room::all();

        // 2. Pass the $rooms collection to the view
        // The view will now have access to the $rooms variable.
        return view('travel_agency.travelHome', compact('rooms'));
    }
}
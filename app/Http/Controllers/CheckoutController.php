<?php

namespace App\Http\Controllers;
use App\Models\Room; 
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($roomid)
{
    $room = Room::findOrFail($roomid); // Fetch the room data, or handle the case when the room is not found
    return view('checkout', ['room' => $room]); // Pass the room data to the view
}
}

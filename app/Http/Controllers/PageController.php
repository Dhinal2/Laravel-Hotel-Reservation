<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Room; // Import the Room model
use Illuminate\Contracts\View\View;

class PageController extends Controller
{

 // Home Controller - This typically returns your main landing page with room data
 public function home()
 {
     // Fetch all rooms from the database
     $rooms = Room::all(); // You can add orderBy, take, where clauses as needed

     // Pass the $rooms data to the 'home' view
     return view('home', compact('rooms'));
 }
 
// This method should be for displaying rooms on your main 'home' page (e.g., Urban Blue or a general room listing)
// I've renamed it to urbanBlueRooms based on our previous discussion for clarity
public function urbanBlueRooms(): View
{
    $rooms = Room::all(); // Fetch all rooms for display

    if (Auth::check()) {
        $userRole = Auth::user()->role;
        foreach ($rooms as $room) {
            if ($userRole === 'travel_agent') {
                $room->display_price = $room->agent_rate;
            } else {
                // For 'admin' or any other non-agent role (including 'individual' or 'user')
                $room->display_price = $room->room_rate;
            }
        }
    } else {
        // If no user is logged in, show the base price (room_rate)
        foreach ($rooms as $room) {
            $room->display_price = $room->room_rate;
        }
    }

    // Pass the rooms (now with display_price) to the 'home' view
    return view('home', compact('rooms')); // Assuming home.blade.php is where you show these rooms
}

// This is the dedicated method for Urban Red Rooms (urbanRedRooms.blade.php)
public function urbanRedRooms(): View
{
    // Fetch all rooms (or a specific set if "Red Rooms" are different from "Blue Rooms")
    $rooms = Room::all();

    // Determine the display price based on user role (same logic)
    if (Auth::check()) {
        $userRole = Auth::user()->role;
        foreach ($rooms as $room) {
            if ($userRole === 'travel_agent') {
                $room->display_price = $room->agent_rate;
            } else {
                $room->display_price = $room->room_rate;
            }
        }
    } else {
        foreach ($rooms as $room) {
            $room->display_price = $room->room_rate;
        }
    }

    // Pass the rooms to the 'urbanRedRooms' view
    return view('guest.urbanRedRooms', compact('rooms'));
}

// UrbanBlue controller - This might be a landing page for Urban Blue theme, not listing rooms directly
public function urbanBlue()
{
    return view('guest.urbanblue');
}

// This method seems to be redundant if urbanBlueRooms() above handles displaying rooms for the home page.
// If 'guest.urbanBlueRooms' is a *different* room listing page, you'd need the price logic here too.
// For now, I've commented out the original content for clarity.
// If 'guest.urbanBlueRooms' exists and is a room listing, you'll need the room fetching/price logic here.
// public function urbanBlueRooms(): View
// {
//     return view('guest.urbanBlueRooms');
// }

// UrbanGeen controller
public function urbanGreen()
{
    return view('guest.urbangreen');
}

public function urbanGreenRooms()
{
    // If 'guest.urbanGreenRooms' is a room listing, you'll need the room fetching/price logic here.
    return view('guest.urbanGreenRooms');
}

// Restaurant
public function resturant()
{
    return view('guest.resturant');
}

// Gallery
public function gallery()
{
    return view('guest.gallery');
}

// About
public function about()
{
    return view('guest.about');
}
}

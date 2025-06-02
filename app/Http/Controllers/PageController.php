<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    //Home Controller
    public function home()
    {
        return view('home'); // Assuming this view path
    }

      //Home Rooms (Urban Red)
      public function urbanRedRooms()
      {
          return view('guest.urbanRedRooms'); 
      }


    //Urbanred controller
    public function urbanBlue()
    {
        return view('guest.urbanblue');
    }

    public function urbanBlueRooms()
    {
        return view('guest.urbanBlueRooms'); 
    }

    //Urbanred controller
    public function urbanGreen()
    {
        return view('guest.urbangreen');
    }

    public function urbanGreenRooms()
    {
        return view('guest.urbanGreenRooms'); 
    }

    //Resturant
    public function resturant()
    {
        return view('guest.resturant'); 
    }


    //Gallery
    public function gallery()
    {
        return view('guest.gallery'); 
    }

    //Gallery
    public function about()
    {
        return view('guest.about'); 
    }
}

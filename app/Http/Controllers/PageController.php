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
          return view('urbanRedRooms'); 
      }


    //Urbanred controller
    public function urbanBlue()
    {
        return view('urbanblue');
    }

  

}

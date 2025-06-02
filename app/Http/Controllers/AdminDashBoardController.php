<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashBoardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // This will look for resources/views/admin/dashboard.blade.php
    }
}

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/urban-blue', [PageController::class, 'urbanBlue'])->name('urbanblue.index');

Route::match(['get', 'post'], '/urban-redrooms', [PageController::class, 'urbanRedRooms'])->name('urbanRedRooms.index');



Route::get('/', function () {
    return view('home'); // This will load resources/views/index.blade.php
});

// Example of how you'd add routes for other pages you convert
Route::get('/about', function () {
    return view('about'); // Assuming you'll create resources/views/about.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // Assuming you'll create resources/views/contact.blade.php
});

// For the room details page example from your menu
Route::get('/room-details-1', function () {
    return view('room-details-1'); // Assuming you'll create resources/views/room-details-1.blade.php
});
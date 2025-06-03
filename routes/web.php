<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TravelAgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;


require __DIR__.'/auth.php';


Route::get('/urban-blue', [PageController::class, 'urbanBlue'])->name('urbanblue.index');

Route::get('/urban-green', [PageController::class, 'urbanGreen'])->name('urbangreen.index');

Route::match(['get', 'post'], '/urban-redrooms', [PageController::class, 'urbanRedRooms'])->name('urbanRedRooms.index');

Route::match(['get', 'post'], '/urban-bluerooms', [PageController::class, 'urbanBlueRooms'])->name('urbanBlueRooms.index');

Route::match(['get', 'post'], '/urban-greenrooms', [PageController::class, 'urbanGreenRooms'])->name('urbanGreenRooms.index');

Route::match(['get', 'post'], '/resturant', [PageController::class, 'resturant'])->name('resturant.index');

Route::match(['get', 'post'], '/gallery', [PageController::class, 'gallery'])->name('gallery.index');

Route::match(['get', 'post'], '/about', [PageController::class, 'about'])->name('about.index');

// Routes for Admin Dashboard
Route::middleware(['auth', 'usertype:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.index');
});


// ROute for Travel Agent
Route::middleware(['auth', 'usertype:travel_agent'])->group(function () {
    Route::get('/travel-agent/home', [TravelAgentController::class, 'home'])->name('travel_agent.home');
});

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/contact', function () {
    return view('contact'); 
});

//Get urban red prices route
Route::get('/urban-redrooms', [PageController::class, 'urbanRedRooms'])->name('urban_red_rooms');


//Room details get
Route::get('/room-details/{room}', [PageController::class, 'showRoomDetails'])->name('room.show');

//Route for checkout
Route::get('/checkout/{roomid}', [CheckoutController::class, 'index'])->name('checkout');

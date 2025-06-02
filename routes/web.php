<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/urban-blue', [PageController::class, 'urbanBlue'])->name('urbanblue.index');

Route::get('/urban-green', [PageController::class, 'urbanGreen'])->name('urbangreen.index');

Route::match(['get', 'post'], '/urban-redrooms', [PageController::class, 'urbanRedRooms'])->name('urbanRedRooms.index');

Route::match(['get', 'post'], '/urban-bluerooms', [PageController::class, 'urbanBlueRooms'])->name('urbanBlueRooms.index');

Route::match(['get', 'post'], '/urban-greenrooms', [PageController::class, 'urbanGreenRooms'])->name('urbanGreenRooms.index');

Route::match(['get', 'post'], '/resturant', [PageController::class, 'resturant'])->name('resturant.index');

Route::match(['get', 'post'], '/gallery', [PageController::class, 'gallery'])->name('gallery.index');

Route::match(['get', 'post'], '/about', [PageController::class, 'about'])->name('about.index');

Route::get('/', function () {
    return view('home'); // This will load resources/views/home.blade.php
});

Route::get('/contact', function () {
    return view('contact'); 
});


<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/urban-blue', [PageController::class, 'urbanBlue'])->name('urbanblue.index');

Route::get('/urban-green', [PageController::class, 'urbanGreen'])->name('urbangreen.index');

Route::match(['get', 'post'], '/urban-redrooms', [PageController::class, 'urbanRedRooms'])->name('urbanRedRooms.index');

Route::match(['get', 'post'], '/urban-bluerooms', [PageController::class, 'urbanBlueRooms'])->name('urbanBlueRooms.index');

Route::match(['get', 'post'], '/urban-greenrooms', [PageController::class, 'urbanGreenRooms'])->name('urbanGreenRooms.index');

Route::get('/', function () {
    return view('home'); // This will load resources/views/index.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // This will load resources/views/index.blade.php
});
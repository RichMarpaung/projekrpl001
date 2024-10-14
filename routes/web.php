<?php

use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

// Route::get('/rental', function () {
//     return view('rentalpage');
// });
Route::get('/rental',[RentalController::class, 'list']);

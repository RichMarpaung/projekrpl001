<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage');
});

// Route::get('/detail-rental', function () {
//     return view('detailrental');
// });
Route::get('/rental',[RentalController::class, 'list'])->name('product.list');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

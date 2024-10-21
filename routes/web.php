<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Route::get('/cek', function () {
//     return view('paymentpage');
// })->name('order.confirmation');

Route::post('/order/confirmation', [PaymentController::class, 'show'])->name('order.confirmation');

Route::get('/rental',[ProductController::class, 'index'])->name('product.list.admin');
// Route::get('/detail-rental', function () {
//     return view('detailrental');
// });
Route::get('/rental',[RentalController::class, 'list'])->name('product.list');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

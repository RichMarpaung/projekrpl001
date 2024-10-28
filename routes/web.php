<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('landingpage');
})->name('landing');

Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Route::get('/cek', function () {
//     return view('paymentpage');
// })->name('order.confirmation');

Route::post('/order/confirmation', [PaymentController::class, 'show'])->name('order.confirmation');

Route::get('/rental',[ProductController::class, 'index'])->name('product.list.admin');

Route::get('/rental',[RentalController::class, 'list'])->name('product.list');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authlogin'])->name('authlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', function () {return view('login.registerpage');})->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerstore');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware(['auth','must-admin']);
})->middleware(['auth','must-admin']);

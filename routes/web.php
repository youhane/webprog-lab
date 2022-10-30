<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionDetailsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'dashboard'])->name('home');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/register', [UserController::class, 'register'])->middleware('guest')->name('register');
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::get('/profile', [UserController::class, 'edit'])->middleware('auth')->name('profile');
Route::put('/profile/{user:id}', [UserController::class, 'update'])->middleware('auth');

Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/register', [UserController::class, 'create'])->middleware('guest');

Route::get('/products/add', [ProductController::class, 'create'])->middleware('admin');
Route::post('/products/add', [ProductController::class, 'store'])->middleware('admin');

Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::get('/products/{product:slug}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product:slug}/edit', [ProductController::class, 'update']);

Route::delete('/products/delete/{product:id}', [ProductController::class, 'destroy'])->middleware('admin');

Route::get('/cart', [TransactionsController::class, 'index'])->middleware('auth');
Route::post('/cart', [TransactionDetailsController::class, 'store'])->middleware('auth');
Route::post('/cart/pay', [TransactionsController::class, 'pay'])->middleware('auth');
Route::put('/cart/delete', [TransactionDetailsController::class, 'deleteOne'])->middleware('auth');
Route::put('/cart/quantity', [TransactionDetailsController::class, 'updateQuantity'])->middleware('auth');
Route::get('/history', [TransactionsController::class, 'history'])->middleware('auth');

Route::fallback(function () {
    return view('notfound', [
        'active' => 'notfound',
    ]);
});

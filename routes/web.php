<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionDetailsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::get('/profile', [UserController::class, 'edit'])->middleware('auth');
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
Route::get('/history', [TransactionsController::class, 'history'])->middleware('auth');

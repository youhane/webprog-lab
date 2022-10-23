<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/products/{product:slug}', [ProductController::class, 'show']);

Route::post('/product/create', [AdminController::class, 'create']);
Route::get('/product/{product:slug}/edit', [ProductController::class, 'edit']);

Route::get('/admin/manage', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/add', [ProductController::class, 'create'])->middleware('admin');
Route::post('/admin/add', [ProductController::class, 'store'])->middleware('admin');
Route::delete('/admin/delete/{product:id}', [ProductController::class, 'destroy'])->middleware('admin');

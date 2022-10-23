<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/edit', [RegisterController::class, 'edit']);
Route::post('/edit', [RegisterController::class, 'edit']);

Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::post('/product/create', [AdminController::class, 'create']);

Route::get('/admin/manage', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/add', [AdminController::class, 'create'])->middleware('admin');
Route::delete('/admin/delete/{id}', [ProductController::class, 'destroy'])->middleware('admin');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

//Home
Route::get('/', [HomeController::class, 'index']);

Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    //Category
    Route::resource('category', CategoryController::class);
    Route::get('cat-unpublish/{id}', [CategoryController::class, 'unpublish']);
    Route::get('cat-publish/{id}', [CategoryController::class, 'publish']);

});


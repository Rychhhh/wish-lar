<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Home Page
Route::get('/', [HomeController::class, 'index']);

Auth::routes();

        
// Admin Page
Route::resource('admin',AdminController::class)->middleware('checkRole:admin');
// Product Page
Route::resource('pembeli',ProductController::class)->middleware(['checkRole:pembeli,admin']);

// Profile
Route::get('/profil', function() {
    return view ('profile');
});
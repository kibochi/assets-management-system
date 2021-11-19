<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LeaseAssetController;

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

Route::get('/', function () {
    return view('admin.index');
});


Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('/admin', AdminController::class);
    Route::get('/admin/{admin}',[AdminController::class, 'show'])->name('admin.show');
    Route::resource('/asset', AssetController::class);
    Route::resource('/staff', StaffController::class);
    Route::resource('/lease', LeaseAssetController::class);
});




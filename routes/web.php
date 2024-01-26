<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\BusinessController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [AuthController::class,'login'])->name('login');
Route::post('post-login', [AuthController::class,'postLogin']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.home');
    });
    Route::resource('businesses', BusinessController::class);
});

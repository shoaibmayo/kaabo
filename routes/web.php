<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;

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

/**
 * Main Web
 */

Route::view('/','web.home');
Route::view('/about','web.about');

/**
 * Authorization
 */
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'authenticate']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'store']);

/**
 * Authorize User
 */
Route::middleware(['auth'])->group(function (){
    Route::get('/home', [UserController::class,'home'])->name('home');
    Route::get('/profile',[UserController::class,'profile'])->name('profile');
    Route::get('/user/map',[UserController::class,'map'])->name('user_map');
    Route::get('/user/calendar',[UserController::class,'calendar'])->name('user_calendar');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});


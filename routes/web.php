<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'authenticate'])->name('login');
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'store']);

Route::middleware(['auth'])->group(function (){
    Route::get('/home', function () {
        return view('web.home');
    });
});


// Route::get('/login',function(){
//     return view('auth.login');
// });
// Route::view('/login', 'auth.login');
Route::view('/register','auth.register');
Route::view('/about','web.about');

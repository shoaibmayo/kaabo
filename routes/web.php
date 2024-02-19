<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;

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

 Route::get('/', function () {
    return view('web.home');
});
Route::view('/about','web.about');

/**
 * Authorization
 */
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'authenticate']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'store']);
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
/**
 * Authorize User
 */
Route::middleware(['auth'])->group(function (){
    Route::get('/home', [UserController::class,'home'])->name('home');
    Route::get('/profile',[UserController::class,'profile'])->name('profile');
    Route::get('/edit/profile',[UserController::class,'edit'])->name('edit_profile');
    Route::post('/profile/update',[UserController::class,'updateProfile'])->name('update-profile');
    Route::get('/user/map',[UserController::class,'map'])->name('user_map');
    Route::get('/user/calendar',[UserController::class,'calendar'])->name('user_calendar');
    Route::view('/user/change/password','user.change_password')->name('change_password');
    Route::post('/change/password/ajax',[UserController::class,'updatePassword']);
    Route::view('/user/aboute','user.about')->name('user_about');
    Route::view('/user/create/journey','user.create_journey');
    Route::view('/user/environment','user.environment')->name('user_environment');
    Route::view('/user/accomodation','user.accommodation')->name('user_accomodation');
    Route::view('/user/find/jobs','user.findjobs')->name('user_findJobs');
    Route::view('/user/network','user.network')->name('user_network');
    Route::view('/user/contact/us','user.contactus')->name('user_contactus');
    
    // Route::get('/user/change/password',[UserController::class,'change_password'])->name('change_password');
    
});


Route::get('/admin',function(){
    return view('admin.login');
})->name('admin_login_view');
Route::post('admin/login',[AdminLoginController::class,'login'])->name('admin_login');
Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin_index');
    
});

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }   
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');
   
   
    

    Route::get('/clear-cache', function() {
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Cache is cleared";
    })->name('clear.cache');
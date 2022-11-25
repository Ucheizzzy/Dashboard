<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin dashboard
Route::middleware(['auth','role:admin'])->group(function(){
 Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/dashboard', 'admindashboard')->name('admin.dashboard');
    // adminlogout
    Route::get('/admin/logout', 'adminlogout')->name('admin.logout');
   
    // talentcroft
    Route::get('/admin/talentcroft', 'talentcroftview')->name('talentcroft');
    // junebox
    Route::get('/admin/junebox', 'juneboxview')->name('junebox');

    // moneyrun
    Route::get('/admin/moneyrun', 'moneyrunview')->name('moneyrun');


});
});
 // adminlogin
Route::get('/admin/login', [AdminController::class, 'adminlogin']);

// User dashboard
Route::middleware(['auth','role:user'])->group(function(){
 Route::controller(UserController::class)->group(function(){
    Route::get('/user/dashboard', 'userdashboard');
});
});



<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AdminController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as'=>'admin.', 'prefix'=>'admin', 'middleware'=>['auth']], function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    // Route::get('/owner-dashboard',[DashboardController::class,'ownerDashboard'])->name('owner.dashboard');
    // Route::get('/user-dashboard',[DashboardController::class,'userDashboard'])->name('user.dashboard');


    Route::resource('/user', UserController::class);
    Route::resource('/property', PropertyController::class);
    Route::get('/properties',[AdminController::class,'Property'])->name('all.property');

    

    Route::get('/test',function()
    {
        return view('admin.error.error');
    });
});

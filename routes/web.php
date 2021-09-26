<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppointmentDateController;





use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\BookingController;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as'=>'admin.', 'prefix'=>'admin', 'middleware'=>['auth']], function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::resource('/user', UserController::class);
    Route::resource('/property', PropertyController::class);
    Route::resource('/appointment-date', AppointmentDateController::class);

    Route::get('/properties',[AdminController::class,'property'])->name('all.property');


    Route::get('/bookings',[AdminController::class,'booking'])->name('all.booking');
    Route::get('/active-bookings',[AdminController::class,'activeBooking'])->name('all.booking.active');


    Route::get('/tenant-list',[BookingController::class,'tenantList'])->name('tenant.list');
    Route::get('/active-booking',[BookingController::class,'activeBooking'])->name('booking.active');

    Route::get('/my-booking',[BookingController::class,'activeUserBooking'])->name('booking.user.active');



    Route::delete('/booking/{id}',[BookingController::class,'destroy'])->name('booking.destroy');
    Route::get('/booking/status/{id}',[BookingController::class,'status'])->name('booking.status');
    Route::get('/booking/approve/{id}',[BookingController::class,'approve'])->name('booking.approve');




    Route::delete('notification/read',function(){
        // dd($id);
        $not = Auth::user()->unreadNotifications;
        foreach($not as $n)
        $n->markAsRead();
        // dd($not);   
        // ->markAsRead();
        return redirect()->back()->with('success','Notification cleared');
        })->name('notification.destroy');

    Route::get('/test',function()
    {
        return view('admin.error.error');
    });
});

Route::redirect('/home', '/');
Route::post('/booking/create/{id}',[BookingController::class,'store'])->name('booking.store');

//Emails view display
Route::get('/booking-confirm',function(){
    return view('emails.booking');
});
Route::get('/user-add',function(){
    return view('emails.booking');
});












Route::get('/property',[IndexController::class,'property'])->name('property');
Route::get('/view-property/{id}',[IndexController::class,'propertyDetail'])->name('property.view');
Route::post('/search-property',[IndexController::class,'search'])->name('search.view');

// Route::post('/test',function(Request $request)
//     {
//         dd($request->all());
//         // return view('admin.error.error');
//     })->name('search.view');


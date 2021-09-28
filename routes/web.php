<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReportIssueController;
use App\Http\Controllers\Admin\AppointmentDateController;
use App\Http\Controllers\Admin\BookingController;




use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
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

    Route::resource('/report-issue', ReportIssueController::class);
    Route::get('/reported-issues',[AdminController::class,'reportedIssues'])->name('admin.issue');
    Route::get('/reported-issue',[ReportIssueController::class,'reportedIssue'])->name('owner.issue');
    Route::get('/report-issue/status/{id}',[ReportIssueController::class,'status'])->name('issue.status');
    Route::get('/report-issue/approve/{id}',[ReportIssueController::class,'approve'])->name('issue.approve');
    Route::get('/report-issue/complete/{id}',[ReportIssueController::class,'complete'])->name('issue.complete');


    Route::resource('/message', MessageController::class);
    Route::get('/messages', [MessageController::class,'ownerMessage'])->name('message.owner');
    Route::get('/my-message', [MessageController::class,'userMessage'])->name('message.user');

    Route::get('/contacts',[ContactController::class,'contacts'])->name('contact');






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
Route::resource('/contact', ContactController::class);


<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdministrativeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BusScheduleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AdminAuthController;


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
    return view('welcome');
});

Route::resource('/Home', HomeController::class);
Route::resource('/Administrative', AdministrativeController::class);
Route::resource('/Reservation', ReservationController::class);
Route::resource('/Passenger', PassengerController::class);
Route::resource('/Report', ReportController::class);
Route::resource('buses', BusController::class);
Route::resource('schedules', BusScheduleController::class);
Route::resource('drivers', DriverController::class);
//Route::resource('report/ReportDetails', ReportController::class);

Route::post('report/ReportDetails', function (Request $request) {
    return app('App\Http\Controllers\ReportController')->generateReport($request);
})->name('report.generate');

///report/ReportPDF
Route::get('/report/ReportPDF', [ReportController::class, 'exportPDF'])->name('export-pdf');

//Route::get('/export-pdf', 'ReportController@exportPDF')->name('export-pdf');

Route::post("admin",[AdminAuthController::class,'adminLogin']);
//Route::view("login", 'login');

Route::get('/login', function () {
    if(session()->has('admin')){
        return redirect('/Home');
    }
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('admin')){
        session()->pull('admin');
    }
    return redirect('login');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front_end\Phuc_registerLogin;
//controller của anh Xuyen
use App\Http\Controllers\Xuyen\BookSeatController;
use App\Http\Controllers\Xuyen\CinemaController;
use App\Http\Controllers\Xuyen\PaymentSeatController;


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
//Route general link
Route::get('/', 'Front_end\Generate_link@login');
Route::get('Logout', 'Front_end\Phuc_registerLogin@logOut');
Route::post('user/register', 'Front_end\Phuc_registerLogin@Register');
Route::post('user/login', 'Front_end\Phuc_registerLogin@checkLogin');
Route::get('user/login_user', 'Front_end\Phuc_registerLogin@login');
Route::get('user/DashBoard', 'Front_end\Generate_link@dashboardAccount');


//Route của front_end của anh Xuyen
// Route::get('reserve-seat','BookSeatController@bookSeat');
Route::post('reserve-seat','Xuyen\BookSeatController@bookSeat')->name('postBookSeat');
Route::post('payment/payment-ticket','Xuyen\BookSeatController@newBookTicket');
Route::get('cenimainfo','Xuyen\CinemaController@CenimaInFor');


//Route của front_end của Phuc
Route::prefix('user')->name('user')->middleware('chekLogin')->group(function(){

});


//Route backend admin cua Phuc
Route::prefix('admin')->name('admin')->middleware('checkAdmin')->group(function(){
    Route::get('/adminDashboard', 'Front_end\Generate_link@dashboard');
});



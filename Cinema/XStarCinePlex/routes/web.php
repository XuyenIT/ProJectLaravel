<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front_end\Phuc_registerLogin;
//controller của anh Xuyen
use App\Http\Controllers\Xuyen\BookSeatController;
use App\Http\Controllers\Xuyen\CinemaController;
use App\Http\Controllers\Xuyen\PaymentSeatController;
use App\Http\Controllers\adminPHuc\accountDashboard;


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
Route::get('index', 'Front_end\Generate_link@index');


//Route của front_end của anh Xuyen
// Route::get('reserve-seat','BookSeatController@bookSeat');
Route::post('reserve-seat','Xuyen\BookSeatController@bookSeat')->name('postBookSeat');
Route::post('payment/payment-ticket','Xuyen\BookSeatController@newBookTicket');
Route::post('cenimainfo','Xuyen\CinemaController@CenimaInFor');


//Route của front_end của Phuc
Route::prefix('user')->name('user')->middleware('chekLogin')->group(function(){

});


//Route backend admin cua Phuc
Route::prefix('admin')->name('admin')->middleware('checkAdmin')->group(function(){
    Route::get('/adminDashboard', 'Front_end\Generate_link@dashboard');
    Route::get('/account', 'adminPHuc\accountDashboard@accountShow');
    Route::get('/accountData', 'adminPHuc\accountDashboard@dataAccount');
});
//Route Fontend Hoang
Route::get('Now-Showing','Now_Showing_Films@Show_films');
Route::get('Coming-Soon','Coming_Soon@show');
Route::get('Film-Detail','Films_Detail@show');



<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authController;

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

Route::match(['get','post'],'/twillo-sms',[authController::class,"index"])->name("send-msg");

Route::get('/send-sms', function () {
    return view('sms');
})->name("sms");

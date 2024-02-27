<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

// FOR GCASH CONNECTION
Route::get('/gcash/authorize', 'GCashController@authorize');
Route::get('/gcash/callback', 'GCashController@callback');
Route::post('/gcash/webhook', 'GCashController@webhook');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('pay', [PaymentController::class, 'pay']);
Route::get('success', [PaymentController::class, 'success']);

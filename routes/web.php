<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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

Route::group(['prefix' => 'auth'], function () {
    Route::view('/register', '/auth/register')->name('user#register')->middleware('auth.check');
    Route::view('/login', '/auth/login')->name('user#login')->middleware('auth.check');
    Route::post('/store', [AuthController::class, 'storeUser'])->name('user#storeUser');
    Route::post('/authenticate', [AuthController::class, 'authenticateUser'])->name('user#authenticateUser');
    Route::get('/logout', [AuthController::class, 'logoutUser'])->name('user#logoutUser');
});

Route::resource('products', ProductController::class)->middleware('auth.check');



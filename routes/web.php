<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');
Route::view('/profile', 'profile');
Route::view('/journal', 'journal');
Route::view('/archive', 'archive');
Route::view('/guidline', 'guidline');
Route::view('/subscription', 'subscription');
// Route::view('/profile', 'profile');
// Route::view('/profile', 'profile');
// Route::view('/profile', 'profile');


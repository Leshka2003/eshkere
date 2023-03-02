<?php

use App\Http\Controllers\tovarcontroller;
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
 Route::get('/where', function () {
    return view('where');
 });
 Route::get('/about', function () {
    return view('about');
 });

 Route::get('/catalog', [tovarcontroller::class , 'show']);
 Route::get('/', [tovarcontroller::class , 'slider']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


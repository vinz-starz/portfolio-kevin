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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contak', function () {
    return view('contak');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/service', function () {
    return view('service');
});

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

Route::get('/villas', function () {
    return view('pages.villas');
});

Route::get('/oneeighty', function () {
    return view('pages.oneeighty');
});

Route::get('/facilities', function () {
    return view('pages.facilities');
});

Route::get('/promotions', function () {
    return view('pages.promotions');
});

Route::get('/eatdrink', function () {
    return view('pages.eatdrink');
});

Route::get('/weddings', function () {
    return view('pages.weddings');
});

Route::get('/the-spa', function () {
    return view('pages.the-spa');
});

Route::get('/experience', function () {
    return view('pages.experience');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/media', function () {
    return view('pages.media');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

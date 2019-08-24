<?php

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
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/overview', function () {
    return view('overview');
});



Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/clients', function () {
    return view('clients');
});
Route::get('/achievements', function () {
    return view('achievement');
});


Route::get('/contactus', 'ContactController@ContactUs')->name('contact');
Route::post('/contactus', 'ContactController@ContactUsPost');
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
    return view('welcome');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('properties', function () {
    return view('pages.properties');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('newsletter', function () {
    return view('pages.newsletter');
});

Route::get('/Resources/LESS', 'FootForward\ResourceController@Less');

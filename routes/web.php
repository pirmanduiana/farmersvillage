<?php

use App\Mstproduct;

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

Route::get('/', 'BookingController@get_bestoffers');

Route::get('/blog', function(){
    return view('pages.blog');
});

Route::get('/packages', 'PackageController@get_list');

Route::get('/aboutus', function(){
    return view('pages.aboutus');
});
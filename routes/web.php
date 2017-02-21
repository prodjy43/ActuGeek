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

Route::get('/post', function(){
    return view('post.show');
});

Route::group(['prefix' => 'admin'], function() {

    Route::get('/', 'adminController@index');

    Route::post('/', 'adminController@store');

    Route::get('/logout', 'adminController@logout')->middleware('auth');

    Route::get('/home', 'adminController@home')->middleware('auth');

});

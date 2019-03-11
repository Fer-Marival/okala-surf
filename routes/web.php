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
    return view('pages.home');
});

// Route::get('/booking', function () {
//     return view('pages.booking');
// });
Route::get('/articles', 'PageController@index');

Route::post('/', 'PageController@store')->name('booking.send');

Route::get('/booking', 'BookController@booknow');
Route::post('/booking', ['as'=>'booknow.store',
'uses'=> 'BookController@booknowPost']);
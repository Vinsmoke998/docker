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

Route::get('test','MyController@hello');

Route::get('myview','MyController@testview');
Route::get('name/{name}','MyController@name');

Route::get('xinchao','MyController@xinchao');
Route::get('time/{time}','MyController@inramanhinh');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/{a}', 'MyController@blade');
Route::get('homepage/{num}','MyController@oddoreven');
Route::get('array/{ar}','MyController@array');
Route::get('admin/{ad}', 'MyController@admin2');
?>
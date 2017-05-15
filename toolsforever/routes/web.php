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
    return view('home');
});

Route::get('/fabrieken', 'FabriekController@showFabrieken');

Route::get('/contact', 'FabriekController@showContact');


// Route::group(['namespace' => 'admin'], function () {

	Route::get('/addFabriek', 'FabriekController@addFabrieken');

	Route::post('/savefabriek', 'FabriekController@savefabriek');

	Route::get('/editfabriek/{id}', 'FabriekController@editfabriek');

	Route::post('/updatefabriek/{id}', 'FabriekController@updatefabriek');

	Route::get('/deletefabriek/{id}', 'FabriekController@deletefabriek');
// });
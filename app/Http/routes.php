<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index.index');
//});

//Route to controller that handles the index page
//Route::get('/', 'IndexController@index');

//Route::get('cards', 'CardsController@index');

Route::auth();

Route::get('/', 'HomeController@index');

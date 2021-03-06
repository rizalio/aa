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

Route::get('/', function(){
  return View::make('welcome');
});

Route::get('/email', 'IndexController@email');
Route::get('/usaaddress', 'IndexController@usaaddress');
Route::get('/creditcard', 'IndexController@creditcard');
Route::get('/mailpass', 'IndexController@mailpass');

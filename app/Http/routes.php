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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('/practice-revenue', 'PracticeRevenueController@index');
Route::post('practice-revenue/upload', 'PracticeRevenueController@upload');


Route::get('practice-revenue', function(){
    return View::make('practice-revenue');
});

//Route::any('form-submit', function(){
//    var_dump(Input::file('file'));
//});
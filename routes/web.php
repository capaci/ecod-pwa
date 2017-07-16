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

Route::get('/doctor', 'SurveyController@index')->name('survey');
Route::post('/edit', 'SurveyController@calculate');
Route::get('/result', 'SurveyController@result')->name('result');




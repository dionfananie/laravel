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

Route::get('form', 'Student@getForm');
Route::post('insert', 'Student@store');
Route::get('show', 'Student@showData');
Route::get('edit/{id}', 'Student@editData');
Route::post('update/{id}', 'Student@updateData');
Route::get('delete/{id}', 'Student@deleteData');


Route::get('header/form', 'Header@getForm');
Route::post('header/form', 'Header@store');
Route::get('header/show', 'Header@display');
Route::get('header/edit/{id}', 'Header@getEdit');
Route::post('header/update/{id}', 'Header@getUpdate');
Route::get('header/delete/{id}', 'Header@getDelete');


Route::auth();

Route::get('/home', 'HomeController@index');

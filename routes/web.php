<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

// Users CRUD
Route::resource('/home/users','UsersController');
Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as'   => 'users.destroy'
]);

// Countries CRUD
Route::group(['middleware' => 'role:superadmin'], function()
{
    Route::resource('/home/countries', 'CountriesController');
    Route::get('countries/{id}/destroy', [
        'uses' => 'CountriesController@destroy',
        'as'   => 'countries.destroy'
    ]);
});

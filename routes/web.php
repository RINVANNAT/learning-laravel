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
    return view('dashboard.index');
});

Route::get('/{name?}/person_name', function ($name) {


    $lastName = "RIN";
    return view('welcome', compact('name', 'lastName'));
});



Route::get('/{name}/first-controller', 'MyFirstController@first');

Route::post('/register', 'MyFirstController@register')->name('register');

Route::get('/user/index', 'User\UserController@index')->name('user.index');



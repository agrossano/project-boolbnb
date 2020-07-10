<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Messages/showMessages{id}', 'MessagesController@showMessages')->name('showMessages');
Route::get('/Messages/createMessage{id}', 'MessagesController@createMessage')->name('createMessage');
Route::post('/Messages/storeMessage{id}', 'MessagesController@storeMessage')->name('storeMessage');

Route::get('/profile', 'UserController@show_profile')->name('show_profile');
Route::get('/apartment/create', 'UserController@create_apartment')->name('create_apartment');
Route::post('/apartment/store', 'UserController@store_apartment')->name('store_apartment');
Route::get('/apartment/edit/{id}', 'UserController@edit_apartment')->name('edit_apartment');
Route::post('/apartment/update/{id}', 'UserController@update_apartment')->name('update_apartment');
Route::get('/apartment/{id}', 'apartmentController@showApartment')->name('showApartment');

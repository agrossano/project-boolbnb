<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    return view('home');
});

Auth::routes();

//Rotte Messaggi------------------
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Messages/showMessages/{id}', 'MessagesController@showMessages')->name('showMessages');
Route::get('/Messages/createMessage/{id}', 'MessagesController@createMessage')->name('createMessage');
Route::post('/Messages/storeMessage/{id}', 'MessagesController@storeMessage')->name('storeMessage');
//Rotte Appartamenti------------------
Route::get('/profile', 'UserController@show_profile')->name('show_profile');
Route::get('/apartment/create', 'UserController@create_apartment')->name('create_apartment');
Route::post('/apartment/store', 'UserController@store_apartment')->name('store_apartment');
Route::get('/apartment/edit/{id}', 'UserController@edit_apartment')->name('edit_apartment');
Route::post('/apartment/update/{id}', 'UserController@update_apartment')->name('update_apartment');
//Rotte Pacchetti------------------
Route::get('/packages', 'PackagesController@showPackages')->name('showPackages');

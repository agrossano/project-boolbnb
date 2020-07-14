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
    return redirect()->route('home');
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
Route::get('/apartment/delete/{id}', 'UserController@delete_apartment')->name('delete_apartment');

// rotta per appartmento ricercata dall'utente
Route::post('/apartment', 'ApartmentController@show_apartment')->name('apartment_search_byUser');
//Rotte Pacchetti------------------
Route::get('/Packages/showPackages', 'PackagesController@showPackages')->name('showPackages');
Route::get('/Packages/detailsPackage/{id}', 'PackagesController@detailsPackage')->name('detailsPackage');
Route::get('/Packages/buyPackage/{id}', 'PackagesController@buyPackage')->name('buyPackage');

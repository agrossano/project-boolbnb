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
Route::get('/Messages/showMessages', 'MessagesController@showMessages')->name('showMessages');
Route::get('/Messages/createMessage/{id}', 'MessagesController@createMessage')->name('createMessage');
Route::post('/Messages/storeMessage/{id}', 'MessagesController@storeMessage')->name('storeMessage');
//Rotte Appartamenti------------------
Route::get('/profile', 'UserController@show_profile')->name('show_profile');
Route::get('/apartment/create', 'UserController@create_apartment')->name('create_apartment');
Route::post('/apartment/store', 'UserController@store_apartment')->name('store_apartment');
Route::get('/apartment/edit/{id}', 'UserController@edit_apartment')->name('edit_apartment');
Route::post('/apartment/update/{id}', 'UserController@update_apartment')->name('update_apartment');
Route::get('/apartment/delete/{id}', 'UserController@delete_apartment')->name('delete_apartment');
// Rotta ricerca appartamenti da home-------------
Route::post('/apartment/selected', 'ApartmentController@apartmentList')->name('apartment-selected');
// Show apartment con mappa
Route::get('/showApartment/{id}', 'ApartmentController@showApartment')->name('showApartment');
//Rotte Pacchetti------------------
Route::get('/Packages/showPackages/{id}', 'PackagesController@showPackages')->name('showPackages');
Route::get('/Packages/detailsPackage/{id}/{id_apartment}', 'PackagesController@detailsPackage')->name('detailsPackage');
Route::get('/Packages/buyPackage/{id}/{id_apartment}', 'PackagesController@buyPackage')->name('buyPackage');

//Rotte chiamate ajax
//Route::get('ajax', 'HomeController@ajaxRequest');
//Route::post('ajax', 'HomeController@ajaxResponse');


Route::get('/statistics/{id}', 'StatisticsController@show_views')->name('show_statistics');
Route::get('/statistics/ajaxviews/{id}', 'StatisticsController@getMonthlyViewData')->name('views_statistics');
Route::get('/statistics/ajaxmessages/{id}', 'StatisticsController@getMonthlyMessagesData')->name('messages_statistics');
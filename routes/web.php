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
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addcontact','AddContactController@index')->name('addcontact');
Route::get('/profile/edit','ProfileController@edit')->name('edit');
Route::get('/profile/{user}','ProfileController@index')->name('profile');
Route::post('/p','ProfileController@store')->name('store');
Route::post('newevent/create','EventController@create')->name('newevent');
Route::get('/upcomming/events','EventController@info')->name('incevent');
Route::get('/delete/{event}','EventController@remove')->name('delete');

Route::post('/search','ProfileController@search')->name('search');
Route::get('/newevent','EventController@index')->name('event');

Route::get('/friend/{user}','FriendController@store')->name('friend');



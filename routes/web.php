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

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/blog', 'FrontendController@blog');


//Route::get('/travel-free', 'FrontendController@travel_free');
Route::get('/destinations', 'FrontendController@destinations');
Route::get('/contact', 'FrontendController@contact');

Route::get('/logiin', 'FrontendController@logiin');



Route::get('example', ['example' => 'exampl@index', 'as' => 'exampl.index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Package/{slug}', 'FrontendController@Packages_details');

Route::get('/blog_details', 'FrontendController@blog_details');

Route::get('/Pack', 'FrontendController@Pack');

Route::get('/Complete', 'FrontendController@Complete');
Route::get('/Booking', 'FrontendController@Booking');

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

Route::get('/', 'HomeController@index');
Route::get('/ads/', 'HomeController@ads');
Route::get('/ad/{ad}', 'HomeController@showAd');
Route::get('/about/', 'HomeController@about');
Route::get('/contact/', 'HomeController@contact');
Route::get('/ad_form/', 'AdController@adForm');
Route::get('/ad_management/', 'AdController@adManagement');
Route::post('/ad_add/', 'AdController@adAdd');
Route::get('/category_form/', 'CategoryController@categoryForm'); // parodo forma
Route::post('/store_category/', 'CategoryController@storeCategory'); // siuncia duomenis i db
Route::get('/category_management/', 'CategoryController@categoryManagement');
Route::get('/category_delete/{category}', 'CategoryController@categoryDelete');
Route::get('/ad_delete/{ad}', 'AdController@adDelete');
Route::get('/ad_update/{ad}', 'AdController@updateAd');
Route::get('/error/', 'AdController@error');
Route::post('/ad_update2/{ad}', 'AdController@updateAd2');
Route::get('/search_action/', 'HomeController@searchAction');
Auth::routes();

Route::get('/ad_management', 'AdController@adManagement');
Route::get('/logout', 'HomeController@logout');
Route::post('/comment/{ad}', 'CommentController@addComment');

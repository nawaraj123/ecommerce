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

Route::match(['get','post'],'/admin','AdminController@login');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function()
{
Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/setting', 'AdminController@setting');
Route::get('/check-pwd','AdminController@chkPassword');
Route::match(['get','post'],'/update-psw','AdminController@updatePassword');
Route::match(['get','post'],'/add-category','CategoryController@addCategory');
Route::get('/viewcategory','CategoryController@viewCategory');




});

Route::get('/logout', 'AdminController@logout');





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

Route::view('/','home');

// For Contact
Route::get('contact/create','ContactFormController@create');
Route::post('contact','ContactFormController@store');


// For About
Route::view('about' , 'about')->middleware('test');


////For Customer
Route::get('customers/create','CustomerController@create')->middleware('auth');
Route::get('customers/index','CustomerController@index')->middleware('auth');
Route::post('customers/create','CustomerController@store')->middleware('auth');
Route::get('customers/{customer}' ,'CustomerController@show')->middleware('auth');

Route::get('customers/{customer}/edit' ,'CustomerController@edit')->middleware('auth');
Route::put('customers/{customer}' ,'CustomerController@update')->middleware('auth');
Route::delete('customers/{customer}' ,'CustomerController@destroy')->middleware('auth');
//Route::resource('customers' , 'CustomerController');


/// For Company
Route::get('company/create','CompanyController@create')->middleware('auth');
Route::get('company/index','CompanyController@index')->middleware('auth');
Route::post('company/create','CompanyController@store')->middleware('auth');
Route::get('company/{company}' ,'CompanyController@show')->middleware('auth');

Route::get('company/{company}/edit' ,'CompanyController@edit')->middleware('auth');
Route::put('company/{company}' ,'CompanyController@update')->middleware('auth');
Route::delete('company/{company}' ,'CompanyController@destroy')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index');

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

//GENERAL ROUTES FOR ALL USERS

Route::get('/', 'PagesController@accueil');

Route::get('/apropos' , 'PagesController@apropos');

Route::get('/contact', 'PagesController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADMIN ROUTES 1 controller pour Admin
Route::get('/admin', 'HomeController@index');

Route::resource('projets', 'ProjetsController');
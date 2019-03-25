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

//Routes generales

Route::get('/', 'PagesController@accueil');

Route::get('/apropos' , 'PagesController@apropos');

Route::get('/contact', 'PagesController@contact');

Route::post('/contact', 'PagesController@envoyer');

Route::resource('/projets', 'ProjetsController');

Auth::routes();


//Route pour le controller admin et authentification
Route::get('/admin', 'HomeController@index')->name('home');




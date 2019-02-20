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

Route::get('/', 'PagesController@accueil');

Route::get('/apropos' , 'PagesController@apropos');

Route::get('/contact', 'PagesController@contact');



Route::resource('projets', 'ProjetsController');

/* Route::get('/projets', 'ProjetsController@index');

Route::get('/projets/creer', 'ProjetsController@create');

Route::get('/projets/{projet}', 'ProjetsController@show');

Route::get('/projets/{projet}/edit', 'PagesController@edit');

Route::patch('/projets/{projet', 'PagesController@update');

Route::delete('/projets', 'ProjetsController@destroy');

Route::post('/projets', 'ProjetsController@store');

Route::delete('/projets/{{id}}', 'ProjetsController@delete'); */




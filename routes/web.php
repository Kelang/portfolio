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


Route::get('/', 'PagesController@home');
Route::get('apropos', 'PagesController@apropos');
Route::get('contact', 'PagesController@contact');
Route::get('projets', 'PagesController@projets');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/projets', function () {
    return view('projects.projets');
});

Route::get('/contact', function () {
    return view('contact');
});


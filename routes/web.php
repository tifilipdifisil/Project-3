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
/**
 * Welcome Page
 */
Route::get('/', 'PageController@welcome');
/**
 * XKCD password generator page
 */
Route::get('/passwordgenerator', 'PassGenController@xkcd');
/**
 * The About page
 */
Route::get('/about', 'PageController@about');



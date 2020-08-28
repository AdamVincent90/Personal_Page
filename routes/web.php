<?php

use Illuminate\Support\Facades\Route;

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


//Home Page Route only

Route::get('/home', 'HomeController@route');


//About page Route only

Route::get('/', 'AboutController@route');

//About page Route only

Route::get('/grades', 'GradeController@route');

//About page contact only

Route::get('/contact', 'ContactController@route');

//Create GitHub Repositories VIA eloquent

Route::get('create-git', 'HomeController@create');

//Create Hobby VIA eloquent

Route::get('create-hobby', 'AboutController@create');

//Create Grade VIA eloquent

Route::get('create-grade', 'GradeController@create');
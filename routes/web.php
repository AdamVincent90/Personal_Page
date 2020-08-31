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

//Use to create "about" as a phantom root page
Route::get('/', function () {
    return redirect('/about');
});

//About Page Routes and Actions

Route::get('/about/manage', 'AboutController@manage');
Route::resource('/about', 'AboutController');

//Repository Page Routes and Actions

Route::get('/repositories/manage', 'RepositoryController@manage');
Route::resource('/repositories', 'RepositoryController');

//Grades Page Routes and Actions

Route::get('grades/manage', 'GradeController@manage');
Route::resource('/grades', 'GradeController');

//Contact Page Routes and Actions

Route::resource('/contact', 'ContactController');

//Login Route

Route::get('/login', 'LoginController@index');
Route::post('/login/validation', 'LoginController@validation');
Route::get('/login/logout', 'LoginController@logOut');
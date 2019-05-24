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

use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

// ืสัถ
Route::get('news/category/{category_id}', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');

// ฐธภý
Route::get('projects', 'ProjectController@index');
Route::get('projects/{id}', 'ProjectController@show');
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
    return view('home');
});

// 资讯
Route::get('news/category/{category_id}', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');

// 案例
Route::get('projects/category/{category_id}', 'ProjectController@index');
Route::get('projects/aljs', 'ProjectController@aljs')->name('aljs');
Route::get('projects/{id}', 'ProjectController@show');


Route::get('projects', 'ProjectController@search');

//关于我们
Route::get('contact', 'AboutController@index');

//研究中心
// 关于我们
Route::get('about-us', 'ResearchController@aboutUs')->name('aboutUs');
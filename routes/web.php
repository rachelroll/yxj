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

// 首页
Route::get('/', function () {
    return view('home');
});


// 资讯
Route::get('news/category/{category_id}', 'NewsController@index')->name('news-list');
Route::get('news/{id}', 'NewsController@show')->name('news.show');


// 案例
Route::get('projects/category/{category_id}', 'ProjectController@index');
Route::get('projects/aljs', 'ProjectController@aljs')->name('aljs');
Route::get('projects/{id}', 'ProjectController@show');
Route::get('projects', 'ProjectController@search');

//关于我们
Route::get('contact', 'AboutController@index');


// 研究中心
// 关于我们
Route::get('about-us', 'ResearchController@aboutUs')->name('aboutUs');
// 研究团队
Route::get('research-team', 'ResearchController@researchTeam')->name('researchTeam');
// 研究内容
Route::get('research-content', 'ResearchController@researchContent')->name('researchContent');
// 社会活动
Route::get('research-activity', 'ResearchController@researchActivity')->name('researchActivity');
// 年鉴
Route::get('research-yearbook', 'ResearchController@researchYearbook')->name('researchYearbook');


// 建设主题
// 乡村风貌
Route::get('themes-village', 'ThemesController@villageStyle')->name('themes-village');
// 公共艺术系统
Route::get('themes-art-system', 'ThemesController@artSystem')->name('themes-art-system');
// 艺术产业体系
Route::get('themes-industry-system', 'ThemesController@industrySystem')->name('themes-industry-system');
// 艺术乡镇路径
Route::get('themes-towns-path', 'ThemesController@townsPath')->name('themes-towns-path');


// 平台资源
// 项目决策委员会
Route::get('platform-committee', 'PlatformController@committee')->name('platform-committee');
// 资助顾问
Route::get('platform-consultant', 'PlatformController@consultant')->name('platform-consultant');
// 合作伙伴
Route::get('platform-partner', 'PlatformController@partner')->name('platform-partner');
// 俱乐部
Route::get('platform-club', 'PlatformController@club')->name('platform-club');


// 乡建视野
// 国内办公室
Route::get('view-internal-office', 'ViewController@internalOffice')->name('view-internal-office');
// 国外办公室
Route::get('view-overseas-office', 'ViewController@overseasOffice')->name('view-overseas-office');


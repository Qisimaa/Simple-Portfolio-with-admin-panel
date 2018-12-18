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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'AdminController@logout');
Route::match(['get','post'],'/admin','AdminController@login');
Route::match(['get','post'],'index','IndexController@slider');

Route::group(['middleware'=>['auth']],function () {
    //Admin
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/settings', 'AdminController@settings');
    Route::get('/admin/check_pwd', 'AdminController@chkPass');
    Route::match(['get','post'],'/admin/update_pwd','AdminController@Update_Pwd');
   // Slider
    Route::match(['get','post'],'/admin/add_slider','ProjectController@add_Slider');
    Route::match(['get','post'],'/admin/view_slider','ProjectController@view_Slider');
    Route::match(['get','post'],'/admin/edit_slider/{id}','ProjectController@edit_Slider');
    Route::match(['get','post'],'/admin/delete_slider/{id}','ProjectController@delete_Slider');
    //About
    Route::match(['get','post'],'/admin/add_about','AboutController@add_About');
    Route::match(['get','post'],'/admin/view_about','AboutController@view_About');
    Route::match(['get','post'],'/admin/edit_about/{id}','AboutController@edit_About');
    Route::match(['get','post'],'/admin/delete_about/{id}','AboutController@delete_About');

    //Recent Work
    Route::match(['get','post'],'/admin/add_work','WorkController@add_Work');
    Route::match(['get','post'],'/admin/view_work','WorkController@view_Work');
    Route::match(['get','post'],'/admin/edit_work/{id}','WorkController@edit_Work');
    Route::match(['get','post'],'/admin/delete_work/{id}','WorkController@delete_Work');

    //Services
    Route::match(['get','post'],'/admin/add_service','ServiceController@add_Service');
    Route::match(['get','post'],'/admin/view_service','ServiceController@view_Service');
    Route::match(['get','post'],'/admin/edit_service/{id}','ServiceController@edit_Service');
    Route::match(['get','post'],'/admin/delete_service/{id}','ServiceController@delete_Service');

    //Team Members
    Route::match(['get','post'],'/admin/add_team','TeamController@add_Team');
    Route::match(['get','post'],'/admin/view_team','TeamController@view_Team');
    Route::match(['get','post'],'/admin/edit_team/{id}','TeamController@edit_Team');
    Route::match(['get','post'],'/admin/delete_team/{id}','TeamController@delete_Team');

    //Team Members
    Route::match(['get','post'],'/admin/add_testimonal','Monal@add_Testimonal');
    Route::match(['get','post'],'/admin/view_testimonal','Monal@view_Testimonal');
    Route::match(['get','post'],'/admin/edit_testimonal/{id}','Monal@edit_Testimonal');
    Route::match(['get','post'],'/admin/delete_testimonal/{id}','Monal@delete_Testimonal');
});

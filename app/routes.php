<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array(),function(){
    
    //frontend
    Route::get('/',         '\\Frontend\\HomeController@index');
    Route::post('search',   '\\Frontend\\HomeController@search');
    Route::get('news',      '\\Frontend\\NewsController@all');
    Route::get('news/detail/{id}', '\\Frontend\\NewsController@detail');
    Route::get('about',     '\\Frontend\\PageController@about');
    Route::get('job',       '\\Frontend\\PageController@job');
    Route::get('contact',   '\\Frontend\\PageController@contact');
    Route::get('service',   '\\Frontend\\PageController@service');
    Route::post('demand',   '\\Frontend\\PageController@demand');
    Route::get('case/detail/{id}',                  '\\Frontend\\CasesController@detail');
    Route::get('case/{industry?}/{specialty?}',       '\\Frontend\\CasesController@all');
});

// 登录与登出
Route::controller('admin/auth', '\\Backend\\AuthController');

// 需要登录的路由
Route::group(array('prefix' => '/admin', 'before' => 'auth'), function(){
    
    //backend
    Route::get('/',                 '\\Backend\\HomeController@index');
    Route::controller('post',       '\\Backend\\PostController');
    Route::controller('case',       '\\Backend\\CasesController');
    Route::controller('user',       '\\Backend\\UserController');
    Route::controller('job',        '\\Backend\\JobController');
    Route::controller('system',     '\\Backend\\SystemController');
    Route::controller('image',      '\\Backend\\ImageController');
    Route::controller('demand',     '\\Backend\\DemandController');
    Route::controller('category',   '\\Backend\\CategoryController');

});

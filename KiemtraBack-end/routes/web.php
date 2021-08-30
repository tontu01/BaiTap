<?php

// ========== FRONTEND AREA ==========
Route::group(['prefix'=>'/', 'as'=>'frontend.', 'namespace' => 'Frontend'], function(){
    Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
});

// ========== BACKEND AREA ==========
Route::get('management/login', ['as' => 'backend.login', 'uses' => 'Backend\Auth\AuthController@showFormLogin']);
Route::post('management/login', ['as' => 'backend.login.post', 'uses' => 'Backend\Auth\AuthController@postLogin']);
Route::get('management/logout', ['as' => 'backend.logout', 'uses' => 'Backend\Auth\AuthController@logout'])->middleware('authBackend');
Route::post('management/delete-cache', ['as' => 'backend.delete-cache', 'uses' => 'Backend\BackendController@deleteCache'])->middleware('authBackend');

Route::group(['prefix'=>'management/', 'as'=>'backend.',  'namespace' => 'Backend', 'middleware' => ['authBackend']], function(){
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    // ========== Module Projects ==========
    Route::group(['prefix'=>'projects/', 'as'=>'projects.'], function(){
        Route::get('/', ['as' => 'list', 'uses' => 'ProjectController@index']);
        Route::get('/add', ['as' => 'create', 'uses' => 'ProjectController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'ProjectController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'ProjectController@edit']);
        Route::post('/{id}', ['as' => 'update', 'uses' => 'ProjectController@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'ProjectController@destroy']);
    });

    // ========== Module News ==========
    Route::group(['prefix'=>'news/', 'as'=>'news.'], function(){
        Route::get('/', ['as' => 'list', 'uses' => 'NewController@index']);
        Route::get('/add', ['as' => 'create', 'uses' => 'NewController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'NewController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'NewController@edit']);
        Route::post('/{id}', ['as' => 'update', 'uses' => 'NewController@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'NewController@destroy']);
    });
});
// ========== END BACKEND AREA ==========



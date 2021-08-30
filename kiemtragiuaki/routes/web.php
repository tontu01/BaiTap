<?php

// ========== FRONTEND AREA ==========
Route::group(['prefix'=>'/', 'as'=>'frontend.', 'namespace' => 'Frontend'], function(){
    Route::get('/khoa', ['as' => 'khoa', 'uses' => 'FrontendController@getKhoa']);
    Route::get('/', ['as' => 'canbo', 'uses' => 'FrontendController@getCanbo']);
    Route::get('/canbo', ['as' => 'canbo', 'uses' => 'FrontendController@getCanbo']);
});

// ========== BACKEND AREA ==========
Route::get('management/login', ['as' => 'backend.login', 'uses' => 'Backend\AuthController@showFormLogin']);
Route::post('management/login', ['as' => 'backend.login.post', 'uses' => 'Backend\AuthController@postLogin']);
Route::get('management/logout', ['as' => 'backend.logout', 'uses' => 'Backend\AuthController@logout'])->middleware('authBackend');
Route::post('management/delete-cache', ['as' => 'backend.delete-cache', 'uses' => 'Backend\BackendController@deleteCache'])->middleware('authBackend');

Route::group(['prefix'=>'management/', 'as'=>'backend.', 'namespace' => 'Backend', 'middleware' => ['authBackend']], function(){
    Route::group(['prefix'=>'khoa/', 'as'=>'khoa.'], function() {
        Route::get('/', ['as' => 'list', 'uses' => 'KhoaController@index']);
        Route::get('/add', ['as' => 'create', 'uses' => 'KhoaController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'KhoaController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'KhoaController@edit']);
        Route::post('/{id}', ['as' => 'update', 'uses' => 'KhoaController@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'KhoaController@destroy']);
    });

    Route::group(['prefix'=>'canbo/', 'as'=>'canbo.'], function() {
        Route::get('/', ['as' => 'list', 'uses' => 'CanBoController@index']);
        Route::get('/add', ['as' => 'create', 'uses' => 'CanBoController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'CanBoController@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'CanBoController@edit']);
        Route::post('/{id}', ['as' => 'update', 'uses' => 'CanBoController@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'CanBoController@destroy']);
    });
});
// ========== END BACKEND AREA ==========



<?php

//Route::group(['middleware' => 'admin:protected', 'namespace' => 'Roocket\Cms\Http\Controllers'], function () {
Route::group(['namespace' => 'Roocket\Cms\Http\Controllers'], function () {
    Route::get('/admin/panel', 'CmsController@getUsers');
    Route::get('/admin', 'CmsController@index');
    Route::get('/admin/panel/configs', function () {
        return config('cms.url');
    });
});

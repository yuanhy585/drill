<?php


Route::group(['middleware' => 'web'], function(){

    Route::group(['middleware' => 'auth'], function(){

        Route::get('/', 'HomeController@index');

        Route::get('post', 'PostController@index');
        Route::get('post/create', 'PostController@create');
        Route::post('post/store', 'PostController@store');
        Route::get('post/{id}/show','PostController@show');
    });

    Route::auth();

});




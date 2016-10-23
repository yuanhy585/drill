<?php


Route::group(['middleware' => 'web'], function(){

    Route::group(['middleware' => 'auth'], function(){

        Route::get('/', 'HomeController@index');

        // routes for post
        Route::get('post', 'PostController@index');
        Route::get('post/create', 'PostController@create');
        Route::post('post/store', 'PostController@store');
        Route::get('post/{id}/show','PostController@show');
        Route::get('post/{id}/edit', 'PostController@edit');

        Route::get('post/{id}/update', 'PostController@update');
        Route::get('post/{id}/delete', 'PostController@destroy');

        // routes for comment
        Route::resource('comments', 'CommentController');
        Route::get('comments/{id}/delete', 'CommentController@destroy');

    });

    Route::auth();

});

    // routes for the API
Route::group(['prefix' => 'api'], function(){
    Route::post('postlist', 'APIController@getPostList'); // 写完后放到Middleware下VerifyCsrfToken中保证其可访问
});

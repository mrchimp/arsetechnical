<?php

Route::get('/', 'BlogController@index')->name('post.index');
Route::get('/posts/{slug}', 'BlogController@post')->name('post.show');

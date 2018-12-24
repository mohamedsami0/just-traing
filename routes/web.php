<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//posts Route

Route::get('posts', 'posts@getPosts');

//single post

Route::get('posts/{id}' , 'posts@singlePost');

Route::get('admin', 'posts@admin');

Route::post('posts/store', 'posts@store');
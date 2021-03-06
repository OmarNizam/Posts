<?php
use App\Http\Controllers\HomeController;


Auth::routes();

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');




Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/home', 'HomeController@index')->name('home');

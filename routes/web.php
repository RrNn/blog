<?php




Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');

Route::get('/posts/{post}','PostsController@show');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}/edit','PostsController@edit');
Route::put('/posts/{post}/edit','PostsController@update');
Route::delete('/posts/{post}/delete','PostsController@destroy');


Route::post('/posts/{post}/comments','CommentsController@store');
Route::get('/posts/{post}/comments/{comment}/edit','CommentsController@edit');
Route::put('/posts/{post}/comments/{comment}/edit','CommentsController@update');
Route::delete('/posts/{post}/comments/{comment}/delete','CommentsController@destroy');


Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');


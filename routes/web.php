<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
	return view('pages.about');
});

Route::get('contact', function(){
	return view('pages.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

$router->group(['namespace' => 'Backend'], function () {
    Route::get('/jobs', 'JobsController@listing')->name('backend.job.listing');
    Route::get('/job/view/{id}', 'JobsController@view')->name('backend.job.view');
    Route::get('/job/post', 'JobsController@create')->name('backend.job.create');
    Route::get('/job/edit/{id}', 'JobsController@edit')->name('backend.job.edit');
    Route::get('/job/destroy/{id}', 'JobsController@destroy')->name('backend.job.destroy');
    Route::post('/job/store', 'JobsController@store')->name('backend.job.store');
});
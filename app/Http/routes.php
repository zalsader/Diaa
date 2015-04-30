<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('courses', 'CoursesController@index');
Route::post('courses', 'CoursesController@store');
Route::get('create_course', 'CoursesController@createCourse');
Route::get('add_topic', 'topicController@add_topic');
Route::post('add_topic', 'topicController@store');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

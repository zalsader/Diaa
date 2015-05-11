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
Route::resource('course','CourseController');
Route::resource('course.topic', 'CourseTopicController');
Route::resource('course.topic.lecture', 'CourseTopicLectureController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Entrust::routeNeedsPermission('course/create', 'create_course', Redirect::back());
Entrust::routeNeedsPermission('course/*/edit', 'edit_course', Redirect::back());
Entrust::routeNeedsPermission('course/*/topic/create', 'create_topic', Redirect::back());
Entrust::routeNeedsPermission('course/*/topic/*/edit', 'edit_topic', Redirect::back());
Entrust::routeNeedsPermission('course/*/topic/*/lecture/create', 'edit_topic', Redirect::back());
Entrust::routeNeedsPermission('course/*/topic/*/lecture/1/edit', 'edit_topic', Redirect::back());

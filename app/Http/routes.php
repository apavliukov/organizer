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

Route::model('events', 'Event');
Route::model('tasks', 'Task');

// Access by slug in URL
Route::bind('events', function($value, $route) {
	return App\Event::whereSlug($value)->first();
});
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});

Route::resource('events', 'EventsController');
Route::resource('tasks', 'TasksController');
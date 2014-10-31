<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$ctasks = Task::where('completed',true)->get();
	$dtasks = Task::where('completed',false)->orderBy('finalDate', 'asc')->get();

	return View::make('layouts.index', compact('ctasks','dtasks'));
	//return View::make('layouts.default');
});


Route::resource('members', 'MembersController');

Route::resource('tasks', 'TasksController');
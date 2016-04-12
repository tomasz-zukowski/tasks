<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::any('/', ['as'=>'home', function () {
		return view('welcome');
	}]);
    Route::get('/home', 'HomeController@index');
	Route::any('/task/categories', ['as'=>'categories', 'uses'=>'TasksController@categories']);
	Route::any('/task/list/{id}', ['as'=>'tasks_from_category', 'uses'=>'TasksController@fromCategory']);
	Route::any('/task/details/{id}', ['as'=>'task_details', 'uses'=>'TasksController@details']);
	Route::any('/task/new_task', ['as'=>'new_task', 'uses'=>'TasksController@new_task'])->middleware('isAdmin');
	Route::any('/task/edit/{id}', ['as'=>'edit_task', 'uses'=>'TasksController@edit_task'])->middleware('isAdmin');

	Route::any('/category/new_category', ['as'=>'new_category', 'uses'=>'CategoriesController@new_category'])->middleware('isAdmin');
	Route::any('/category/edit_category/{id}', ['as'=>'edit_category', 'uses'=>'CategoriesController@edit_category'])->middleware('isAdmin');
});

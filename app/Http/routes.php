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

Route::any('/', ['as'=>'home', 'middleware' => 'web', function () {
    return view('welcome');
}]);

Route::any('/task/categories', ['as'=>'categories', 'middleware' => 'web', 'uses'=>'TasksController@categories']);
Route::any('/task/list/{id}', ['as'=>'tasks_from_category', 'middleware' => 'web', 'uses'=>'TasksController@fromCategory']);
Route::any('/task/details/{id}', ['as'=>'task_details', 'middleware' => 'web', 'uses'=>'TasksController@details']);
Route::any('/task/new_task', ['as'=>'new_task', 'middleware' => 'web', 'uses'=>'TasksController@new_task']);
Route::any('/task/edit/{id}', ['as'=>'edit_task', 'middleware' => 'web', 'uses'=>'TasksController@edit_task']);

Route::any('/category/new_category', ['as'=>'new_category', 'middleware' => 'web', 'uses'=>'CategoriesController@new_category']);
Route::any('/category/edit_category/{id}', ['as'=>'edit_category', 'middleware' => 'web', 'uses'=>'CategoriesController@edit_category']);
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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

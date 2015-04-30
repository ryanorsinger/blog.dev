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
	return View::make('sample');
});

/**
 * Routes for blog project resources
 */
Route::group(array('prefix' => 'blog'), function()
{
    Route::resource('posts', 'PostsController');
});

Route::resource('users', 'UsersController');
Route::resource('tags', 'TagsController');

/**
 * Routes for the Employees_DB examples
 */
Route::group(array('prefix' => 'human-resources'), function()
{
    Route::resource('departments', 'DepartmentsController');
    Route::resource('employees', 'EmployeesController');
    Route::resource('salaries', 'SalariesController');
    Route::resource('titles', 'TitlesController');
}

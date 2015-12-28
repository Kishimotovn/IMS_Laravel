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

Route::get('/', 'UserController@index');

Route::get('companies', 'CompanyController@index');
Route::get('companies/create', 'CompanyController@create');
Route::get('companies/{company_name}', 'CompanyController@show');
Route::post('companies', 'CompanyController@store');

Route::get('students', 'UserController@showAllStudents');
Route::get('students/create', 'UserController@createStudent');
Route::get('students/{student_id}', 'UserController@showStudent');
Route::post('students', 'UserController@storeStudent');

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

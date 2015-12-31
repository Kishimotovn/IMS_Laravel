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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'UserController@index');
    Route::get('users/reg/{company_id}', 'UserController@reg');
    Route::get('users/unreg/{company_id}', 'UserController@unreg');
    Route::get('users/list', 'UserController@showUserList');
    Route::resource('companies', 'CompanyController');

    Route::resource('users', 'UserController');

    Route::resource('posts', 'PostsController');

    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['api']], function () {
    Route::get('api/{user_id}',['uses'=>'UserController@returnUser', 'middleware'=>'auth.basic']);
    Route::post('api',['uses'=>'UserController@createUser', 'middleware'=>'auth.basic']);
    Route::delete('api/{user_id}',['uses'=>'UserController@deleteUser', 'middleware'=>'auth.basic']);
});

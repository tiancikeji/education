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

Route::get('/', 'HomeController@showWelcome');

Route::get('/sessions/new', 'SessionsController@newpage');

Route::get('/registrations/new', 'RegistrationsController@newpage');
Route::post('/registrations/store', 'RegistrationsController@store');


Route::get('/plan', 'PlansController@index');


Route::group(array('prefix' => 'admin'), function()
{

    Route::get('main','AdminController@main' );
    Route::resource('topics', 'AdminTopicsController');
    Route::resource('videos', 'AdminVideosController');
    Route::resource('users', 'AdminUsersController');
    Route::resource('papers', 'AdminPapersController');
});




// Route::resource('papers', 'PapersController');
// 
// Route::resource('exercises', 'ExercisesController');
// 
// Route::resource('answers', 'AnswersController');

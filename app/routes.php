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
Route::post('/sessions/save', 'SessionsController@save');
Route::get('/sessions/delete', 'SessionsController@delete');

Route::get('/registrations/new', 'RegistrationsController@newpage');
Route::post('/registrations/store', 'RegistrationsController@store');


Route::get('/plan', 'PlansController@index');

Route::get('/upgrade', 'UpgradeController@index');
Route::get('/usercenter', 'UserCenterController@index');
Route::get('/usercenter/updatepassword', 'UserCenterController@updatepassword');

Route::resource('news', 'NewsController');
Route::resource('topics', 'TopicsController');
Route::resource('videos', 'VideosController');
Route::resource('papers', 'PapersController');
Route::resource('messages', 'MessagesController');
Route::resource('mywords', 'MywordsController');
Route::resource('words', 'WordsController');

Route::group(array('prefix' => 'admin'), function()
{

    Route::get('main','AdminController@main' );
    Route::resource('topics', 'AdminTopicsController');
    Route::resource('videos', 'AdminVideosController');
    Route::resource('users', 'AdminUsersController');
    Route::resource('papers', 'AdminPapersController');
    Route::resource('exercises', 'AdminExercisesController');
    Route::resource('answers', 'AdminAnswersController');
    Route::resource('news', 'AdminNewsController');
    Route::resource('messages', 'AdminMessagesController');
    Route::resource('words', 'AdminWordsController');
});










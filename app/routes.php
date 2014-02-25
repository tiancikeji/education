<?php

/*
|-------------------------------------------------------------------------- | Application Routes
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
Route::get('/confirm', 'SessionsController@confirm');
Route::get('/sessions/delete', 'SessionsController@delete');
Route::get('/forget', 'SessionsController@forgetpassword');
Route::post('/resetpassword', 'SessionsController@resetpassword');

Route::get('/registrations/new', 'RegistrationsController@newpage');


Route::get('/sendemail', 'RegistrationsController@sendemail');
Route::get('/registrations/success', 'RegistrationsController@success');
Route::post('/registrations/store', 'RegistrationsController@store');

Route::get('/myexercises/add', 'MyexercisesController@add');
Route::get('/adminpayments/search', 'AdminPaymentsController@search');
Route::resource('news', 'NewsController');
Route::resource('exercises', 'ExercisesController');
Route::post('/usercenter/updatepassword', 'UserCenterController@updatepassword');
Route::get('/mywords/add', 'MywordsController@add');
Route::resource('videos', 'VideosController');

Route::group(array('before'=>'auth'),function(){

  Route::get('/papers/search', 'PapersController@search');
  Route::resource('payments', 'PaymentsController');
  Route::get('/upgrade', 'UpgradeController@index');
  Route::get('/plan', 'UserCenterController@plan');
  Route::get('/usercenter', 'UserCenterController@index');
  Route::post('/usercenter/update', 'UserCenterController@update');
  Route::get('/update_user', 'UserCenterController@update_user');
  Route::get('/usercenter/updatepassword', 'UserCenterController@updatepassword');
  Route::post('/videos/check', 'VideosController@check');
  Route::post('/topics/check', 'TopicsController@check');
  Route::resource('topics', 'TopicsController');
  Route::resource('papers', 'PapersController');
  Route::resource('messages', 'MessagesController');
  Route::resource('mywords', 'MywordsController');
  Route::resource('words', 'WordsController');
  Route::resource('comments', 'CommentsController');
  Route::resource('teachers', 'TeachersController');
  Route::resource('exams', 'ExamsController');
  Route::resource('homeworks', 'HomeworksController');
  Route::resource('reports', 'ReportsController');
  Route::resource('compositions', 'CompositionsController');
  Route::resource('userteachers', 'UserteachersController');


});

// Route::resource('admin/users/', 'AdminUsersController');
 // Route::get('/admin/users/search', 'AdminUsersController@search');
Route::get('admin/signin','AdminController@signin' );
Route::post('admin/login','AdminController@login' );

Route::get('admin/homeworks/add_exercise','AdminHomeworksController@add_exercise' );
Route::get('admin/homeworks/delete_exercise','AdminHomeworksController@delete_exercise' );

Route::group(array('before'=>'admin','prefix' => 'admin'), function()
{
    Route::get('main','AdminController@main' );
    Route::resource('topics', 'AdminTopicsController');
    Route::resource('videos', 'AdminVideosController');
    Route::resource('comments', 'AdminCommentsController');
    Route::resource('users', 'AdminUsersController');
    Route::resource('papers', 'AdminPapersController');
    Route::resource('exercises', 'AdminExercisesController');
    Route::resource('answers', 'AdminAnswersController');
    Route::resource('news', 'AdminNewsController');
    Route::resource('messages', 'AdminMessagesController');
    Route::resource('words', 'AdminWordsController');
    Route::resource('teachers', 'AdminTeachersController');
    Route::resource('plans', 'AdminPlansController');
    Route::resource('payments', 'AdminPaymentsController');
    Route::resource('exams', 'AdminExamsController');
    Route::resource('homeworks', 'AdminHomeworksController');
    Route::resource('plantasks', 'AdminPlanTasksController');
    Route::resource('userplans', 'AdminUserplansController');
    Route::resource('reports', 'AdminReportsController');
    Route::resource('compositions', 'AdminCompositionsController');
    Route::resource('userteachers', 'AdminUserteachersController');
});










Route::resource('permissions', 'PermissionsController');

Route::resource('adminpermissions', 'AdminpermissionsController');


Route::resource('myexercises', 'MyexercisesController');


Route::resource('articles', 'ArticlesController');

Route::resource('points', 'PointsController');

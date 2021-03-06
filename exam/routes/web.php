<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('role', 'RoleController');
Route::resource('roleuser', 'RoleuserController');
Route::resource('usermajor','UsermajorController');
Route::resource('user','UserController')->middleware("auth");
Route::resource('quiz','QuizController');
Route::resource('question','QuestionController');
//Route::resource('quizhistory','QuizhistoryController');


Route::get('/upload','UploadController@index');
Route::post('/upload/image','UploadController@store');
Route::get('/upload/show','UploadController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', 'AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'AuthController@handleProviderCallback');
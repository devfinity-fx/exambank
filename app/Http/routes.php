<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',                 'PagesController@index');
Route::get('login',             'Auth\AuthController@loginForm');
Route::get('logout',            'Auth\AuthController@logoutAuth');
Route::post('login',            'Auth\AuthController@loginAuth');

Route::get('exam',              'ExamController@index');
Route::get('exam/create',       'ExamController@create');

Route::get('mail',              'MailController@index');
Route::get('mail/compose',      'MailController@create');
Route::get('mail/{id}',         'MailController@view');


Route::get('events',            'EventController@index');

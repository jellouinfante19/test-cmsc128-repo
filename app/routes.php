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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/', array('as' => 'login', 'uses' => 'HomeController@showWelcome'));

Route::get('/auth/login', array('as' => 'login', 'uses' => 'HomeController@view_login'));

Route::post('add_subject', array('as' => 'add_subject', 'uses' => 'AdminController@doAddSubj'));

Route::post('add_student', array('as' => 'add_student', 'uses' => 'AdminController@doAddStudent'));

Route::get('view_subject', array('as' => 'view_subject', 'uses' => 'AdminController@view_subj'));

Route::get('home', array('as' => 'home', 'uses' => 'AdminController@showHome'));

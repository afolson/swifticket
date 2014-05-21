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

// home/index
Route::get('/', 'HomeController@index');

// Guest filter redirects to '/' if the user is logged in
Route::group(array('before' => 'guest'), function() {

	// Group routes to quickly add a consistent prefix to the URL
	Route::group(array('prefix' => 'login'), function() {
		
		Route::get('/', 'LoginController@getLogin');

		Route::group(array('prefix' => 'butt'), function() {
			
			Route::get('/login', 'LoginController@postLogin');

		});
	});
});

// We will uncomment this when authentication is working
// Route::group(array('before' => 'auth'), function() {

	Route::group(array('prefix' => 'tickets'), function() {
			
		Route::get('/',			'TicketController@index');
		Route::get('/create',	'TicketController@getCreate');
		Route::get('/status',	'TicketController@getStatus');

		Route::group(array('prefix' => 'butt'), function() {
			
			Route::post('/create',	'TicketController@postCreate');
			Route::get('/status',	'TicketController@postStatus');
		
		});
	});

	Route::group(array('prefix' => 'admin'), function() {
			
		Route::get('/',			'AdminController@index');
		Route::get('/users',	'AdminController@getUsers');
		Route::get('/users/view/{id}','AdminController@getUser');
		Route::get('/settings',	'AdminController@getSettings');

	});

// });




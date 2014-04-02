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
Route::get('/',
		array(
			'as' => 'home/index',
			'uses' => 'HomeController@index'
		)
);

// Guest filter redirects to '/' if the user is logged in
Route::group(array('before' => 'guest'), function() {

	// Group routes to quickly add a consistent prefix to the URL
	Route::group(array('prefix' => 'login'), function() {
		
		// login/index
		Route::get('/',
				array(
					'as' => 'login/index',
					'uses' => 'LoginController@index'
				)
		);

		Route::group(array('prefix' => 'butt'), function() {
			
			// login/butt/login
			Route::get('/login',
					array(
						'as' => 'login/butt/login',
						'uses' => 'ButtLoginController@login'
					)
			);
		});
	});
});

Route::group(array('prefix' => 'tickets'), function() {
		
	// tickets/index
	Route::get('/',
			array(
				'as' => 'tickets/index',
				'uses' => 'TicketController@index'
			)
	);

	// tickets/create
	Route::get('/create',
			array(
				'as' => 'tickets/create',
				'uses' => 'TicketController@create'
			)
	);

	// tickets/status
	Route::get('/status',
			array(
				'as' => 'tickets/status',
				'uses' => 'TicketController@status'
			)
	);

	Route::group(array('prefix' => 'butt'), function() {

		// tickets/butt/create
		Route::post('/create',
				array(
					'as' => 'tickets/butt/create',
					'uses' => 'ButtTicketController@create'
				)
		);

		// tickets/butt/status
		Route::get('/status',
				array(
					'as' => 'tickets/butt/status',
					'uses' => 'ButtTicketController@status'
				)
		);
	});
});
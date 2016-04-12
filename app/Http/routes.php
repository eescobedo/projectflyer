<?php


//Route::get('/', 'WelcomeController@index');
Route::get('/', function (){
	return view ('pages.home');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource ('flyers', 'FlyersController');
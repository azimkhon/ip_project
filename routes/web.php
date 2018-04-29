<?php


Auth::routes();

Route::get('/', 'HomeController@index') -> name('home');

Route::group(['prefix' => '/account', 'middleware' => ['auth'], 'namespace'=>'Account'],
function()
{
	Route::get('/', 'AccountController@index') -> name('account');
});

// Route::group(['prefix'=>'admin/{id}'], function()
// {
// 	Route::get('page/create', function()
// 	{ 
// 		echo "page/create";
// 	});
// 	Route::get('page/edit', function()
// 	{ 
// 		echo "page/edit";
// 	});
// });
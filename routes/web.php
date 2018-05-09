<?php


Auth::routes();

Route::get('/', 'HomeController@index') -> name('home');

Route::group(['prefix' => '/account', 'middleware' => ['auth'], 'namespace'=>'Account'],
function()
{
	Route::get('/', 'AccountController@index') -> name('account');
	
	Route::group(['prefix' => '/files'], function()
	{
		Route::get('/', 'FileController@index') -> name('account.files.index'); 

		Route::get('/{file}/edit', 'FileController@edit') -> name('account.files.edit'); 

		Route::patch('/{file}', 'FileController@update') -> name('account.files.update'); 

		Route::post('/{file}', 'FileController@store') -> name('account.files.store'); 

		Route::get('/create', 'FileController@create') -> name('account.files.create.start'); 
		
		Route::get('/{file}/create', 'FileController@create') -> name('account.files.create');  
	});
});
 
 Route::post('/{file}/upload','Upload\UploadController@store')->name('upload.store');

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
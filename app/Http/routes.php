<?php
/*Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
*/

get('/', ['as' => 'main', 'uses' => 'IndexController@index']);
get('projects', ['as' => 'projectList', 'uses' => 'IndexController@projectList']);
get('projects/{slug}', ['as' => 'projectCart', 'uses' => 'IndexController@projectCart']);

get('about', ['as' => 'about', 'uses' => 'IndexController@about']);

get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
get('blog/{slug}', ['as' => 'blog.record', 'uses' => 'BlogController@cart']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

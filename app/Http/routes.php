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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');
Route::group(['prefix' => 'home'], function(){
	
	Route::group(['prefix' => 'alunos'], function(){
		Route::get('listagem', 'Alunos@index');
		Route::get('cadastrar', 'Alunos@create');
		Route::post('cadastrar', 'Alunos@store');
	});

	Route::group(['prefix' => 'professores'], function(){
		Route::get('listagem', 'PRofessores@index');
		Route::get('cadastrar', 'PRofessores@create');
		Route::post('cadastrar', 'PRofessores@store');
	});

	Route::group(['prefix' => 'turmas'], function(){
		Route::get('listagem', 'Turmas@index');
		Route::get('cadastrar', 'Turmas@create');
		Route::post('cadastrar', 'Turmas@store');
	});
});


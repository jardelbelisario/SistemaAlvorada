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
		Route::get('listagem', 'Professores@index');
		Route::get('cadastrar', 'Professores@create');
		Route::post('cadastrar', 'Professores@store');
	});

	Route::group(['prefix' => 'disciplinas'], function(){
		Route::get('listagem', 'Disciplinas@index');
		Route::get('cadastrar', 'Disciplinas@create');
		Route::post('cadastrar', 'Disciplinas@store');
	});

	Route::group(['prefix' => 'notas'], function(){
		Route::get('listagem', 'Notas@index');
		Route::get('cadastrar', 'Notas@index');
		Route::post('cadastrar', 'Notas@store');
		Route::get('{codigoTurma}/cadastrar', 'Notas@create');
	});


});


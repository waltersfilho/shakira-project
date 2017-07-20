<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('index');

//Rota para servir a pagina contato
Route::get('/contato', 'ContatoController@index')->name('contato');

//Rota para enviar contato que esta na view de contato
Route::post('/contato', 'ContatoController@enviarContato')->name('enviarContato');

//Rota para servir a pagina servicos
Route::get('/cordas', 'CordasController@index')->name('cordas');

Route::get('/violoes', 'CordasController@violoes')->name('violoes');
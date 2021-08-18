<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "HomeController@index");


Route::prefix('/tarefas')->group(function () {

    Route::get('/', 'TarefasController@index'); // Listagem de Tarefas

    Route::get('/add', 'TarefasController@add'); // tela de adicão de novas tarefas
    Route::post('/add', 'TarefasController@addAction'); // Ação de adição

    Route::get('/edit/{id}', 'TarefasController@edit'); // Tela de Edição
    Route::post('/edit/{id}', 'TarefasController@editAction'); //  Ação de edição

    Route::get('/delete/{id}', 'TarefasController@delete'); // Ação de deletar

    Route::get('/marcar/{id}', 'TarefasController@resolved'); // Marcar resolvido ou não

});

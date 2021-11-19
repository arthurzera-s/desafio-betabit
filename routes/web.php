<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
})->name('home');

//Route::get('contatos', [ContatosController::class, 'index']);
Route::get('/contatos', 'App\Http\Controllers\ContatosController@index')->name('listarContatos');
Route::get('/novo', 'App\Http\Controllers\ContatosController@create')->name('novoContato');
Route::post('/contatos', 'App\Http\Controllers\ContatosController@store');
Route::get('/contatos/apagar/{id}', 'App\Http\Controllers\ContatosController@destroy');
Route::get('/contatos/editar/{id}', 'App\Http\Controllers\ContatosController@edit');
Route::post('/contatos/{id}', 'App\Http\Controllers\ContatosController@update');
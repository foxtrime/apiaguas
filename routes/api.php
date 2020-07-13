<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');


Route::get('marcacao', 'ApiMarcacaoController@index');
Route::post('marcacao', 'ApiMarcacaoController@store');
Route::get('marcacao/{id}', 'ApiMarcacaoController@show');


Route::get('endereco', 'ApiClienteEnderecoController@index');



Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');

    // Route::get('tasks/{id}', 'TaskController@show');
    // Route::post('tasks', 'TaskController@store');
    // Route::put('tasks/{id}', 'TaskController@update');
    // Route::delete('tasks/{id}', 'TaskController@destroy');
});
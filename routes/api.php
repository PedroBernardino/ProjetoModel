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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('encontraAluno/{id}','AulaController@findStudent');
Route::get('listaAluno', 'AulaController@listStudent');
Route::post('criaAluno', 'AulaController@createStudent');
Route::put('editaAluno/{id}', 'AulaController@updateStudent');
Route::delete('deletaAluno/{id}', 'AulaController@deleteStudent');


Route::get('encontraBoletim/{id}','BoletimController@findReport_card');
Route::get('listaBoletim', 'BoletimController@listReport_card');
Route::post('criaBoletim', 'BoletimController@createReport_card');
Route::put('editaBoletim/{id}', 'BoletimController@updateReport_card');
Route::delete('deletaBoletim/{id}', 'BoletimController@deleteReport_card');
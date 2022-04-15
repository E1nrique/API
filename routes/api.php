<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/cargaareas', 'ApiController@cargaareas');
Route::get('/cargaempleados', 'ApiController@cargaempleados');
Route::get('/buscaempleadoporid_empleado/{id}','ApiController@buscaempleadoporid_empleado');
Route::delete('/eliminaempleado/{id_empleado}', 'ApiController@eliminaempleado');
Route::post('/altaempleado', 'ApiController@altaempleado');
Route::put('/modificaempleados', 'ApiController@modificaempleados');






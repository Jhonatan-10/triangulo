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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Solicitud', 'SolicitudController@Solicitud');

Route::post('recepcionsolicitud',['as'=>'solicitud.recepcion', 'uses'=>'SolicitudController@recepcionsolicitud']);


Route::get('triangulo', function () {
    return view('triangulo');
});
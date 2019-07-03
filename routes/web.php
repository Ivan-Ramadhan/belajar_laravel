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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/stockopname', 'StockOpnameController@index');
Route::get('/stockopname/export_excel', 'StockOpnameController@export_excel');
Route::post('/stockopname/import_excel', 'StockOpnameController@import_excel');

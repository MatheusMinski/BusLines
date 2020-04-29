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

Route::get('/', 'Welcome@index')->name('home');
Route::get('/CampoReal', 'CampoReal@queryCampoReal')->name('queryCampoReal');

Route::get('/CEDETEG', 'Cedeteg@pontosCedeteg')->name('pontosCedeteg');
Route::get('/CEDETEG/query/{nomePonto}', 'Cedeteg@queryCedeteg')->name('queryCedeteg');

Route::get('/SantaCruz', 'SantaCruz@pontosSantaCruz')->name('pontosSantaCruz');
Route::get('/SantaCruz/query/{nomePonto}', 'SantaCruz@querySantaCruz')->name('querySantaCruz');

Route::get('/ManualQuery/View', 'ManualQuery@manualQueryView')->name('manualQueryView');
Route::post('/ManualQuery/Results', 'ManualQuery@manualQueryResult')->name('manualQueryResults');


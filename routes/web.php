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
Route::get('/CampoReal', 'CampoReal@querryCampoReal')->name('querryCampoReal');
Route::get('/CEDETEG', 'Cedeteg@pontosCedeteg')->name('pontosCedeteg');
Route::get('/SantaCruz', 'SantaCruz@querrySantaCruz')->name('querrySantaCruz');
Route::get('/ManualQuerry/View', 'ManualQuerry@manualQuerryView')->name('manualQuerryView');
Route::post('/ManualQuerry/Results', 'ManualQuerry@manualQuerryResult')->name('manualQuerryResults');


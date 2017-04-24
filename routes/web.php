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

Route::get('/', 'ScheduleController@viewSchedule');
Route::get('/edit', 'ScheduleController@editSchedule');
Route::get('/game/{id}/edit', 'ScheduleController@edit');
Route::get('/game/{id}/edit/score', 'ScheduleController@editScore');
Route::post('/game/{id}/edit/score', 'ScheduleController@saveScore');
Route::get('/team/create', 'TeamController@create');
Route::get('/team/create/{id}', 'TeamController@edit');
Route::post('/team/create', 'TeamController@store');

Route::get('/seed', 'SeedController@seed');

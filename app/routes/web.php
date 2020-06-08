<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;


//\Illuminate\Support\Facades\Route::get('shifts',  ['uses' => 'ShiftsController@showAllAuthors']);
Route::post('shifts', ['uses' => 'ShiftsController@bulkCreate']);
Route::get('shifts/{id}', ['uses' => 'ShiftsController@view']);
Route::get('shifts', ['uses' => 'ShiftsController@index']);
Route::delete('shifts', ['uses' => 'ShiftsController@truncate']);


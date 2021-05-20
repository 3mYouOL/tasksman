<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('projects', 'App\Http\Controllers\ProjectController@index');
Route::post('projects', 'App\Http\Controllers\ProjectController@store');
Route::get('projects/{id}', 'App\Http\Controllers\ProjectController@show');
Route::put('projects/{project}', 'App\Http\Controllers\ProjectController@markAsCompleted');
Route::post('tasks', 'App\Http\Controllers\TaskController@store');
Route::put('tasks/{task}', 'App\Http\Controllers\TaskController@markAsCompleted');

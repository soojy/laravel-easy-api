<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

//Route::get('/', function () {
//    return 'OK';
//});

//Route::group(["prefix"=>"todos", "as" =>"todos."], function () {
//    Route::get('/', [TodoController::class, "index"]);
//    Route::post('/', [TodoController::class, "store"]);
//    Route::get('/{id}', [TodoController::class, "show"]);
//    Route::patch('/{id}', [TodoController::class, "update"]);
//    Route::delete('/{id}', [TodoController::class, "destroy"]);
//});

Route::resource('/todos', TodoController::class)->except(["create","edit"]);



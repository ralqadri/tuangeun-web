<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('restaurant', [RestoController::class, 'index']);
// Route::get('restaurant', [RestoController::class, 'show']);
Route::get('restaurant/{nama}', [RestoController::class, 'showSearch']);
Route::get('restaurant/{id}', [RestoController::class, 'show']);
Route::get('restaurant/{id}', [RestoController::class, 'show']);

Route::post('restaurant', [RestoController::class, 'save']);

Route::put('restaurant', [RestoController::class, 'update']);

Route::delete('restaurant', [RestoController::class, 'delete']);
Route::delete('restaurant/{id}', [RestoController::class, 'delete']);
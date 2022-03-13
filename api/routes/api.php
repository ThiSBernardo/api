<?php

use App\Http\Controllers\InteressadosController;
use App\Models\interessado;
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

Route::get('/interessados', [InteressadosController::class, 'index']);
Route::post('/interessados', [InteressadosController::class, 'store']);
Route::get('/interessados/{id}', [InteressadosController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use App\Http\Controllers\InteressadosController;
use App\Models\interessado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas da API
|--------------------------------------------------------------------------
|
| Aqui é onde eu registrei rotas de API para a aplicação. 
| // http://localhost:8000/api/interessados
*/

Route::get('/interessados', [InteressadosController::class, 'index']);
Route::get('/interessados/search/{name}', [InteressadosController::class, 'search']);
Route::post('/interessados', [InteressadosController::class, 'store']);
Route::get('/interessados/{id}', [InteressadosController::class, 'show']);
Route::put('/interessados/{id}', [InteressadosController::class, 'update']);
Route::delete('/interessados/{id}', [InteressadosController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

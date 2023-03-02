<?php

use App\Http\Controllers\api\categoriasController;
use App\Http\Controllers\api\VideosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/videos', VideosController::class);
//Route::get('/videos', [VideosController::class, 'index']);
//Route::post('/videos', [VideosController::class, 'store']);
//Route::get('/videos/{video}', [VideosController::class, 'show']);

Route::apiResource('/categorias', CategoriasController::class);
Route::get('/categorias/{categoria}/videos', [ CategoriasController::class, 'videoPerCategory']);

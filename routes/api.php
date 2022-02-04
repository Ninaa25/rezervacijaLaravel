<?php

use App\Http\Controllers\GostController;
use App\Http\Controllers\StoController;
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

Route::get('gost', [GostController::class, 'index']);
Route::get('gost/{gost}', [GostController::class, 'show']);
Route::put('gost/{gost}', [GostController::class, 'update']);
Route::delete('gost/{gost}', [GostController::class, 'destroy']);
Route::get('sto', [StoController::class, 'index']);
Route::get('sto/{sto}', [StoController::class, 'show']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

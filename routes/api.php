<?php

use App\Http\Controllers\GostController;
use App\Http\Controllers\StoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthentificationController;

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


Route::post('register', [AuthentificationController::class, 'register']);
Route::post('login', [AuthentificationController::class, 'login']);
Route::get('gost', [GostController::class, 'index']);
Route::get('gost/{gost}', [GostController::class, 'show']);
Route::get('sto', [StoController::class, 'index']);
Route::get('sto/{sto}', [StoController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('gost/{gost}', [GostController::class, 'update']);
    Route::delete('gost/{gost}', [GostController::class, 'destroy']);
    Route::post('logout', [AuthentificationController::class, 'logout']);
});

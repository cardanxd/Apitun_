<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GiroController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\SegmentoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\VehiculoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tareas', [TaskController::class,'index']);
Route::post('tareas', [TaskController::class,'store']);
Route::get('tareas/buscar', [TaskController::class,'show']);
Route::put('tareas/actualizar', [TaskController::class,'update']);
Route::delete('tareas/borrar/{id}', [TaskController::class,'destroy']);

Route::get('sucursales', [SucursalController::class,'index']);
Route::post('sucursales', [SucursalController::class,'store']);
Route::get('sucursales/{sucursal}', [SucursalController::class,'show']);
Route::put('sucursales/{sucursal}', [SucursalController::class,'update']);
Route::delete('sucursales/borrar/{id}', [SucursalController::class,'destroy']);

Route::get('segmentos', [SegmentoController::class,'index']);
Route::post('segmentos', [SegmentoController::class,'store']);
Route::get('segmentos/{segmento}', [SegmentoController::class,'show']);
Route::put('segmentos/actualizar/{id}', [SegmentoController::class,'update']);
Route::delete('segmentos/borrar/{id}', [SegmentoController::class,'destroy']);

Route::get('giros', [GiroController::class,'index']);
Route::post('giros', [GiroController::class,'store']);
Route::get('giros/{giro}', [GiroController::class,'show']);
Route::put('giros/act/{id}', [GiroController::class,'update']);
Route::delete('giros/borrar/{id}', [GiroController::class,'destroy']);

Route::get('clientes', [ClienteController::class,'index']);
Route::post('clientes', [ClienteController::class,'store']);
Route::get('clientes/{cliente}', [ClienteController::class,'show']);
Route::put('clientes/actualizar/{id}', [ClienteController::class,'update']);
Route::delete('clientes/borrar/{id}', [ClienteController::class,'destroy']);

Route::get('vehiculos', [VehiculoController::class,'index']);
Route::post('vehiculos', [VehiculoController::class,'store']);
Route::get('vehiculos/{vehiculo}', [VehiculoController::class,'show']);
Route::put('vehiculos/actualizar/{id}', [VehiculoController::class,'update']);
Route::delete('vehiculos/borrar/{id}', [VehiculoController::class,'destroy']);

Route::get('ordenes', [OrdenController::class,'index']);
Route::post('ordenes', [OrdenController::class,'store']);
Route::get('ordenes/{orden}', [OrdenController::class,'show']);
Route::put('ordenes/actualizar/{id}', [OrdenController::class,'update']);
Route::delete('ordenes/borrar/{id}', [OrdenController::class,'destroy']);
<?php

use App\Http\Controllers\CentroCostoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CondicionVentaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\GiroController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\SegmentoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('condiciones', [CondicionVentaController::class,'index']);
Route::post('condiciones', [CondicionVentaController::class,'store']);
Route::get('condiciones/{condicion}', [CondicionVentaController::class,'show']);
Route::get('condiciones/ordenes/{id}', [CondicionVentaController::class,'ordenes']);
Route::put('condiciones/{condicion}', [CondicionVentaController::class,'update']);
Route::delete('condiciones/{condicion}', [CondicionVentaController::class,'destroy']);

Route::get('centrocostos', [CentroCostoController::class,'index']);
Route::post('centrocostos', [CentroCostoController::class,'store']);
Route::get('centrocostos/{centrocosto}', [CentroCostoController::class,'show']);
Route::get('centrocostos/ordenes/{id}', [CentroCostoController::class,'ordenes']);
Route::put('centrocostos/{centrocosto}', [CentroCostoController::class,'update']);
Route::delete('centrocostos/{centrocosto}', [CentroCostoController::class,'destroy']);

Route::get('clientes', [ClienteController::class,'index']);
Route::post('clientes', [ClienteController::class,'store']);
Route::get('clientes/{cliente}', [ClienteController::class,'show']);
Route::get('clientes/vehiculos/{id}', [ClienteController::class,'vehiculos']);
Route::get('clientes/ordenes/{id}', [ClienteController::class,'ordenes']);
Route::put('clientes/{cliente}', [ClienteController::class,'update']);
Route::delete('clientes/{cliente}', [ClienteController::class,'destroy']);

Route::get('vehiculos', [VehiculoController::class,'index']);
Route::post('vehiculos', [VehiculoController::class,'store']);
Route::get('vehiculos/{vehiculo}', [VehiculoController::class,'show']);
Route::get('vehiculos/cliente/{id}', [VehiculoController::class,'cliente']);
Route::put('vehiculos/{vehiculo}', [VehiculoController::class,'update']);
Route::delete('vehiculos/{vehiculo}', [VehiculoController::class,'destroy']);

Route::get('ordenes', [OrdenController::class,'index']);
Route::post('ordenes', [OrdenController::class,'store']);
Route::get('ordenes/{orden}', [OrdenController::class,'show']);
Route::get('ordenes/cliente/{id}', [OrdenController::class,'cliente']);
Route::get('ordenes/vehiculo/{id}', [OrdenController::class,'vehiculo']);
Route::put('ordenes/{orden}', [OrdenController::class,'update']);
Route::delete('ordenes/{orden}', [OrdenController::class,'destroy']);
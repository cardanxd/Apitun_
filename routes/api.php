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

Route::get('sucursales', [SucursalController::class,'index']);
Route::post('sucursales', [SucursalController::class,'store']);
Route::get('sucursales/{sucursal}', [SucursalController::class,'show']);
Route::get('sucursales/clientes/{id}', [SucursalController::class,'clientes']);
Route::put('sucursales/{sucursal}', [SucursalController::class,'update']);
Route::delete('sucursales/{sucursal}', [SucursalController::class,'destroy']);

Route::get('segmentos', [SegmentoController::class,'index']);
Route::post('segmentos', [SegmentoController::class,'store']);
Route::get('segmentos/{segmento}', [SegmentoController::class,'show']);
Route::get('segmentos/clientes/{id}', [SegmentoController::class,'clientes']);
Route::put('segmentos/{segmento}', [SegmentoController::class,'update']);
Route::delete('segmentos/{segmento}', [SegmentoController::class,'destroy']);

Route::get('giros', [GiroController::class,'index']);
Route::post('giros', [GiroController::class,'store']);
Route::get('giros/{giro}', [GiroController::class,'show']);
Route::get('giros/clientes/{id}', [GiroController::class,'clientes']);
Route::put('giros/{giro}', [GiroController::class,'update']);
Route::delete('giros/{giro}', [GiroController::class,'destroy']);

Route::get('equipos', [EquipoController::class,'index']);
Route::post('equipos', [EquipoController::class,'store']);
Route::get('equipos/{equipo}', [EquipoController::class,'show']);
Route::get('equipos/vehiculos/{id}', [EquipoController::class,'vehiculos']);
Route::put('equipos/{equipo}', [EquipoController::class,'update']);
Route::delete('equipos/{equipo}', [EquipoController::class,'destroy']);

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
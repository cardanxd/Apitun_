<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarVehiculosRequest;
use App\Http\Requests\GuardarVehiculoRequest;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Vehiculo::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarVehiculoRequest $request)
    {
        Vehiculo::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function show(Vehiculo $vehiculo)
    {
        return response()->json([
            'res'=>true,
            'vehiculo'=>$vehiculo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function update(ActualizarVehiculosRequest $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>"Actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>"Eliminado correctamente"
        ], 200);
    }
}

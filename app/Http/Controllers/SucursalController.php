<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarSucursalRequest;
use App\Http\Requests\GuardarSucursalRequest;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Sucursal::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarSucursalRequest $request)
    {
        Sucursal::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $segmento
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        return response()->json([
            'res'=>true,
            "sucursal"=>$sucursal
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $segmento
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarSucursalRequest $request, Sucursal $sucursal)
    {
        $sucursal->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>"Actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $segmento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>"Eliminado correctamente"
        ], 200);
    }
}

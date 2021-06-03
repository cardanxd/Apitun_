<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarOrdenRequest;
use App\Http\Requests\GuardarOrdenRequest;
use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Orden::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(GuardarOrdenRequest $request)
    {
        Orden::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        return response()->json([
            'res'=>true,
            'orden'=>$orden
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */

    public function update(ActualizarOrdenRequest $request, Orden $orden)
    {
        $orden->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>"Actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        $orden->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>"Eliminado correctamente"
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarSegmentoRequest;
use App\Http\Requests\GuardarSegmentoRequest;
use App\Models\Segmento;
use Illuminate\Http\Request;

class SegmentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Segmento::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarSegmentoRequest $request)
    {
        Segmento::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function show(Segmento $segmento)
    {
        return response()->json([
            'res'=>true,
            'segmento'=>$segmento
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function update(ActualizarSegmentoRequest $request, Segmento $segmento)
    {
        $segmento->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>"Actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function destroy(Segmento $segmento)
    {
        $segmento->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>"Eliminado correctamente"
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

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

    public function update(Request $request)
    {
        $task = Segmento::findOrFail($request->id);

        $task->nombre=$request->nombre;

        $task->save();

        return $task;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $task = Segmento::destroy($request->id);
        return $task;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}

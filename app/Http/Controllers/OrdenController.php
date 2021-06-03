<?php

namespace App\Http\Controllers;

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

    public function update(Request $request)
    {
        $task = Orden::findOrFail($request->id);

        $task->fecha = $request->fecha;
        $task->cilindros=$request->cilindros;
        $task->condicionventa = $request->condicionventa;
        $task->urgenciainicial = $request->urgenciainicial;
        $task->atencion = $request->atencion;
        $task->comentarios = $request->comentarios;
        $task->centrocosto = $request->centrocosto;
        $task->placa = $request->placa;
        $task->ceniceros = $request->ceniceros;
        $task->cristales_rotos = $request->cristales_rotos;
        $task->quemacocos = $request->quemacocos;
        $task->espejo_izq = $request->espejo_izq;
        $task->espejo_der = $request->espejo_der;
        $task->tapon = $request->tapon;
        $task->antena = $request->antena;
        $task->tapetes = $request->tapetes;
        $task->varilla = $request->varilla;
        $task->radio = $request->radio;
        $task->espejo_int = $request->esppejo_int;
        $task->gato = $request->gato;
        $task->extinguidor = $request->extinguidor;
        $task->emblemas = $request->emblemas;
        $task->encendedor = $request->encendedor;
        $task->llanta = $request->llanta;
        $task->km = $request->km;
        $task->combustible = $request->combustible;
        $task->transmision = $request->transmision;
        $task->vestiduras = $request->vestiduras;
        $task->save();

        return $task;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $task = Orden::destroy($request->id);
        return $task;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}

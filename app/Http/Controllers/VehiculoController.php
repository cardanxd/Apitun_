<?php

namespace App\Http\Controllers;

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

    public function update(Request $request)
    {
        $task = Vehiculo::findOrFail($request->id);

        $task->tipo = $request->tipo;
        $task->marca=$request->marca;
        $task->modelo=$request->modelo;
        $task->serie=$request->serie;
        $task->economico=$request->economico;
        $task->placa=$request->placa;

        $task->save();

        return $task;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $task = Vehiculo::destroy($request->id);
        return $task;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}

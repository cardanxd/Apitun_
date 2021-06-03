<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarGiroRequest;
use App\Models\Giro;
use Illuminate\Http\Request;

class GiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Giro::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(GuardarGiroRequest $request)
    {
        Giro::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function show(Giro $giro)
    {
        return response()->json([
            'res'=>true,
            'giro'=>$giro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Giro  $giro
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        $task = Giro::findOrFail($request->id);

        $task->nombre=$request->nombre;

        $task->save();

        return $task;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $task = Giro::destroy($request->id);
        return $task;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}

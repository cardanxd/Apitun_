<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarGiroRequest;
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

    public function update(ActualizarGiroRequest $request, Giro $giro)
    {
        $giro->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>"Actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giro $giro)
    {
        $giro->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>"Eliminado correctamente"
        ], 200);
    }
}

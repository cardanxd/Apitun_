<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Cliente::all();
        return $task;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(GuardarClienteRequest $request)
    {
        Cliente::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */

    public function show(Cliente $cliente)
    {
        return response()->json([
            'res'=>true,
            'cliente'=>$cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $task = Cliente::findOrFail($request->id);

        $task->nombre=$request->nombre;
        $task->razon=$request->razon;
        $task->rfc=$request->rfc;
        $task->email=$request->email;
        $task->calle=$request->calle;
        $task->exterior=$request->exterior;
        $task->interior=$request->interior;
        $task->ecalle=$request->ecalle;
        $task->ycalle=$request->ycalle;
        $task->colonia=$request->colonia;
        $task->postal=$request->postal;
        $task->ciudad=$request->ciudad;
        $task->estado=$request->estado;
        $task->pais=$request->pais;
        $task->particular=$request->particular;
        $task->oficina=$request->oficina;
        $task->movil=$request->movil;
        $task->limitecredito=$request->limitecredito;
        $task->diascredito=$request->diascredito;
        $task->diasbloqueo=$request->diasbloqueo;
        $task->descuento=$request->descuento;
        $task->birthday=$request->birthday;
        $task->sucursal=$request->sucursal;
        $task->segmento=$request->segmento;
        $task->giro=$request->giro;

        $task->save();

        return $task;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $task = Cliente::destroy($request->id);
        return $task;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarOrdenRequest;
use App\Http\Requests\GuardarOrdenRequest;
use App\Http\Resources\OrdenResource;
use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdenResource::collection(Orden::all());
    }

    public function cliente(String $id){
        $orden = Orden::findOrFail($id);
        return new OrdenResource($orden->cliente);
    }

    public function vehiculo(String $id){
        $orden = Orden::findOrFail($id);
        return new OrdenResource($orden->vehiculo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(GuardarOrdenRequest $request)
    {
        return new OrdenResource(Orden::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        return new OrdenResource($orden);
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
        return new OrdenResource($orden);
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
        return new OrdenResource($orden);
    }
}

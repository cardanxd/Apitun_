<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarVehiculosRequest;
use App\Http\Requests\GuardarVehiculoRequest;
use App\Http\Resources\VehiculoResource;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VehiculoResource::collection(Vehiculo::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarVehiculoRequest $request)
    {
        return new VehiculoResource(Vehiculo::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function show(Vehiculo $vehiculo)
    {
        return new VehiculoResource($vehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function update(ActualizarVehiculosRequest $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
        return new VehiculoResource($vehiculo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return new VehiculoResource($vehiculo);
    }
}

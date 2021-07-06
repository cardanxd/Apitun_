<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarEquipoRequest;
use App\Http\Requests\GuardarEquipoRequest;
use App\Http\Resources\EquipoResource;
use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EquipoResource::collection(Equipo::all());
    }

    public function vehiculos(String $id){
        $equipo = Equipo::findOrFail($id);
        return new EquipoResource($equipo->vehiculos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarEquipoRequest $request)
    {
        return new EquipoResource(Equipo::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        return new EquipoResource($equipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarEquipoRequest $request, Equipo $equipo)
    {
        $equipo->update($request->all());
        return new EquipoResource($equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return new EquipoResource($equipo);
    }
}

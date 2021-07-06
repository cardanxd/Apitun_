<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarCentroCostoRequest;
use App\Http\Requests\GuardarCentroCostoRequest;
use App\Http\Resources\CentroCostoResource;
use App\Models\CentroCosto;

class CentroCostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CentroCostoResource::collection(CentroCosto::all());
    }

    public function ordenes(String $id){
        $centroCosto = CentroCosto::findOrFail($id);
        return new CentroCostoResource($centroCosto->ordenes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarCentroCostoRequest $request)
    {
        return new CentroCostoResource(CentroCosto::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CentroCosto  $centroCosto
     * @return \Illuminate\Http\Response
     */
    public function show(CentroCosto $centroCosto)
    {
        return new CentroCostoResource($centroCosto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CentroCosto  $centroCosto
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCentroCostoRequest $request, CentroCosto $centroCosto)
    {
        $centroCosto->update($request->all());
        return new CentroCostoResource($centroCosto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CentroCosto  $centroCosto
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroCosto $centroCosto)
    {
        $centroCosto->delete();
        return new CentroCostoResource($centroCosto);
    }
}

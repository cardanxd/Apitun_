<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarSucursalRequest;
use App\Http\Requests\GuardarSucursalRequest;
use App\Http\Resources\SucursalResource;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SucursalResource::collection(Sucursal::all());
    }

    public function clientes(String $id)
    {
        $sucursal = Sucursal::findOrFail($id);
        return new SucursalResource($sucursal->clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarSucursalRequest $request)
    {
        return new SucursalResource(Sucursal::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $segmento
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        return new SucursalResource($sucursal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $segmento
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarSucursalRequest $request, Sucursal $sucursal)
    {
        $sucursal->update($request->all());
        return new SucursalResource($sucursal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $segmento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return new SucursalResource($sucursal);
    }
}

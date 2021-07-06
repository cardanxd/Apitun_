<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarCondicionVentaRequest;
use App\Http\Requests\GuardarCondicionVentaRequest;
use App\Http\Resources\CondicionVentaResource;
use App\Models\CondicionVenta;

class CondicionVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CondicionVentaResource::collection(CondicionVenta::all());
    }

    public function ordenes(String $id){
        $condicionVenta = CondicionVenta::findOrFail($id);
        return new CondicionVentaResource($condicionVenta->ordenes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarCondicionVentaRequest $request)
    {
        return new CondicionVentaResource(CondicionVenta::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function show(CondicionVenta $condicionVenta)
    {
        return new CondicionVentaResource($condicionVenta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCondicionVentaRequest $request, CondicionVenta $condicionVenta)
    {
        $condicionVenta->update($request->all());
        return new CondicionVentaResource($condicionVenta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(CondicionVenta $condicionVenta)
    {
        $condicionVenta->delete();
        return new CondicionVentaResource($condicionVenta);
    }
}

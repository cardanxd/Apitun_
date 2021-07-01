<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarSegmentoRequest;
use App\Http\Requests\GuardarSegmentoRequest;
use App\Http\Resources\SegmentoResource;
use App\Models\Segmento;

class SegmentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SegmentoResource::collection(Segmento::all());
    }

    public function clientes(String $id)
    {
        $segmento = Segmento::findOrFail($id);
        return new SegmentoResource($segmento->clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarSegmentoRequest $request)
    {
        return new SegmentoResource(Segmento::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function show(Segmento $segmento)
    {
        return new SegmentoResource($segmento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function update(ActualizarSegmentoRequest $request, Segmento $segmento)
    {
        $segmento->update($request->all());
        return new SegmentoResource($segmento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */

    public function destroy(Segmento $segmento)
    {
        $segmento->delete();
        return new SegmentoResource($segmento);
    }
}

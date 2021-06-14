<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarGiroRequest;
use App\Http\Requests\GuardarGiroRequest;
use App\Http\Resources\GiroResource;
use App\Models\Giro;
use Illuminate\Http\Request;

class GiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GiroResource::collection(Giro::all());
    }

    public function clientes(String $id)
    {
        $giro = Giro::findOrFail($id);
        return new GiroResource($giro->clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(GuardarGiroRequest $request)
    {
        return new GiroResource(Giro::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function show(Giro $giro)
    {
        return new GiroResource($giro);
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
        return new GiroResource($giro);
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
        return new GiroResource($giro);
    }
}

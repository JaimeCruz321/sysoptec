<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use Illuminate\Http\Request;

use App\Models\Computadora;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Computadora $computadora)
    {
        $soportes = Soporte::orderBy('id', 'desc')->where('computadora_id', $computadora->id)->paginate(10);
        //return $soporte;
        return view('soportes.index', compact('soportes', 'computadora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Computadora $computadora)
    {
        return view('soportes.create', compact('computadora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $soporte = Soporte::create($request->all());

        return redirect()->route('soportes.index', $soporte->computadora_id)->with('success','Equipo Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function show(Soporte $soporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Soporte $soporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soporte $soporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soporte $soporte)
    {
        //
    }
}

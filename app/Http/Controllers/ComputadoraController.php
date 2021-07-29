<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadoras = Computadora::orderBy('id', 'desc')->where('estado', 'Disponible')->paginate(10);
        return view('computer.index', compact('computadoras'));
    }

    
    public function asignados()
    {
        $computadoras = Computadora::orderBy('id', 'desc')->where('estado', 'Asignado')->paginate(10);
        return view('computer.asignado', compact('computadoras'));
    }

    public function disponibles()
    {
        $computadoras = Computadora::orderBy('id', 'desc')->where('estado', 'Disponible')->paginate(10);
        return view('computer.disponible', compact('computadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computadora = Computadora::create($request->all());

        return redirect()->route('computer.index', $computadora)->with('success','Equipo Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function show(Computadora $computadora)
    {
        return view('computer.show', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadora $computadora)
    {
        //return $computadora;
        return view('computer.edit', compact('computadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computadora $computadora)
    {
        $computadora->update($request->all());

        return redirect()->route('computer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->route('computer.index')->with('success','Equipo Eliminado Correctamente');;
    }

    public function consulta(Request $request)
    {
        $computadora = Computadora::find($request);
        return $computadora;
        //return view('computer.consulta', $computadora);
    }
}

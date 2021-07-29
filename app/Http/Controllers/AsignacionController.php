<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Computadora;
use App\Models\Responsable;
use Illuminate\Http\Request;


class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacions = Asignacion::orderBy('id', 'desc')->paginate(10);
 
        return view('asignacions.index', compact('asignacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsables = Responsable::all();
        $computadoras = Computadora::where('estado', 'Disponible')->get();
        return view('asignacions.create', compact('responsables', 'computadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computadora = Computadora::find($request->computadora_id);
        $computadora->estado ='Asignado';
        $computadora->save();

        $asignacion = Asignacion::create($request->all()); //inserta los datos del formulario a la BD

        return redirect()->route('asignacions.index');//redirecciona a la vista de Asignacion
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show(Asignacion $asignacion)
    {
        return view('asignacions.show', compact('asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignacion $asignacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignacion $asignacion)
    {
        $asignacion->delete();
        return redirect()->route('asignacions.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use App\Models\Area;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = Responsable::orderBy('id', 'desc')->paginate(10);
        //$area = Area::find($responsables);
        return view('responsables.index', compact('responsables'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        
        return view('responsables.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responsable = Responsable::create($request->all()); //inserta los datos del formulario a la BD
        return redirect()->route('responsables.index');//redirecciona a la vista de Responsable
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        $area = Area::find($responsable->area_id);
        return view('responsables.show',  compact('responsable', 'area'));
    }

    
    public function edit(Responsable $responsable){

        $area = Area::find($responsable->area_id);
        $areas = Area::all();
    
        return view('responsables.edit', compact('responsable', 'area', 'areas'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responsable $responsable)
    {
        $responsable->update($request->all());//Actualiza todos los campos del registro
        return redirect()->route('responsables.show', $responsable);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsable $responsable)
    {
        $responsable->delete();
        return redirect()->route('responsables.index');
    }
}

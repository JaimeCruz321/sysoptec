@extends('layouts.main', ['activePage' => 'language', 'titlePage'=> 'Computadora Asignada'])

@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <h4 class="card-title"> Computadora asignada a:</h4>        
                                <p class="card-category">{{$asignacion->responsable->nombre}}</p>
                                  
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('asignacions.edit', $asignacion)}}" class="btn btn-sm btn-facebook">Editar Asignacion</a>
                                        </div>
                                    </div>
                                    <p><strong>Sistema Operativo: </strong>{{$asignacion->sistema}}</p>
                                    <p><strong>Office: </strong>{{$asignacion->office}}</p>
                                    <p><strong>Direccion de red: </strong>{{$asignacion->ip}}</p>
                                    <p><strong>Nombre de la PC: </strong>{{$asignacion->nombre}}</p>
                                    <p><strong>Codigo de la PC: </strong>{{$asignacion->computadora->codigo}}</p>
                            </div>
                            <div class="card-footer mr-auto">
                             
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>
 @endsection
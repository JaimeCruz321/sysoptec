
@extends('layouts.main', ['activePage' => 'responsable', 'titlePage'=> 'Responsable'])


@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <h4 class="card-title"> Responsable </h4>        
                                <p class="card-category">{{$responsable->nombre}}</p>
                                  
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('responsables.edit', $responsable)}}" class="btn btn-sm btn-facebook">Editar Responsable</a>
                                        </div>
                                    </div>
                                    <p><strong>Usuario: </strong>{{$responsable->usuario}}</p>
                                    <p><strong>Correo: </strong>{{$responsable->correo}}</p>
                                    <p><strong>Interno: </strong>{{$responsable->interno}}</p>
                                    <p><strong>Area: {{$responsable->area->nombre}}</strong></p>
                                
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

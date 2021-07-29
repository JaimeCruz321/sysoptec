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

                                <h4 class="card-title"> Responsables </h4>        
                                <p class="card-category">Responsables Registrados</p>

                                   
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('responsables.create')}}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                                        </div>
                                    </div>
                             <div class="table resposive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Interno</th>
                                        <th>Area</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($responsables as $responsable)
                                        <tr>
                                            <td>{{$responsable->id}}</td>
                                            <td><a href="{{route('responsables.show', $responsable->id)}}">{{$responsable->nombre}}</a></td>
                                            <td>{{$responsable->correo}}</td>
                                            <td>{{$responsable->interno}}</td>
                                            <td>{{$responsable->area->nombre}}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{route('responsables.destroy', $responsable)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-info" type="submit">
                                                    <i class="material-icons">computer</i>
                                                </button>
                                                <button class="btn btn-warning" type="submit">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                
                                                </form>
                                               
                                              
                                                

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                             </div>
                             {{$responsables->links()}}
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

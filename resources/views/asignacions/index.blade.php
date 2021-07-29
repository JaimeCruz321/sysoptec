@extends('layouts.main', ['activePage' => 'asignacion', 'titlePage'=> 'Asignar Equipo'])


@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <h4 class="card-title"> Asignacion </h4>        
                                <p class="card-category">Computadoras Asignadas</p>

                                   
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('asignacions.create')}}" class="btn btn-sm btn-facebook">Asignar Computadora</a>
                                        </div>
                                    </div>
                             <div class="table resposive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Sistema Operativo</th>
                                        <th>Direcion de RED</th>
                                        <th>Office</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($asignacions as $asignacion)
                                        <tr>
                                            <td>{{$asignacion->id}}</td>
                                            <td><a href="{{route('asignacions.show', $asignacion->id)}}">{{$asignacion->nombre}}</a></td>
                                            <td>{{$asignacion->sistema}}</td>
                                            <td>{{$asignacion->ip}}</td>
                                            <td>{{$asignacion->office}}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{route('asignacions.destroy', $asignacion)}}" method="POST">
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
                             {{$asignacions->links()}}
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
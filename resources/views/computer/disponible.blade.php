@extends('layouts.main', ['activePage' => 'equipos_disponibles', 'titlePage'=> 'Computadoras Disponibles'])


@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <h4 class="card-title"> Computadoras </h4>        
                                <p class="card-category">Computadoras Disponibles</p>

                                   
                            </div>
                            <div class="card-body">

                                

                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('computer.create')}}" class="btn btn-sm btn-facebook">Añadir Equipo</a>
                                        </div>
                                    </div>
                             <div class="table resposive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Service Tag</th>
                                        <th>Codigo</th>
                                        <th>Estado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($computadoras as $computadora)
                                        <tr>
                                            <td>{{$computadora->id}}</td>
                                            <td><a href="{{route('computer.show', $computadora->id)}}">{{$computadora->marca}}</a></td>
                                            <td>{{$computadora->modelo}}</td>
                                            <td>{{$computadora->service}}</td>
                                            <td>{{$computadora->codigo}}</td>
                                            <td>{{$computadora->estado}}</td>
                                            <td class="td-actions text-right">

                                                <a href="{{route('computer.index')}}" class="btn btn-info"><i class="material-icons">assignment</i></a>
                                                <a href="#" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                <form action="{{route('computadoras.destroy', $computadora)}}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('delete')
                                                    
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
                             {{$computadoras->links()}}
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

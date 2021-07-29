@extends('layouts.main', ['activePage' => 'menu', 'titlePage'=> 'Soporte'])


@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <h4 class="card-title"> Soporte </h4>        
                                <p class="card-category">Registro de Soporte</p>

                                   
                            </div>
                            <div class="card-body">

                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                  {{session('success')}}
                                </div>
                                @endif

                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('soportes.create', $computadora)}}" class="btn btn-sm btn-facebook">Añadir Soporte</a>
                                        </div>
                                    </div>
                             <div class="table resposive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th>Incidencia</th>
                                        <th>Solucion</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($soportes as $soporte)
                                        <tr>
                                            <td>{{$soporte->id}}</td>
                                            <td><a href="{{route('soportes.show', $soporte->id)}}">{{$soporte->fecha}}</a></td>
                                            <td>{{$soporte->incidente}}</td>
                                            <td>{{$soporte->solucion}}</td>
                                            
                                            <td class="td-actions text-right">

                                                <a href="#" class="btn btn-info"><i class="material-icons">assignment</i></a>
                                                <a href="#" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                <form action="{{route('soportes.destroy', $soporte)}}" method="POST" style="display: inline-block;">
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
                             {{$soportes->links()}}
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

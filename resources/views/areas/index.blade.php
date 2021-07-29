@extends('layouts.main', ['activePage' => 'area', 'titlePage'=> 'Areas de Trabajo'])


@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <h4 class="card-title"> Areas </h4>        
                                <p class="card-category">Division de trabajo</p>

                                   
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('areas.create')}}" class="btn btn-sm btn-facebook">Añadir Area</a>
                                        </div>
                                    </div>
                             <div class="table resposive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Abreviatura</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($areas as $area)
                                        <tr>
                                            <td>{{$area->id}}</td>
                                            <td><a href="{{route('areas.show', $area->id)}}">{{$area->nombre}}</a></td>
                                            <td>{{$area->abreviado}}</td>
                                            <td class="td-actions text-right">

                                                <form action="{{route('areas.destroy', $area)}}" method="POST">
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
                             {{$areas->links()}}
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

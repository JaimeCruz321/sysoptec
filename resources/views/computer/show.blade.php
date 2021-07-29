
 @extends('layouts.main', ['activePage' => 'language', 'titlePage'=> 'Computadora'])

 @section('content')
  <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-header card-header-primary">
 
                                <h4 class="card-title"> Computadora </h4>        
                                <p class="card-category">{{$computadora->marca}}</p>
                                   
                             </div>
                             <div class="card-body">
                                     <div class="row">
                                         <div class="col-12 text-right">
                                            <a href="{{route('computer.edit', $computadora)}}" class="btn btn-sm btn-facebook">Editar Computadora</a>
                                         </div>
                                     </div>
                                     <p><strong>Modelo: </strong>{{$computadora->modelo}}</p>
                                    <p><strong>Service Tag: </strong>{{$computadora->service}}</p>
                                    <p><strong>Codigo: </strong>{{$computadora->codigo}}</p>
                                    <p><strong>Procesador: </strong>{{$computadora->procesador}}</p>
                                    <p><strong>Estado: </strong>{{$computadora->estado}}</p>
                                 
                             </div>
                             <div class="card-footer mr-auto">
                                <a class="btn btn-primary" href="{{route('soportes.index', $computadora)}}" role="button">Soporte</a>
                                <a class="btn btn-primary" href="#" role="button">Reporte</a>
                                
                                
                             </div>
                         </div>
 
                     </div>
                 </div>
             </div>
 
         </div>
     </div>
  </div>
@endsection


 @extends('layouts.main', ['activePage' => 'area', 'titlePage'=> 'Area'])

 @section('content')
  <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-header card-header-primary">
 
                                <h4 class="card-title"> Area </h4>        
                                <p class="card-category">{{$area->nombre}}</p>
                                   
                             </div>
                             <div class="card-body">
                                     <div class="row">
                                         <div class="col-12 text-right">
                                            <a href="{{route('areas.edit', $area)}}" class="btn btn-sm btn-facebook">Editar Area</a>
                                         </div>
                                     </div>
                                     <p><strong>Area: </strong>{{$area->nombre}}</p>
                                    <p><strong>Abreviado: </strong>{{$area->abreviado}}</p>
                                 
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
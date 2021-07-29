
@extends('layouts.main', ['activePage' => 'responsable', 'titlePage' => 'Editar Responsable'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{route('responsables.update', $responsable)}}" method="post" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Editar</h4>
                <p class="card-category">{{$responsable->nombre}}</p>
              </div>
              <div class="card-body">
                
                <!-- Nombre -->
                <div class="row">
                  <label for="nombre_responsable" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="{{ $responsable->nombre }}" autofocus>
                    @if ($errors->has('nombre'))
                      <span class="error text-danger" for="input-nombre_responsable">{{ $errors->first('nombre_responsable') }}</span>
                    @endif
                  </div>
                </div>
                
                <!-- Usuario -->
                <div class="row">
                  <label for="usuario_responsable" class="col-sm-2 col-form-label">Usuario</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese el Usuario" value="{{ $responsable->usuario }}" >
                    @if ($errors->has('usuario_responsable'))
                      <span class="error text-danger" for="input-usuario_responsable">{{ $errors->first('usuario_responsable') }}</span>
                    @endif
                  </div>
                </div>

                <!-- Correo -->
                <div class="row">
                  <label for="correo_responsable" class="col-sm-2 col-form-label">Correo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="correo" placeholder="Ingrese el correo" value="{{ $responsable->correo }}" >
                    @if ($errors->has('correo_responsable'))
                      <span class="error text-danger" for="input-correo_responsable">{{ $errors->first('correo_responsable') }}</span>
                    @endif
                  </div>
                </div>

                <!-- Interno -->
                <div class="row">
                  <label for="interno_responsable" class="col-sm-2 col-form-label">Interno</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="interno" placeholder="Ingrese el interno" value="{{ $responsable->interno }}" >
                    @if ($errors->has('correo_responsable'))
                      <span class="error text-danger" for="input-correo_responsable">{{ $errors->first('correo_responsable') }}</span>
                    @endif
                  </div>
                </div>
                
                <!-- Area -->
                <div class="row">
                  <label for="area_responsable" class="col-sm-2 col-form-label">Area de trabajo</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="area_id" >
                        @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->nombre}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('area_responsable'))
                      <span class="error text-danger" for="input-area_responsable">{{ $errors->first('area_responsable') }}</span>
                    @endif
                  </div>
                </div>

                        
                
                
              </div>
              <!--Footer-->
              <div class="card-footer ml-auto mr-auto">
                
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                
              </div>

              
              <!--End footer-->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
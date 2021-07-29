@extends('layouts.main', ['activePage' => 'computer', 'titlePage' => 'Editar Equipo'])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <form action="{{route('computer.update', $computadora )}}" method="post" class="form-horizontal">
                @csrf
                @method('put')
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Equipo</h4>
                    <p class="card-category">Ingresar datos</p>
                  </div>
                  <div class="card-body">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                    @endif --}}
    
                    <!-- Marca Computadora -->
                    <div class="row">
                      <label for="marca_computadora" class="col-sm-2 col-form-label">Marca Computadora</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="marca" placeholder="Ingrese la marca" value="{{ $computadora->marca }}" autofocus>
                        @if ($errors->has('name'))
                          <span class="error text-danger" for="input-marca_computadora">{{ $errors->first('marca_computadora') }}</span>
                        @endif
                      </div>
                    </div>
                    
                    <!-- Modelo Computadora -->
                    <div class="row">
                      <label for="modelo_computadora" class="col-sm-2 col-form-label">Modelo Computadora</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="modelo" placeholder="Ingrese el Modelo" value="{{ $computadora->modelo }}" >
                        @if ($errors->has('modelo_computadora'))
                          <span class="error text-danger" for="input-modelo_computadora">{{ $errors->first('modelo_computadora') }}</span>
                        @endif
                      </div>
                    </div>
    
                    <!-- Service Tag Computadora -->
                    <div class="row">
                      <label for="service_tag_computadora" class="col-sm-2 col-form-label">Service Tag</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="service" placeholder="Ingrese el Service Tag" value="{{ $computadora->service }}" >
                        @if ($errors->has('service_tag_computadora'))
                          <span class="error text-danger" for="input-service_tag_computadora">{{ $errors->first('service_tag_computadora') }}</span>
                        @endif
                      </div>
                    </div>
    
                    <!-- Codigo Computadora -->
                    <div class="row">
                      <label for="codigo_computadora" class="col-sm-2 col-form-label">Codigo Activo</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo" value="{{ $computadora->codigo }}" >
                        @if ($errors->has('codigo_computadora'))
                          <span class="error text-danger" for="input-codigo_computadora">{{ $errors->first('codigo_computadora') }}</span>
                        @endif
                      </div>
                    </div>
                    
                    <!-- Procesador Computadora -->
                    <div class="row">
                      <label for="nombre_computadora" class="col-sm-2 col-form-label">Procesador</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="procesador" placeholder="Ingrese el nombre" value="{{ $computadora->procesador }}" >
                        @if ($errors->has('nombre_computadora'))
                          <span class="error text-danger" for="input-nombre_computadora">{{ $errors->first('nombre_computadora') }}</span>
                        @endif
                      </div>
                    </div>
    
                    <!-- Estado Computadora -->
                    <div class="row">
                      <label for="ip_computadora" class="col-sm-2 col-form-label">Estado</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="estado" placeholder="Ingrese el IP" value="{{ $computadora->estado }}" >
                        @if ($errors->has('ip_computadora'))
                          <span class="error text-danger" for="input-ip_computadora">{{ $errors->first('ip_computadora') }}</span>
                        @endif
                      </div>
                    </div>
                    
                    
                    
                  </div>
                  <!--Footer-->
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  <!--End footer-->
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
@endsection
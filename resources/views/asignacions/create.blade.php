
@extends('layouts.main', ['activePage' => 'asignacion', 'titlePage' => 'Asignar Equipo'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{route('asignacions.store')}}" method="post" class="form-horizontal">
            @csrf
        
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Asignacion Computadora</h4>
                <p class="card-category">Ingresar datos</p>
              </div>
              <div class="card-body">
                
                <!-- Sistema Operativo -->
                <div class="row">
                  <label for="sistema" class="col-sm-2 col-form-label">Sistema Operativo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="sistema" placeholder="Ingrese el Sistema Opetativo" value="" autofocus>
                    @if ($errors->has('sistema'))
                      <span class="error text-danger" for="input-sistema">{{ $errors->first('sistema') }}</span>
                    @endif
                  </div>
                </div>
                
                <!-- Office -->
                <div class="row">
                  <label for="office" class="col-sm-2 col-form-label">Version de Office</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="office" placeholder="Ingrese la version del Office" value="" >
                    @if ($errors->has('office'))
                      <span class="error text-danger" for="input-office">{{ $errors->first('office') }}</span>
                    @endif
                  </div>
                </div>

                <!-- Direccion de red -->
                <div class="row">
                  <label for="red" class="col-sm-2 col-form-label">Direccion de Red</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="ip" placeholder="Ingrese la direccion de red" value="" >
                    @if ($errors->has('red'))
                      <span class="error text-danger" for="input-red">{{ $errors->first('red') }}</span>
                    @endif
                  </div>
                </div>
                           
                <!-- Responsable -->
                <div class="row">
                  <label for="responsable" class="col-sm-2 col-form-label">Responsable de la PC</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="responsable_id">
                        <option> Seleccione Responsable</option>
                        @foreach($responsables as $responsable)
                        <option value="{{$responsable->id}}">{{$responsable->nombre}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('responsable'))
                      <span class="error text-danger" for="input-responsable">{{ $errors->first('responsable') }}</span>
                    @endif
                  </div>
                </div>

                 <!-- Nombre de la PC -->
                 <div class="row">
                  <label for="nombre_pc" class="col-sm-2 col-form-label">Nombre de la PC</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre del equipo" value="" >
                    @if ($errors->has('nombre_pc'))
                      <span class="error text-danger" for="input-nombre_pc">{{ $errors->first('nombre_pc') }}</span>
                    @endif
                  </div>
                </div>

                <!-- Computadora -->
                <div class="row">
                    <label for="computadora" class="col-sm-2 col-form-label">Computadora</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="computadora_id">
                            <option>Seleccione una Computadora</option>
                            @foreach($computadoras as $computadora)
                            <option value="{{$computadora->id}}">{{$computadora->marca}} - {{$computadora->codigo}}</option>
                            @endforeach
                        </select>
                      @if ($errors->has('computadora'))
                        <span class="error text-danger" for="input-computadora">{{ $errors->first('computadora') }}</span>
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
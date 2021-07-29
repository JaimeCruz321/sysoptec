@extends('layouts.main', ['activePage' => 'computer', 'titlePage' => 'Registrar Soporte'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{route('soportes.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Soporte a {{$computadora->marca}} {{$computadora->modelo}}</h4>
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
                 


                <!-- fecha Soporte -->
                <div class="row">
                  <label for="fecha" class="col-sm-2 col-form-label">Fecha del soporte</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha" value="{{ old('fecha') }}" autofocus>
                    @if ($errors->has('fecha'))
                      <span class="error text-danger" for="input-fecha">{{ $errors->first('fecha') }}</span>
                    @endif
                  </div>
                </div>
                
                <!-- Incidencia de la falla -->
                <div class="row">
                  <label for="incidencia" class="col-sm-2 col-form-label">Incidencia</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="incidente" placeholder="Ingrese la incidencia" value="{{ old('incidencia') }}" >
                    @if ($errors->has('incidencia'))
                      <span class="error text-danger" for="input-incidencia">{{ $errors->first('incidencia') }}</span>
                    @endif
                  </div>
                </div>

                <!-- Solucion de la falla -->
                <div class="row">
                  <label for="solucion" class="col-sm-2 col-form-label">Solucion</label>
                  <div class="col-sm-7">
                    <input type="text-area" class="form-control" name="solucion" placeholder="ingrece la solucion" value="{{ old('solucion') }}" >
                    @if ($errors->has('solucion'))
                      <span class="error text-danger" for="input-solucion">{{ $errors->first('solucion') }}</span>
                    @endif
                  </div>
                </div>

                <!-- id computadora -->
                <div class="row">
                   
                    <div class="col-sm-7">
                      <input type="hidden" class="form-control" name="computadora_id" placeholder="ingrece la solucion" value="{{ $computadora->id }}" >
                      @if ($errors->has('solucion'))
                        <span class="error text-danger" for="input-solucion">{{ $errors->first('solucion') }}</span>
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
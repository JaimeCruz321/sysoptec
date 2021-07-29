@extends('layouts.main', ['activePage' => 'areas', 'titlePage' => 'Registrar Area'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{route('areas.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Area</h4>
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
                  @if (session('success'))
                  <div class="alert alert-success" role="success">
                    {{session('success')}}
                  </div>
                  @endif


                <!-- Nombre del area -->
                <div class="row">
                  <label for="marca_computadora" class="col-sm-2 col-form-label">Nombre del area de Trabajo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre') }}" autofocus>
                    @if ($errors->has('nombre'))
                      <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                    @endif
                  </div>
                </div>
                
                <!-- Abreviatura del area -->
                <div class="row">
                  <label for="abreviado" class="col-sm-2 col-form-label">Abreviatura del area</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="abreviado" placeholder="Ingrese la abreviatura" value="{{ old('abreviado') }}" >
                    @if ($errors->has('modelo_computadora'))
                      <span class="error text-danger" for="input-abreviado">{{ $errors->first('abreviado') }}</span>
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
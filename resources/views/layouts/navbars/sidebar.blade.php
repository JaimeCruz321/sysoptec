<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('UTI-CNDC') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">dashboard</i>
            <p>{{ __('INICIO') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'area' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('areas.index')}}">
          <i class="material-icons">my_location</i>
            <p>{{ __('Area de Trabajo') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'responsable' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('responsables.index')}}">
          <i class="material-icons">face</i>
            <p>{{ __('Responsable') }}</p>
        </a>
      </li>

      


      <!--li class="nav-item{{ $activePage == 'computer' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('computer.create')}}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Registrar Equipo') }}</p>
        </a>
      </li-->
      
      <!--<li class="nav-item{{ $activePage == 'listado_equipos' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('computer.index')}}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Listado de Equipos') }}</p>
        </a>
      </li>-->
      
      <!-- Barra Desplegable Listado-->

      <li class="nav-item {{ ($activePage == 'menu' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <!--<i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>-->
          <i class="material-icons">list</i>
          <p>{{ __('Listado de Equipos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hidden" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'equipos_disponibles' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('computer.disponibles')}}">
                <span class="sidebar-mini"> - </span>
                <span class="sidebar-normal">{{ __('Equipos Disponible') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'equipos_asignados' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('computer.asignadas')}}">
                <span class="sidebar-mini"> - </span>
                <span class="sidebar-normal"> {{ __('Equipos Asignados') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>





      

      <li class="nav-item{{ $activePage == 'asignacion' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('asignacions.index')}}">
          <i class="material-icons">assignment</i>
            <p>{{ __('Asignacion') }}</p>
        </a>
      </li>


      <!--<li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>-->
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Programar Mantenimiento') }}</p>
        </a>
      </li>
      
      

      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('users.create')}}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>

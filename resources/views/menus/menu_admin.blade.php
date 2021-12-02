<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css" />

<div id="left-menu">
  <div class="sub-left-menu scroll">
    <ul class="nav nav-list">
      <li>
        <div class="left-bg"></div>
      </li>
      <li class="time">
        <h1 class="animated fadeInLeft">00:00</h1>
        <p class="animated fadeInRight"></p>
      </li>
      <li class="active ripple">
        <a href="/admin"><span class="icon-home icons" style="font-size:1em;"></span> Inicio
        
        </a>
        <ul class="nav nav-list tree">
        </ul>
      </li>

      <li class="ripple"><a class="tree-toggle nav-header"><span class="icon-user icons" style="font-size:1em;"></span> Usuarios <span class="fa-angle-right fa right-arrow text-right"></span> </a>
        <ul class="nav nav-list tree">
          <li><a href="/Usuario">Gestionar Usuarios</a></li>
          <li><a href="/Usuarioform">Registrar Usuarios</a></li>
        </ul>
      </li>
      
      <li class="ripple"><a class="tree-toggle nav-header"><span class=" icon-people" style="font-size:1em;"></span> Visitantes <span class="fa-angle-right fa right-arrow text-right"></span> </a>
        <ul class="nav nav-list tree">
          <li><a href="/Visitante">Gestionar visitantes</a></li>
          <li><a href="/Visitanteform">Registrar Visitantes</a></li>
        </ul>
      </li>
      <li class="ripple"><a class="tree-toggle nav-header"><i class="lar la-building" style="font-size:20px;"></i>&nbsp;&nbsp; Residentes <span class="fa-angle-right fa right-arrow text-right"></span> </a>
        <ul class="nav nav-list tree">
          <li><a href="/residente">Gestionar residentes</a></li>
          <li><a href="residentecreate">Registrar</a></li>

        </ul>
      </li>

      <li class="ripple"><a class="tree-toggle nav-header"><i class="las la-car-side" style="font-size:20px;"></i></i>&nbsp;&nbsp; Vehículos<span class="fa-angle-right fa right-arrow text-right"></span> </a>
        <ul class="nav nav-list tree">
          <li><a href="/vehiculo">Gestionar vehículos</a></li>
          <li><a href="{{route('vehiculo.form')}}">Registrar</a></li>

        </ul>
      </li>
      
     
      <li class="ripple"><a class="tree-toggle nav-header"><i class="las la-parking" style="font-size:20px;"></i>&nbsp;&nbsp; Parqueadero <span class="fa-angle-right fa right-arrow text-right"></span> </a>
        <ul class="nav nav-list tree">
          <li><a href="/parqueadero">Gestionar parqueaderos</a></li>
          <li><a href="{{route('parqueadero.form')}}">Registrar</a></li>
        </ul>
      </li>

      <li class="ripple"><a class="tree-toggle nav-header"><i class="lar la-building" style="font-size:20px;"></i>&nbsp;&nbsp; Apartamentos <span class="fa-angle-right fa right-arrow text-right"></span> </a>
        <ul class="nav nav-list tree">
          <li><a href="/apartamento">Gestionar apartamento</a></li>
          <li><a href="apartamentocreate">Registrar</a></li>
        </ul>
      </li>
      


      <li class="ripple">
        <a  href="/Datos">
          <span class="icon-chart icons" style="font-size:1em;"></span> Estadísticas
       
        </a>
      </li>
      


    </ul>
  </div>
</div>
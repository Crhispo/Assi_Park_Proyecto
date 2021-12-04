<link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css" />
<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
      <a href="/Dashboard" class="navbar-brand">
        <img src="asset\img\LOGO_ASSIPARK_BLANCO.png" style="  width: 270px; height: 53px ; margin-left: -50px; MARGIN-TOP: -14PX"></a>
      </a>





      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="user-name"><span>

            @if(!isset(Auth::user()->NOMBRE) && !isset(Auth::user()->APELLIDO))
            Nulo |
            @else
            {{ Auth::user()->NOMBRE }} {{ Auth::user()->APELLIDO }} |
            @endif

            @if(!isset(Auth::user()->ID_TIPO_USUARIO))
            Nulo
            @else
            @if (Auth::user()->ID_TIPO_USUARIO == 1)
            <strong>Administador</strong>
            @elseif (Auth::user()->ID_TIPO_USUARIO == 2)
            <strong>Secretaria</strong>
            @else
            <strong>Guarda seguridad</strong>
            @endif</span></li>
        @endif


        <li class="dropdown avatar-dropdown">

          <img src="{{'https://ui-avatars.com/api/?background=random&name='.Auth::user()->NOMBRE.'+'.Auth::user()->APELLIDO}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />

          <ul class="dropdown-menu user-dropdown">
            <li><a href="/Dashboard"><span class="icon-home icons" style="font-size:1em;"> Homepage</span> </a></li>
            <li><a href="/Dashboard#h"><span class="fa fa-calendar">   Calendario</span> </a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><span class=" icon-login " style="position: relative;left: -4px;"> Cerrar Sesión
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                    @csrf
                  </form>
                </span></a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
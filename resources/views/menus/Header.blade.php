<nav class="navbar navbar-default header navbar-fixed-top">
    <div class="col-md-12 nav-wrapper">
      <div class="navbar-header" style="width:100%;">
        <div class="opener-left-menu is-open">
          <span class="top"></span>
          <span class="middle"></span>
          <span class="bottom"></span>
        </div>
          <a href="/" class="navbar-brand">
              <img src="asset\img\LOGO_ASSIPARK_BLANCO.png"
               style="  width: 270px; height: 53px ; margin-left: -50px; MARGIN-TOP: -14PX"></a>
          </a>

        <ul class="nav navbar-nav search-nav">
          <li>
             <div class="search">
              <span class="fa fa-search icon-search" style="font-size:23px;"></span>
              <div class="form-group form-animate-text">
                <input type="text" class="form-text" required>
                <span class="bar"></span>
                <label class="label-search">Barra para: <b>Buscar</b> </label>
              </div>
            </div>
          </li>
        </ul>


            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Salida
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link px-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

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
               <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
               <ul class="dropdown-menu user-dropdown">
                 <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                 <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                 <li role="separator" class="divider"></li>
                 <li class="more">
                  <ul>
                    <li><a href=""><span class="fa fa-cogs"></span></a></li>
                    <li><a href=""><span class="fa fa-lock"></span></a></li>
                    <li><a href=""><span class="fa fa-power-off "></span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
          </ul>
      </div>
    </div>
  </nav>

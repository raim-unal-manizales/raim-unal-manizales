<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RAIM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if (!Auth::guest())
      <ul class="nav navbar-nav">
        @if (Auth::user()->id_rol == 1)
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('Admin.Rol.index') }}">Roles</a></li>
            <li><a href="{{ route('Admin.User.index') }}">Usuarios</a></li>
            <li><a href="{{ route('Admin.Aplication.index') }}">Aplicaciones</a></li>
            <li><a href="{{ route('Admin.Table.index') }}">Tablas</a></li>
            <li><a href="{{ route('Admin.TypeField.index') }}">Tipo de Campo</a></li>
            <li><a href="{{ route('Admin.FieldTable.index') }}">Campo de tabla</a></li>
            <li><a href="{{ route('Admin.Option.index') }}">Opciones de Campo</a></li>
            <li><a href="{{ route('Admin.FieldUser.index') }}">Campos Usuario</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">xxxxx</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">xxxxxxxx</a></li>
          </ul>
        </li>
        @endif
      </ul>
      @endif

          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
              @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Ingresar</a></li>
                <li><a href="{{ url('/register') }}">Registrar</a></li>
              @else
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                </ul>
                </li>
              @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
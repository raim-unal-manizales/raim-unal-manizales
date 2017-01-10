@extends('template.main')

@section('title', 'Seccion de  Estudiante')

@section('content')

<div class="contentHeader row">
	<h1 class="pull-left">Opciones de Usuario</h1>
</div>
	@include('flash::message')
<div class="row">
        <div class="col-lg-3 col-md-6">
					<div class="col.md-2">
						<div class="panel panel-default">
							<div class="panel-body">

								<a href="" class="">
									<img class="img-responsive img-article" src="" alt="...">
								</a>

								<a href="" class=""><h3 class="text-center"></h3></a>
								<hr>
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Estudiante.edit', $user->id) }}">Información General</a>

								<div class="pull-right">
									<i class="glyphicon glyphicon-share-alt"></i>
								</div>

							</div>
						</div>
					</div>
        </div>
        <div class="col-lg-3 col-md-6">
					<div class="col.md-2">
						<div class="panel panel-default">
							<div class="panel-body">

								<a href="" class="">
									<img class="img-responsive img-article" src="" alt="...">
								</a>

								<a href="" class=""><h3 class="text-center"></h3></a>
								<hr>
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Estudiante.EditApps', $user->id) }}">Información de Apps</a>

								<div class="pull-right">
									<i class="glyphicon glyphicon-share-alt"></i>
								</div>

							</div>
						</div>
					</div>
        </div>

        <div class="col-lg-3 col-md-6">
					<div class="col.md-2">
						<div class="panel panel-default">
							<div class="panel-body">

								<a href="" class="">
									<img class="img-responsive img-article" src="" alt="...">
								</a>

								<a href="" class=""><h3 class="text-center"></h3></a>
								<hr>
								<i class="fa fa-folder-open-o"></i>

                @if ($user->need->NEED == "Si")
                  <a href="{{ route('Estudiante.estilosCreate', $user->id) }}">Editar estilos de aprendizaje</a>
                @else
                  <a href="{{ route('Estudiante.estilosEdit', $user->id) }}">Crear estilos de aprendizaje</a>
                @endif

								<div class="pull-right">
									<i class="glyphicon glyphicon-share-alt"></i>
								</div>

							</div>
						</div>
					</div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="col.md-2">
            <div class="panel panel-default">
              <div class="panel-body">

                <a href="" class="">
                  <img class="img-responsive img-article" src="" alt="...">
                </a>

                <a href="" class=""><h3 class="text-center"></h3></a>
                <hr>
                <i class="fa fa-folder-open-o"></i> <a href="{{ route('Estudiante.index') }}">Necesidades Especiales</a>

                <div class="pull-right">
                  <i class="glyphicon glyphicon-share-alt"></i>
                </div>

              </div>
            </div>
          </div>
        </div>
</div>
@endsection

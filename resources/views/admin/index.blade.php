@extends('template.main')

@section('title', 'Seccion de  Administrador')

@section('content')



<div class="contentHeader row">
	<h1 class="pull-left">Panel de administracion</h1>
</div>

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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.Rol.index') }}">Roles</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.User.index') }}">Usuarios</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.Aplication.index') }}">Aplicaciones</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.Table.index') }}">Tablas</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.TypeField.index') }}">Tipo de Campo</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.FieldTable.index') }}">Campo de tabla</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.Option.index') }}">Opciones de Campo</a>
								
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
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('Admin.FieldUser.index')  }}">Campos Usuario</a>
								
								<div class="pull-right">
									<i class="glyphicon glyphicon-share-alt"></i>
								</div>
								
							</div>						
						</div>					
					</div>
                </div>

</div>

           
@endsection
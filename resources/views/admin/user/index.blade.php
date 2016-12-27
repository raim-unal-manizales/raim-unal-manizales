@extends('template.main')

@section('title', 'Listar Usuarios')

@section('content')

<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Usuarios</h1>
   		<a href=" {{ route('Admin.User.create') }}" class="btn btn-primary">Nuevo Usuario</a>

  </div>

<!--
	//fin de la cabezera del contenido
-->
<!--
	//cuerpo del contenido
-->
  <div class="">

	<table class="zebraTabla">
		<thead>
			<th><span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
			<th>Nombre Usuario</th>
			<th>Primer Nombre</th>
			<th>Segundo Nombre</th>
			<th>Apellidos</th>
			<th>Correo</th>
			<th>rol</th>
			<th>Acciones</th>
		</thead>
		<tbody>

			@foreach($users as $user)
				<tr>
					<td>{{ $user-> id}}</td>
					<td>{{ $user-> user_name}}</td>
					<td>{{ $user-> first_name}}</td>
					<td>{{ $user-> second_name}}</td>
					<td>{{ $user-> last_name}}</td>
					<td>{{ $user-> email}}</td>
					<td>
						@if($user->rol->name == "admin")
							<span class="label label-danger">{{ $user->rol->name}}</span>
						@elseif($user->rol->name == "creador")
							<span class="label label-warning">{{ $user->rol->name}}</span>
						@elseif($user->rol->name == "estudiante")
							<span class="label label-success">{{ $user->rol->name}}</span>
						@endif
					</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.User.show', $user->id) }}" class="" title="Ver" alt="Ver" value="ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.User.editAll', $user->id) }}" class="" title="Editar" alt="Editar" value="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.User.delete', $user->id) }}" class="" title="Eliminar" alt="Eliminar" value="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

						</div>
					</td>
				</tr>
			@endforeach

		</tbody>

	</table>
	{!! $users->render() !!}
  </div>
<!--
	//fin del cuerpo del contenido
-->

@endsection

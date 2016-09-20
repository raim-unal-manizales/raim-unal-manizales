@extends('template.main')

@section('title', 'Listar Usuarios')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Usuarios</h1>
   		<a href=" {{ route('Admin.User.create') }}" class="">Nuevo Usuario</a>
  
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
			<th>Id</th>
			<th>Nombre Usuario</th>
			<th>Nombre</th>
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
					<td>{{ $user-> name}}</td>
					<td>{{ $user-> last_name}}</td>
					<td>{{ $user-> email}}</td>
					<td>{{ $user-> rol_name}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.User.show', $user->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.User.edit', $user->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.User.delete', $user->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>

							<a href="{{ route('Admin.FieldUser.EditApps', $user->id) }}" class="" title="Actualizar" alt="Actualizar">Actualizar</a>

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
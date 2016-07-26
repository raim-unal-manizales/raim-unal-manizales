@extends('template.main')

@section('title', 'Listar Roles')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Roles</h1>
   		<a href=" {{ route('Admin.Rol.create') }}" class="">Nuevo Rol</a>
  
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
			<th>ID</th>
			<th>Name</th>
			<th>Descrepcion</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($roles as $rol)
				<tr>
					<td>{{ $rol-> id}}</td>
					<td>{{ $rol-> name}}</td>
					<td>{{ $rol-> description}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.Rol.show', $rol->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.Rol.edit', $rol->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.Rol.delete', $rol->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
						</div>	
					</td>
				</tr>	
			@endforeach
			
		</tbody>

	</table>
	{!! $roles->render() !!}
  </div>
<!-- 
	//fin del cuerpo del contenido
--> 
	
@endsection



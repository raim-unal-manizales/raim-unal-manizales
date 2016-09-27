@extends('template.main')

@section('title', 'Listar Tablas')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Tablas</h1>
   		<a href=" {{ route('Admin.Table.create') }}" class="">Nueva Tabla</a>
  
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
			<th>Descripcion</th>
			<th>Aplicacion</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($tables as $table)
				<tr>
					<td>{{ $table-> id}}</td>
					<td>{{ $table-> name}}</td>
					<td>{{ $table-> description}}</td>
					<td>{{ $table-> app_name}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.Table.show', $table->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.Table.edit', $table->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.Table.delete', $table->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
						</div>	
					</td>
				</tr>	
			@endforeach
			
		</tbody>

	</table>
	{!! $tables->render() !!}
  </div>
<!-- 
	//fin del cuerpo del contenido
--> 
	
@endsection
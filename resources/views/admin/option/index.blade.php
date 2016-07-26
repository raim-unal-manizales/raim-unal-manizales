@extends('template.main')

@section('title', 'Listar Opciones')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Opciones</h1>
   		<a href=" {{ route('Admin.Option.create') }}" class="">Nueva Opcion</a>
  
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
			<th>Opcion Aplicacion</th>
			<th>Campo Tabla</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($options as $option)
				<tr>
					<td>{{ $option-> id}}</td>
					<td>{{ $option-> name}}</td>
					<td>{{ $option-> description}}</td>
					<td>{{ $option-> id_option_app}}</td>
					<td>{{ $option-> fieldTable_name}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.Option.show', $option->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.Option.edit', $option->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.Option.delete', $option->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
						</div>	
					</td>
				</tr>	
			@endforeach
			
		</tbody>

	</table>
	{!! $options->render() !!}
  </div>
<!-- 
	//fin del cuerpo del contenido
--> 
	
@endsection
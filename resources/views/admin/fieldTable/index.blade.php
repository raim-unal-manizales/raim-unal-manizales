@extends('template.main')

@section('title', 'Listar campos de tabla')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar campos de tabla</h1>
   		<a href=" {{ route('Admin.FieldTable.create') }}" class="">Nuevo campo de tabla</a>
  
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
			<th>Name Base Datos</th>
			<th>tabla</th>
			<th>tipo de campo</th>
			<th>recomendacion</th>
			<th>requerido</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($fieldTables as $fieldTable)
				<tr>
					<td>{{ $fieldTable-> id}}</td>
					<td>{{ $fieldTable-> name}}</td>
					<td>{{ $fieldTable-> name_db}}</td>
					<td>{{ $fieldTable-> table_name}}</td>
					<td>{{ $fieldTable-> typeField_name}}</td>
					<td>{{ $fieldTable-> field_recommendation}}</td>
					<td>{{ $fieldTable-> field_required}}</td>
					
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.FieldTable.show', $fieldTable->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.FieldTable.edit', $fieldTable->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.FieldTable.delete', $fieldTable->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
						</div>	
					</td>
				</tr>	
			@endforeach
			
		</tbody>

	</table>
	{!! $fieldTables->render() !!}
  </div>
<!-- 
	//fin del cuerpo del contenido
--> 
	
@endsection
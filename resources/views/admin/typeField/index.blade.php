@extends('template.main')

@section('title', 'Listar tipos de campos')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar tipos de campos</h1>
   		<a href=" {{ route('Admin.TypeField.create') }}" class="">Nuevo Tipo de Campo</a>
  
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
			<th>html</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($typeFields as $typeField)
				<tr>
					<td>{{ $typeField-> id}}</td>
					<td>{{ $typeField-> name}}</td>
					<td>{{ $typeField-> description}}</td>
					<td>{{ $typeField-> html}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.TypeField.show', $typeField->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.TypeField.edit', $typeField->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.TypeField.delete', $typeField->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
						</div>	
					</td>
				</tr>	
			@endforeach
			
		</tbody>

	</table>
	{!! $typeFields->render() !!}
  </div>
<!-- 
	//fin del cuerpo del contenido
--> 
	
@endsection
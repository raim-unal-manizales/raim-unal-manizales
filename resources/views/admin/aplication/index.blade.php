@extends('template.main')

@section('title', 'Listar Roles')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Aplicaciones</h1>
   		<a href=" {{ route('Admin.Aplication.create') }}" class="">Nueva Aplicacion</a>
  
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
			<th>logo</th>
			<th>tipo</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($aplications as $aplication)
				<tr>
					<td>{{ $aplication-> id}}</td>
					<td>{{ $aplication-> name}}</td>
					<td><img src="{{$aplication->logo}}"  style="max-width: 100px; max-height: 100px; min-width: 100px; min-height: 100px;" class="img-responsive"></td>
					<td>{{ $aplication-> type}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.Aplication.show', $aplication->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.Aplication.edit', $aplication->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.Aplication.delete', $aplication->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
						</div>	
					</td>
				</tr>	
			@endforeach
			
		</tbody>

	</table>
	{!! $aplications->render() !!}
  </div>
<!-- 
	//fin del cuerpo del contenido
--> 
	
@endsection
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
@include('flash::message')

  <div class="">

	<table class="zebraTabla">
		<thead>
			<th>#</th>
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
					<td>{{ $table->aplication->name}}</td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.Table.show', $table->id) }}" class="" title="Ver" alt="Ver" value="ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.Table.edit', $table->id) }}" class="" title="Editar" alt="Editar" value="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.Table.delete', $table->id) }}" class="" title="Eliminar" alt="Eliminar" value="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

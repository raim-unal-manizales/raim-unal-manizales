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
@include('flash::message')
  <div class="">

	<table class="zebraTabla">
		<thead>
			<th>#</th>
			<th>Name</th>
			<th>Name Base Datos</th>
      <th>Relación Local</th>
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
          <td>{{ $fieldTable-> locale_relation}}</td>
          <td>{{ $fieldTable->table->name}}</td>
					<td>{{ $fieldTable->types_field->name }}</td>
          <td>
            @if($fieldTable-> field_recommendation == "True")
              <span class="label label-success">{{ $fieldTable-> field_recommendation}}</span>
            @else
              <span class="label label-default">{{ $fieldTable-> field_recommendation}}</span>
            @endif
          </td>
          <td>
            @if($fieldTable-> field_required == "True")
              <span class="label label-success">{{ $fieldTable-> field_required}}</span>
            @else
              <span class="label label-default">{{ $fieldTable-> field_required}}</span>
            @endif
          </td>

					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.FieldTable.show', $fieldTable->id) }}" class="" title="Ver" alt="Ver" value="ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.FieldTable.edit', $fieldTable->id) }}" class="" title="Editar" alt="Editar" value="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.FieldTable.delete', $fieldTable->id) }}" class="" title="Eliminar" alt="Eliminar" value="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

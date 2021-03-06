@extends('template.main')

@section('title', 'Eliminar Campo de Tabla')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Eliminar Campo de Tabla</h1>
  </div>

<!--
	//fin de la cabezera del contenido
-->

	{!! Form::open(['route' => ['Admin.FieldTable.destroy', $fieldTable->id], 'method' => 'DELETE']) !!}

	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $fieldTable->id !!}</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td>{!! $fieldTable->name !!}</td>
			</tr>

			<tr>
				<td>Nombre Base Datos</td>
				<td>{!! $fieldTable->name_db !!}</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>{!! $fieldTable->description !!}</td>
			</tr>
      <tr>
				<td>Descripcion</td>
				<td>{!! $fieldTable->description !!}</td>
			</tr>
      <tr>
				<td>tabla</td>
				<td>{!! $fieldTable->table->name !!}</td>
			</tr>
			<tr>
				<td>tipo de campo</td>
				<td>{!! $fieldTable->types_field->name !!}</td>
			</tr>
			<tr>
				<td>requerido</td>
				<td>{!! $fieldTable->field_required!!}</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">
		{!! Form::submit('Aceptar',['class' => '']) !!}
		<a href="{{ route('Admin.FieldTable.index') }}">Cancelar</a>
	</div>

	{!! Form::close() !!}

@endsection

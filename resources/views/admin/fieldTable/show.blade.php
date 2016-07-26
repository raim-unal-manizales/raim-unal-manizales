@extends('template.main')

@section('title', 'ver Tabla')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Ver Tabla</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.FieldTable.index'], 'method' => 'GET','novalidate' => 'novalidate']) !!}
	
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
				<td>tabla</td>
				<td>{!! $table->name!!}</td>
			</tr>
			<tr>
				<td>tipo de campo</td>
				<td>{!! $typeField->name !!}</td>
			</tr>
			<tr>
				<td>Campo para Recomendacion</td>
				<td>{!! $fieldTable->field_recommendation !!}</td>
			</tr>
			<tr>
				<td>requerido</td>
				<td>{!! $fieldTable->field_required !!}</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
	</div>

	{!! Form::close() !!}

@endsection
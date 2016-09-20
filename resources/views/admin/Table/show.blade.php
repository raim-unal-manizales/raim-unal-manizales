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
	
	{!! Form::open(['route' => ['Admin.Table.index'], 'method' => 'GET','novalidate' => 'novalidate']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $table->id !!}</td>
			</tr>
			<tr>
				<td>Nombres</td>
				<td>{!! $table->name !!}</td>
			</tr>

			<tr>
				<td>Descripcion</td>
				<td>{!! $table->description !!}</td>
			</tr>
			<tr>
				<td>Rol</td>
				<td>{!! $table_app->name!!}</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
	</div>

	{!! Form::close() !!}

@endsection
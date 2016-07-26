@extends('template.main')

@section('title', 'ver Opcion')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Ver Opcion</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.Option.index'], 'method' => 'GET','novalidate' => 'novalidate']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $option->id !!}</td>
			</tr>
			<tr>
				<td>Nombres</td>
				<td>{!! $option->name !!}</td>
			</tr>

			<tr>
				<td>Descripcion</td>
				<td>{!! $option->description !!}</td>
			</tr>

			<tr>
				<td>id Opcion Aplicacion</td>
				<td>{!! $option->id_option_app !!}</td>
			</tr>
			<tr>
				<td>Campo de Tabla</td>
				<td>{!! $option_fieldTable->name!!}</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
	</div>

	{!! Form::close() !!}

@endsection
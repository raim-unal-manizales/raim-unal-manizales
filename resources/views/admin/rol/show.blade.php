@extends('template.main')

@section('title', 'Ver Rol')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Ver Rol</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.Rol.index'], 'method' => 'GET','novalidate' => 'novalidate']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $rol->id !!}</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td>{!! $rol->name !!}</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>{!! $rol->description !!}</td>
			</tr>
		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
	</div>

	{!! Form::close() !!}

@endsection
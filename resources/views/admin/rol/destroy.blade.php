@extends('template.main')

@section('title', 'Eliminar Rol')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Eliminar Rol</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.Rol.destroy', $rol->id], 'method' => 'DELETE']) !!}
	
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
		<a href="{{ route('Admin.Rol.index') }}">Cancelar</a>	
	</div>

	{!! Form::close() !!}

@endsection
@extends('template.main')

@section('title', 'Eliminar Tipo de campo')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Eliminar Tipo de Campo</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.TypeField.destroy', $typeField->id], 'method' => 'DELETE']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $typeField->id !!}</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td>{!! $typeField->name !!}</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>{!! $typeField->description !!}</td>
			</tr>
			<tr>
				<td>Html</td>
				<td>{!! $typeField->html !!}</td>
			</tr>
		</table>
	</div>
	
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
		<a href="{{ route('Admin.TypeField.index') }}">Cancelar</a>	
	</div>

	{!! Form::close() !!}

@endsection
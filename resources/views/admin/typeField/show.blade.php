@extends('template.main')

@section('title', 'Ver Tipo de Campo')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Ver Tipo de Campo</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.TypeField.index'], 'method' => 'GET','novalidate' => 'novalidate']) !!}
	
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
	</div>

	{!! Form::close() !!}

@endsection
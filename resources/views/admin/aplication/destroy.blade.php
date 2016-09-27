@extends('template.main')

@section('title', 'Eliminar Aplicacion')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Eliminar Aplicacion</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.Aplication.destroy', $aplication->id], 'method' => 'DELETE']) !!}
	
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $aplication->id !!}</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td>{!! $aplication->name !!}</td>
			</tr>
			<tr>
				<td>Url</td>
				<td>{!! $aplication->url !!}</td>
			</tr>
			<tr>
				<td>Logo</td>
				<td><img src="{{$aplication->logo}}" class="img-responsive"></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td>{!! $aplication->type !!}</td>
			</tr>
			<tr>
				<td>Estado</td>
				<td>{!! $aplication->state !!}</td>
			</tr>
			<tr>
				<td>Requiere Informacion</td>
				<td>{!! $aplication->rquiered_information!!}</td>
			</tr>
			<tr>
				<td>Requiere Personalización</td>
				<td>{!! $aplication->rquiered_personalization!!}</td>
			</tr>
			<tr>
				<td>Requiere NEDD</td>
				<td>{!! $aplication->rquiered_NEDD!!}</td>
			</tr>
			<tr>
				<td>Requiere NEDD</td>
				<td>{!! $aplication->rquiered_learningStyle!!}</td>
			</tr>
		</table>
	</div>
	
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
		<a href="{{ route('Admin.Aplication.index') }}">Cancelar</a>	
	</div>

	{!! Form::close() !!}

@endsection
@extends('template.main')

@section('title', 'Editar Rol ')

@section('content')

<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Rol</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.Rol.update', $rol], 'method'=> 'PUT']) !!}
		
		<div class="fieldForm">

			{!! Form::label('name','Nombre') !!}

			{!! Form::text('name', $rol->name ,['class' => '', 'placeholder' => 'Nombre Del Rol','required']) !!}

		</div>

		<div class="fieldForm">

			{!! Form::label('description','Descripcion') !!}

			{!! Form::textarea('description', $rol->description ,['class' => '']) !!}

		</div>

		<div class="buttonTable">
			{!! Form::submit('Actualizar',['class' => '']) !!}
			<a href="{{ route('Admin.Rol.index') }}">Cancelar</a>
		</div>


	{!! Form::close() !!}

@endsection
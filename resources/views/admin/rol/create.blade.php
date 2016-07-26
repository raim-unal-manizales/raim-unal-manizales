@extends('template.main')

@section('title', 'Crear Rol')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Crear Rol</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => 'Admin.Rol.store', 'method' => 'POST','novalidate' => 'novalidate']) !!}
		
		<div class="fieldForm">

			{!! Form::label('name','Nombre') !!}

			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre Del Rol','required']) !!}

		</div>

		<div class="fieldForm">

			{!! Form::label('description','Descripcion') !!}

			{!! Form::textarea('description', null ,['class' => '']) !!}

		</div>

		<div class="buttonTable">
			{!! Form::submit('Guardar',['class' => '']) !!}
			<a href="{{ route('Admin.Rol.index') }}">Cancelar</a>
			
		</div>

	{!! Form::close() !!}

@endsection
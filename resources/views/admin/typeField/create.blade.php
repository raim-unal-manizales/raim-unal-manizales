@extends('template.main')

@section('title', 'Crear tipo de campo')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Crear tipo de campo</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => 'Admin.TypeField.store', 'method' => 'POST','novalidate' => 'novalidate']) !!}
		
		<div class="fieldForm">

			{!! Form::label('name','Nombre') !!}

			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre Del campo','required']) !!}

		</div>

		<div class="fieldForm">

			{!! Form::label('description','Descripcion') !!}

			{!! Form::textarea('description', null ,['class' => '']) !!}

		</div>
		<div class="fieldForm">

			{!! Form::label('html','Html') !!}

			{!! Form::text('html', null ,['class' => '', 'placeholder' => 'Html del campo','required']) !!}

		</div>

		<div class="buttonTable">
			{!! Form::submit('Guardar',['class' => '']) !!}
			<a href="{{ route('Admin.TypeField.index') }}">Cancelar</a>
			
		</div>

	{!! Form::close() !!}

@endsection
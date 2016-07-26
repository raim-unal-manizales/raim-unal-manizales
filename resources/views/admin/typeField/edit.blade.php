@extends('template.main')

@section('title', 'Editar Tipo de Campo ')

@section('content')

<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Tipo de Campo</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	{!! Form::open(['route' => ['Admin.TypeField.update', $typeField], 'method'=> 'PUT']) !!}
		
		<div class="fieldForm">

			{!! Form::label('name','Nombre') !!}

			{!! Form::text('name', $typeField->name ,['class' => '', 'placeholder' => 'Nombre Del campo','required']) !!}

		</div>

		<div class="fieldForm">

			{!! Form::label('description','Descripcion') !!}

			{!! Form::textarea('description', $typeField->description ,['class' => '']) !!}

		</div>
		<div class="fieldForm">

			{!! Form::label('html','Html') !!}

			{!! Form::text('html', $typeField->html ,['class' => '', 'placeholder' => 'Html del campo','required']) !!}

		</div>

		<div class="buttonTable">
			{!! Form::submit('Guardar',['class' => '']) !!}
			<a href="{{ route('Admin.TypeField.index') }}">Cancelar</a>
			
		</div>


	{!! Form::close() !!}

@endsection
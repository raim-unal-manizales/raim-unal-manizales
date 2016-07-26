@extends('template.main')

@section('title', 'Crear Tabla')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Crear Tabla</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
-->
	
	{!! Form::open(['route'=> 'Admin.Table.store','method'=> 'POST','novalidate' => 'novalidate']) !!}
		


		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>


		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', null ,['class' => '', 'placeholder' => '','required']) !!}			

		</div>


		<div class="fieldForm">
			{!! Form::label('id_app','Aplicacion') !!}
			{!! Form::select('id_app', $aplication ,null, ['class' => '']) !!}			

		</div>

		<div class="buttonForm">
			{!! Form::submit('Registrar',['class' => '']) !!}
			<a href="{{ route('Admin.Table.index') }}">Cancelar</a>
		</div>



	{!! Form::close() !!}


@endsection
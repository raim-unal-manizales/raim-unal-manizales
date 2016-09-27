@extends('template.main')

@section('title', 'Crear Opcion')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Crear Opcion</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
-->
	
	{!! Form::open(['route'=> 'Admin.Option.store','method'=> 'POST','novalidate' => 'novalidate']) !!}
		


		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>


		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', null ,['class' => '', 'placeholder' => '','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_field_table','campo de tabla') !!}
			{!! Form::select('id_field_table', $fieldTable ,null, ['class' => '']) !!}			

		</div>


		<div class="fieldForm">
			{!! Form::label('id_option_app','id opcion en aplicacion') !!}
			{!! Form::number('id_option_app', null ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>

		<div class="buttonForm">
			{!! Form::submit('Registrar',['class' => '']) !!}
			<a href="{{ route('Admin.Option.index') }}">Cancelar</a>
		</div>



	{!! Form::close() !!}


@endsection
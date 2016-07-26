@extends('template.main')

@section('title', 'Editar Option')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Option</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
-->
	
	{!! Form::open(['route' => ['Admin.Option.update', $option], 'method'=> 'PUT','novalidate' => 'novalidate']) !!}
		

		
		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $option->name ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>


		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', $option->description ,['class' => '', 'placeholder' => '','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_field_table','campo de tabla') !!}
			{!! Form::select('id_field_table', $fieldTable ,$option_fieldTable->name, ['class' => '']) !!}			

		</div>


		<div class="fieldForm">
			{!! Form::label('id_option_app','id opcion en aplicacion') !!}
			{!! Form::number('id_option_app', $option->id_option_app ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>

		<div class="buttonForm">
			{!! Form::submit('Editar',['class' => '']) !!}
			<a href="{{ route('Admin.Option.index') }}">Cancelar</a>
		</div>



	{!! Form::close() !!}


@endsection
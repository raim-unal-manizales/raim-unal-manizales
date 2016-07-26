@extends('template.main')

@section('title', 'Editar Tabla')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Tabla</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
-->
	
	{!! Form::open(['route' => ['Admin.Table.update', $table], 'method'=> 'PUT','novalidate' => 'novalidate']) !!}
		

		
		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $table->name ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>


		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', $table->description ,['class' => '', 'placeholder' => '','required']) !!}			

		</div>


		<div class="fieldForm">
			{!! Form::label('id_app','Aplicacion') !!}
			{!! Form::select('id_app', $aplications ,$table_app->id, ['class' => '']) !!}			

		</div>

		<div class="buttonForm">
			{!! Form::submit('Editar',['class' => '']) !!}
			<a href="{{ route('Admin.Table.index') }}">Cancelar</a>
		</div>



	{!! Form::close() !!}


@endsection
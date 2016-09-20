@extends('template.main')

@section('title', 'Crear Campo de Tabla')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Crear Campo de Tabla</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
-->
	
	{!! Form::open(['route'=> 'Admin.FieldTable.store','method'=> 'POST']) !!}
		


		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>

		<div class="fieldForm">
			{!! Form::label('name_db','Nombre Base Datos') !!}
			{!! Form::text('name_db', null ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>

		<div class="fieldForm">

			{!! Form::label('description','Descripcion') !!}

			{!! Form::textarea('description', null ,['class' => '','required']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('field_recommendation','Campo Para Recomendacion') !!}
			{!! Form::select('field_recommendation', ['True'=>'True','False'=>'False'] ,null, ['class' => '','required']) !!}		
		</div>


		<div class="fieldForm">
			{!! Form::label('field_required','Campo Requerido') !!}
			{!! Form::select('field_required', ['True'=>'True','False'=>'False'] ,null, ['class' => '','required']) !!}		
		</div>

		<div class="fieldForm">
			{!! Form::label('id_table','Id Tabla') !!}
			{!! Form::select('id_table', $table ,null, ['class' => '','required']) !!}			

		</div>
		<div class="fieldForm">
			{!! Form::label('id_type_field','Id Tipo de Campo') !!}
			{!! Form::select('id_type_field', $typeField ,null, ['class' => '','required']) !!}			

		</div>

		<div class="buttonForm">
			{!! Form::submit('Registrar',['class' => '']) !!}
			<a href="{{ route('Admin.FieldTable.index') }}">Cancelar</a>
		</div>



	{!! Form::close() !!}


@endsection
@extends('template.main')

@section('title', 'Editar Campo de Tabla')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Campo de Tabla</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
-->
	
	{!! Form::open(['route' => ['Admin.FieldTable.update', $fieldTable], 'method'=> 'PUT']) !!}
		

		
		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $fieldTable->name ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>

		<div class="fieldForm">
			{!! Form::label('name_db','Nombre Base Datos') !!}
			{!! Form::text('name_db', $fieldTable->name_db ,['class' => '', 'placeholder' => 'Nombre','required']) !!}		

		</div>

		<div class="fieldForm">

			{!! Form::label('description','Descripcion') !!}

			{!! Form::textarea('description', $fieldTable->description  ,['class' => '','required']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('field_recommendation','Campo Para Recomendacion') !!}
			{!! Form::select('field_recommendation', ['True'=>'True','False'=>'False'] ,$fieldTable->field_recommendation, ['class' => '','required']) !!}		
		</div>


		<div class="fieldForm">
			{!! Form::label('field_required','Campo Requerido') !!}
			{!! Form::select('field_required', ['True'=>'True','False'=>'False'] ,$fieldTable->field_required, ['class' => '','required']) !!}			

		</div>
		<div class="fieldForm">
			{!! Form::label('id_table','Id Tabla') !!}
			{!! Form::select('id_table', $table ,$fieldTable_table, ['class' => '','required']) !!}			

		</div>
		<div class="fieldForm">
			{!! Form::label('id_type_field','Id Tipo de Campo') !!}
			{!! Form::select('id_type_field', $typeField ,$fieldTable_typeField, ['class' => '','required']) !!}			

		</div>

		<div class="buttonForm">
			{!! Form::submit('Editar',['class' => '']) !!}
			<a href="{{ route('Admin.FieldTable.index') }}">Cancelar</a>
		</div>



	{!! Form::close() !!}


@endsection
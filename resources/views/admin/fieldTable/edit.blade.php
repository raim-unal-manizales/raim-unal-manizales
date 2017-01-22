@extends('template.main')

@section('title', 'Editar Campo de Tabla')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Editar: </span><strong>  Campo de Tabla</strong></label></h1>
  </div>
<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')

<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::model($fieldTable,['route' => ['Admin.FieldTable.update', $fieldTable], 'method'=> 'PUT' , 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('name_db','Nombre Base Datos') !!}
			{!! Form::text('name_db', null ,['class' => '', 'placeholder' => 'Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', null  ,['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('field_recommendation','Campo Para Recomendacion') !!}
			{!! Form::select('field_recommendation', ['True'=>'True','False'=>'False'] ,null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('field_required','Campo Requerido') !!}
			{!! Form::select('field_required', ['True'=>'True','False'=>'False'] ,null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_table','Tabla') !!}
			{!! Form::select('id_table', $table ,null, ['class' => '']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('id_type_field','Tipo de Campo') !!}
			{!! Form::select('id_type_field', $typeField ,null, ['class' => '']) !!}
		</div>
    
    <div class="fieldForm">
      {!! Form::label('locale_relation','Relación Local: ') !!}
      {!! Form::select(
              'locale_relation',
              [
                'Otro'            => 'No Existente',
                'user_name'       => 'Nombre de Usuario',
                'first_name'      => 'Primer Nombre',
                'second_name'     => 'Segundo Nombre',
                'last_name'       => 'Apellido',
                'educativeLevel'  => 'Nivel Educativo',
                'institution'     => 'Institución Educativo',
                'email'           => 'Correo Electronico',
                'encript'         => 'Contraseña',
                'birth_date'      => 'Fecha de Nacimiento',
                'language'        => 'Lengua Nativa'
              ] ,
              null,
              ['class' => '']
          )
      !!}
    </div>

		<div class="">
      <hr>
			{!! Form::submit('Editar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.FieldTable.index') }}" class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
</div>
</div>

@endsection
